<template>
    <div class="flex flex-col items-center py-3">
      <div class="inline-flex items-center">
        <button
          @click="decrementerCompteur"
          class="bg-white rounded-l border text-gray-600 hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50 inline-flex items-center px-2 py-1 border-r border-gray-200"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-4"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
          </svg>
        </button>
        <div
          v-if="!editerManuellement"
          @click="editerManuellement = true"
          class="bg-gray-100 border-t border-b border-gray-100 text-gray-600 hover:bg-gray-100 inline-flex items-center px-4 py-1 select-none"
        >
          {{ compteur }}
        </div>
        <input
          v-if="editerManuellement"
          type="number"
          min="0"
          step="1"
          v-model="compteur"
          @blur="editerManuellement = false"
          class="bg-gray-100 border-t border-b border-gray-100 text-gray-600 hover:bg-gray-100 inline-flex items-center px-4 py-1 select-none"
        />
        <button
          @click="incrementerCompteur"
          class="bg-white rounded-r border text-gray-600 hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50 inline-flex items-center px-2 py-1 border-r border-gray-200"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-4"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
          </svg>
        </button>
      </div>
    </div>
</template>
  
<script>
  import axios from 'axios';
  export default {
    props: ["nbbouteille", "id"],
    data() {
      return {
        compteur: this.nbbouteille,
        editerManuellement: false,
      };
    },
    methods: {
      incrementerCompteur() {
        this.compteur++;
        this.modifierNbBouteille();
      },
      decrementerCompteur() {
        if (this.compteur > 0) {
          this.compteur--;
          this.modifierNbBouteille();
        }
      },
      modifierNbBouteille() {
        let url = window.location.pathname + '/' + this.id;
        axios.put(url, { nbbouteille: this.compteur })
          .then(response => {
            console.log(response.data);
          })
          .catch(error => {
            console.log(error);
          });
        }
    },
  };
</script>
