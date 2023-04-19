<template>
  <div>
      <h2 class="text-black">Composante de recherche</h2>
      <input type="text" class="border-green-500 border" @keyup="showSearchOptions($event.target.value)">
      <ul id="vino_bouteille_id">
        <div v-for="vine in this.closestVineList">
          <li @click="selectionneOption(vine.id)" :key="vine.id">{{ vine.nom }}</li>
        </div>
      </ul>
      <!-- Code de la barre de recherche ICI -->
      <input type="hidden" name="vino_bouteille_id" :value="this.idBouteille">
  </div>
</template>

<script>
export default {
  data() {
    return {
      isMenuOpen: false,
      textInput: '',
      vineList: [],
      closestVineList: [],
      idBouteille: 1
    };
  },
  methods: {
    showSearchOptions (text) {
      console.log(text);
      // Code pour filtrer la recherche
      this.closestVineList = [];
      let i = 0;
      if(text !== "") {
        this.closestVineList = this.vineList.filter(elem => {
          if(String(elem.nom.toLowerCase()).startsWith(text.toLowerCase()) && i<=3) {
            i++;
            return true;
          } else if(String(elem.nom.toLowerCase()).includes(text.toLowerCase()) && i<=3) {
            i++;
            return true;
          } else {
            return false;
          }
        })
      }
    },
    selectionneOption (text) {
      console.log(text)
      this.idBouteille = text;
    }
  },
  async beforeMount () {
    axios.get('/bouteilles')
      .then(response => {
          this.vineList = response.data
      })
  }
};
</script>