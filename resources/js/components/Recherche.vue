<template>
  <div class="flex flex-col me-4">
    <div class="grid">
      <div class="flex flex-col relative mb-4">
        <input type="text" class="block shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Recherche" @keyup="showSearchOptions($event.target.value);"
        :value="this.textInput">
        <input name="vino_bouteille" type="hidden" :value="this.choixBouteille">
        <!--<button type="submit" @submit.prevent="onSubmit()" class="bg-accent_wine hover:accent_wine-80 text-main font-bold ml-2 py-2 px-4 rounded focus:outline-none focus:shadow-outline">Recherche</button>
        Code de la barre de recherche ICI -->
      </div>
      <ul class="relative">
        <li v-for="vine in this.closestVineList" :key="vine.id" @click="takeBouteille(vine)"
        class="block border p-2"
        >{{ vine.nom }}</li>
      </ul>
    </div>
    <div>
      <div class="card flex" v-if="selectedVine" style="max-width: 300px;">
        <header class="card-header" style="max-width: 300px;">
          <img :src="this.choixBouteille.url_img" :alt="this.choixBouteille.nom" class="max-w-none" height="150px">
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
      this.closestVineList = [];
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