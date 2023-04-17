<template>
    <div
      class="bg-gray-50 shadow-sm px-4 py-5"
    >
      <div class="flex items-center justify-between mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl">
        <a
          href="/"
          aria-label="Company"
          title="Company"
          class="inline-flex items-center"
        >
          <svg
            class="w-8 text-deep-purple-accent-400"
            viewBox="0 0 24 24"
            stroke-linejoin="round"
            stroke-width="2"
            stroke-linecap="round"
            stroke-miterlimit="10"
            stroke="currentColor"
            fill="none"
          >
            <rect x="3" y="1" width="7" height="12"></rect>
            <rect x="3" y="17" width="7" height="6"></rect>
            <rect x="14" y="1" width="7" height="6"></rect>
            <rect x="14" y="11" width="7" height="12"></rect>
          </svg>

        </a>
        <ul class="flex items-center justify-between hidden space-x-8 lg:flex">
          <li>
            <router-link to="/" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400" aria-label="Our product" title="Our product">
              Accueil
            </router-link>
          </li>
          <li>
            <router-link to="/connecter" class="justify-center font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400" aria-label="Sign in" title="connecter">
              Connecter
            </router-link>
          </li>
          <li>
            <router-link to="/inscrir" class="justify-center font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400" aria-label="Sign up" title="Sign up">
              S'inscrire
            </router-link>
          </li>

        <form class="inline-flex items-center w-full md:justify-between tracking-wide">
          <div class="relative">
            <input placeholder="Recherche de vine" required="" type="text" class="flex-grow w-full h-12 px-4 mb-3 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none md:mr-2 md:mb-0 focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
            @keyup="showSearchOptions($event.target.value)" />
            <ul class="absolute inline-block">
              <li v-for="closeVine in this.closestVineList" class="py-1 px-2 border border-violet-500">{{ closeVine.nom }}</li>
            </ul>
          </div>
          <button type="submit" class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none">
            Recherche
          </button>
        </form>
      </ul>
        <div class="lg:hidden">
          <button
            aria-label="Open Menu"
            title="Open Menu"
            class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline hover:bg-deep-purple-50 focus:bg-deep-purple-50"
            @click="isMenuOpen = true"
          >
            <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
              <path
                fill="currentColor"
                d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"
              ></path>
              <path
                fill="currentColor"
                d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"
              ></path>
              <path
                fill="currentColor"
                d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"
              ></path>
            </svg>
          </button>
          <div v-if="isMenuOpen" class="absolute top-0 left-0 w-full">
            <div class="p-5 bg-white border rounded shadow-sm">
              <div class="flex items-center justify-between mb-4">
                <div>
                  <a
                    href="/"
                    aria-label="Company"
                    title="Company"
                    class="inline-flex items-center"
                  >
                    <svg
                      class="w-8 text-deep-purple-accent-400"
                      viewBox="0 0 24 24"
                      stroke-linejoin="round"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-miterlimit="10"
                      stroke="currentColor"
                      fill="none"
                    >
                      <rect x="3" y="1" width="7" height="12"></rect>
                      <rect x="3" y="17" width="7" height="6"></rect>
                      <rect x="14" y="1" width="7" height="6"></rect>
                      <rect x="14" y="11" width="7" height="12"></rect>
                    </svg>
                  </a>
                </div>
                <div>
                  <button
                    aria-label="Close Menu"
                    title="Close Menu"
                    class="p-2 -mt-2 -mr-2 transition duration-200 rounded hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                    @click="isMenuOpen = false"
                  >
                    <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                      <path
                        fill="currentColor"
                        d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z"
                      ></path>
                    </svg>
                  </button>
                </div>
              </div>
              <nav>
                <ul class="space-y-4">
                  <li>
                    <a
                      href="/"
                      aria-label="Our product"
                      title="Our product"
                      class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400"
                      >Accueil</a
                    >
                  </li>
                  <li>
                    <a
                      href="/sign-in"
                      class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                      aria-label="Sign up"
                      title="Sign up"
                    >
                      Sign in
                    </a>
                  </li>
                  <li>
                    <a
                      href="/sign-up"
                      class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                      aria-label="Sign up"
                      title="Sign up"
                    >
                      Sign up
                    </a>
                  </li>
                  <form class="inline-flex flex-col items-center w-full mb-4 md:flex-row md:px-16 tracking-wide">
                    <div class="relative">
                    <input
                      placeholder="Recherche"
                      required=""
                      type="text"
                      class="flex-grow w-full h-12 px-4 mb-3 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none md:mr-2 md:mb-0 focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                      @keyup="showSearchOptions($event.target.value)"
                    />
                    <ul class="absolute inline-block">
                      <li v-for="closeVine in this.closestVineList">{{ closeVine.nom }}</li>
                    </ul>
                  </div>

                    <button
                      type="submit"
                      class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                    >
                      Subscribe
                    </button>
                  </form>
                </ul>
              </nav>
            </div>
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