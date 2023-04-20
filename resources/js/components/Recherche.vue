<template>
  <div class="flex">
    <div>
      <h2 class="text-black">Composante de recherche</h2>
      <input type="text" class="border-green-500 border" @keyup="showSearchOptions($event.target.value);"
      :value="this.textInput">
      <ul>
        <li v-for="vine in this.closestVineList" :key="vine.id" @click="takeBouteille(vine)"
        class="block border p-2"
        >{{ vine.nom }}</li>
      </ul>
      <input type="hidden" :value="this.choixBouteille">
      <!-- Code de la barre de recherche ICI -->
    </div>
    <div>
      <h3>Carte</h3>
      <div class="card flex" v-if="selectedVine">
        <header class="card-header">
          <img :src="this.choixBouteille.image" :alt="this.choixBouteille.nom">
        </header>
        <div class="card-body">
          <h2>{{ this.choixBouteille.nom }}</h2>
        </div>
      </div>
    </div>

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
      choixBouteille: {},
      selectedVine: false
    };
  },
  methods: {
    showSearchOptions (text) {
      this.textInput = text;
      // Code pour filtrer la recherche
      this.closestVineList = [];
      if(text !== "") {
        // Only START WITH NAME ELEMENTS --- FIRST
        this.vineList.forEach( (vine) => {
          if(String(vine.nom.toLowerCase()).startsWith(text.toLowerCase())) {
            this.closestVineList.push(vine)
          }
        })
        // Only CONTAINS && NOT START WITH --- AFTER
        this.vineList.forEach( (vine) => {
          if(!String(vine.nom.toLowerCase()).startsWith(text.toLowerCase())
          && String(vine.nom.toLowerCase()).includes(text.toLowerCase())) {
            this.closestVineList.push(vine);
          }
        })
        this.closestVineList = this.closestVineList.slice(0, 4);
      }
    },
    takeBouteille (vine) {
      this.textInput = vine.nom
      this.choixBouteille = vine;
      this.selectedVine = true;
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