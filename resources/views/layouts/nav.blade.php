<nav class="bg-gray-50 shadow-sm px-4 py-5">
      <div class="flex items-center justify-between mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl">
        <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
          <svg class="w-8 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
            <rect x="3" y="1" width="7" height="12"></rect>
            <rect x="3" y="17" width="7" height="6"></rect>
            <rect x="14" y="1" width="7" height="6"></rect>
            <rect x="14" y="11" width="7" height="12"></rect>
          </svg>

        </a>
        <ul class="items-center justify-between hidden space-x-8 lg:flex">
          <li>
            <a href="{{ route('celliers.index') }}" class="justify-center font-medium tracking-wide text-accent_wine transition-colors duration-200 hover:text-section_title" aria-label="celliers" title="celliers">
              Celliers
            </a>
          </li>
          @guest
          <li>
            <a href="{{ route('home') }}" class="justify-center font-medium tracking-wide text-accent_wine transition-colors duration-200 hover:text-section_title" aria-label="articles" title="articles">
             Articles
            </a>
          </li>
          <li>
            <a href="{{ route('bouteilles') }}" class="justify-center font-medium tracking-wide text-accent_wine transition-colors duration-200 hover:text-section_title" aria-label="saq" title="saq">
             SAQ
            </a>
          </li>
          <li>
            <a href="{{ route('login') }}" class="justify-center font-medium tracking-wide text-accent_wine transition-colors duration-200 hover:text-section_title" aria-label="sign-in" title="sign-in">
              Connecter
            </a>
          </li>
          
          <li>
            <a href="{{ route('register') }}" class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-main transition duration-200 rounded bg-accent_wine hover:bg-transparent hover:border border-accent_wine hover:text-accent_wine" aria-label="sign-up" title="sign-up">
              S'inscrire
            </a>
          </li>
          @else
          <li>
            <a href="{{ route('logout') }}" class="justify-center font-medium tracking-wide text-accent_wine transition-colors duration-200 hover:text-gray-500" aria-label="Sign out" title="deconnecter" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              Déconnecter
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>
          </li>
          <li>
            <a href="#" class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-accent_wine transition duration-200 rounded shadow-md border border-accent_wine hover:bg-accent_wine hover:text-main focus:shadow-outline focus:outline-none" aria-label="Compte" title="Compte">
              Compte
            </a>
          </li>
          <li>
            {{ Auth::user()->nom }} <!-- Affichage du nom Utilisateur. À modifier -->
          </li>
          @endguest
        </ul>
<div class="lg:hidden">
        <button
            id="nav-toggle"
            aria-label="Open Menu"
            title="Open Menu"
            class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline hover:bg-deep-purple-50 focus:bg-deep-purple-50"
          >
            <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
              <path fill="currentColor" d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
              <path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"></path>
              <path fill="currentColor" d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
            </svg>
          </button>
          <div id="menu" data-menu-open="true" class="absolute top-0 left-0 w-full">
            <div class="p-5 bg-main border rounded shadow-sm">
              <div class="flex items-center justify-between mb-4">
                <div>
                  <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
                    <svg class="w-8 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                      <rect x="3" y="1" width="7" height="12"></rect>
                      <rect x="3" y="17" width="7" height="6"></rect>
                      <rect x="14" y="1" width="7" height="6"></rect>
                      <rect x="14" y="11" width="7" height="12"></rect>
                    </svg>
                  </a>
                </div>
                <div>
                <button
                    id="nav-close"
                    aria-label="Close Menu"
                    title="Close Menu"
                    class="p-2 -mt-2 -mr-2 transition duration-200 rounded hover:bg-accent_wine focus:outline-none focus:shadow-outline"
                  >
                    <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                      <path fill="currentColor" d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z"></path>
                    </svg>
                  </button>
                </div>
              </div>
              <nav id="nav-content">
                <ul class="space-y-4 flex flex-col items-center justify-center">
                  <li>
                    <a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-accent_wine transition-colors duration-200 hover:text-gray-500">Celliers</a>
                  </li>
                  <li>
                    <a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-accent_wine transition-colors duration-200 hover:text-gray-500">Articles</a>
                  </li>
                  <li>
                    <a href="{{ route('login') }}" class="font-medium tracking-wide text-accent_wine transition-colors duration-200 hover:text-gray-500" aria-label="Sign up" title="Sign up">
                      Connecter
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('register') }}" class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-accent_wine transition duration-200 rounded shadow-md border border-accent_wine hover:bg-accent_wine hover:text-main focus:shadow-outline focus:outline-none" aria-label="Sign up" title="Sign up">
                      S'inscrir
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </nav>