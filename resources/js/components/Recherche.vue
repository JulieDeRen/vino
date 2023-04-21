<template>
  <div class="flex">
    <div class="grid">
      <div class="flex items-start relative mb-4">
        <input type="text" class="block shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Recherche" @keyup="showSearchOptions($event.target.value);"
        :value="this.textInput">
        <input name="vino_bouteille_id" type="hidden" :value="this.choixBouteille.id">
        <input name="vino_bouteille_prix" type="hidden" :value="this.choixBouteille.prix">
        <!--<button type="submit" @submit.prevent="onSubmit()" class="bg-accent_wine hover:accent_wine-80 text-main font-bold ml-2 py-2 px-4 rounded focus:outline-none focus:shadow-outline">Recherche</button>
        Code de la barre de recherche ICI -->
      </div>
      <ul class="relative">
        <li v-for="vine in this.closestVineList" :key="vine.id" @click="takeBouteille(vine)"
        class="block border p-2"
        >{{ vine.nom }}</li>
      </ul>
      <!-- Code de la barre de recherche ICI -->
  </div>
</template>

<script>
export default {
  data() {
    return {
      isMenuOpen: false,
      textInput: '',
      vineList: [],
      closestVineList: []
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
    callFunction (text) {
      console.log(text)
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