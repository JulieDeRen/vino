<template>
    <h2>Composante de recherche</h2>

    
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