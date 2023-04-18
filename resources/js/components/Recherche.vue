<template>
  <div>
      <h2 class="text-black">Composante de recherche</h2>
      <input type="text" class="border-green-500 border" @keydown="showSearchOptions()">
      <ul>
        <li v-for="option in options" :key="option.id"></li>
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