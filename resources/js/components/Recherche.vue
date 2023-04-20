<template>
  <div class="flex">
    <div class="grid">
      <h2 class="text-black">Composante de recherche</h2>
      <div class="flex relative">
        <input type="text" class="border-green-500 border" @keyup="showSearchOptions($event.target.value);"
        :value="this.textInput">
        <input type="hidden" :value="this.choixBouteille">
        <button type="submit" @submit.prevent="onSubmit()" class="block border border-green-500 m-1 p-1">Recherche</button>
        <!-- Code de la barre de recherche ICI -->
      </div>
      <ul class="relative">
        <li v-for="vine in this.closestVineList" :key="vine.id" @click="takeBouteille(vine)"
        class="block border p-2"
        >{{ vine.nom }}</li>
      </ul>
    </div>
    <div>
      <h3>Carte</h3>
      <div class="card flex" v-if="selectedVine" style="max-width: 300px;">
        <header class="card-header">
          <img :src="this.choixBouteille.url_img" :alt="this.choixBouteille.nom" class="max-w-none" width="150">
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
    },
    onSubmit () {

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