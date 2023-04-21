<nav id="main-nav" class="lg:bg-gray-50 lg:shadow-sm md:bg-transparent md:shadow-none py-1">
  <div class="max-w-8xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-16">
      <!-- Logo -->
      <div class="absolute inset-y-0 left-0 flex items-center lg:hidden">
        <button id="mobile-menu-button" type="button" class="z-10 fixed top-3 right-3 inline-flex items-center justify-center p-2  rounded-md text-section_title hover:text-accent_wine hover:border-accent_wine border-3  focus:outline-none focus:border-accent_wine focus:text-accent_wine transition duration-150 ease-in-out">
          <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
      <!-- Menu -->
      <div class="hidden sm:flex sm:items-center sm:justify-between w-full">
        <div id="logo" class="flex-shrink-0">
          <a href="/" class="text-accent_wine uppercase tracking-wide font-bold"><img src="{{ asset('img/svg/logoWN.svg') }}" alt="logo-wineNot" class="mx-auto"></a>
        </div>
        <div class="hidden sm:block sm:ml-6">
          <ul class="items-center justify-between space-x-6 hidden lg:flex ">
            @guest

            <li>
              <a href="{{ route('login') }}" class="justify-center font-medium tracking-wide text-accent_wine transition-colors duration-200 hover:text-section_title" aria-label="sign-in" title="sign-in">
                Connexion
              </a>
            </li>

            <li>
              <a href="{{ route('register') }}" class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-main transition duration-200 rounded bg-accent_wine hover:bg-transparent hover:border border-accent_wine hover:text-accent_wine" aria-label="sign-up" title="sign-up">
                Inscription
              </a>
            </li>
            @else
            <li>
              <a href="{{ route('celliers.index') }}" class="justify-center font-medium tracking-wide text-accent_wine transition-colors duration-200 hover:text-section_title" aria-label="celliers" title="celliers">
                Mes Celliers
              </a>
            </li>
            <li>
              <a href="{{route('celliers.creer')}}" class="justify-center font-medium tracking-wide text-accent_wine transition-colors duration-200 hover:text-section_title" aria-label="articles" title="articles">
                Ajouter Cellier
              </a>
            </li>
            <!--<li>
              <a href="{{ route('bouteilles') }}" class="justify-center font-medium tracking-wide text-accent_wine transition-colors duration-200 hover:text-section_title" aria-label="saq" title="saq">
                Ajouter Bouteille
              </a>
            </li>-->
            <li>
              <a href="{{ route('logout') }}" class="justify-center font-medium tracking-wide text-accent_wine transition-colors duration-200 hover:text-gray-500" aria-label="Sign out" title="deconnecter" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Déconnexion
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>
            </li>
            <li>
              <a href="#" class="inline-flex gap-2 items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-secondary transition duration-200 rounded  hover:text-accent_wine" aria-label="Compte" title="Compte">
                <img class="max-w-[30px]" src="{{ asset('img/svg/user-gold.svg') }}" alt="user-profile">
                {{ Auth::user()->nom }} <!--  Affichage du nom Utilisateur. À modifier   -->
              </a>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Mobile Menu -->
  <!--  from-accent_wine to-main bg-gradient-to-t -->
  <div id="mobile-menu" class="z-50 pt-10 transition duration-300 hidden lg:hidden from-accent_wine to-main bg-gradient-to-t absolute top-0 left-0 w-full">
    <div class="space-y-7 flex flex-col items-center justify-center pb-10">
      <a href="/" class="text-accent_wine uppercase tracking-wide pb-4"><img src="{{ asset('img/svg/logoWN.svg') }}" alt="logo-wineNot" class="mx-auto"></a>
      @guest
      <a href="{{ route('login') }}" class="justify-center tracking-wide font-regular text-xl text-main transition-colors duration-200 hover:text-article_title" aria-label="sign-in" title="sign-in">
        Connexion
      </a>
      <a href="{{ route('register') }}" class="inline-flex items-center justify-center rounded-md py-2.5 px-6 font-regular tracking-wide text-main text-xl transition duration-200 bg-secondary  hover:bg-transparent hover:border hover:border-main  hover:text-main" aria-label="sign-up" title="sign-up">
        Inscription
      </a>

      @else
      <!-- font-medium tracking-wide text-accent_wine -->
      <a href="{{ route('celliers.index') }}" class="justify-center font-regular tracking-wide text-xl text-main transition-colors duration-200 hover:text-article_title" aria-label="celliers" title="celliers">
        Mes Celliers
      </a>
      <a href="{{ route('home') }}" class="justify-center font-regular tracking-wide text-xl text-main transition-colors duration-200 hover:text-article_title" aria-label="articles" title="articles">
        Ajouter Cellier
      </a>
      <a href="{{ route('bouteilles') }}" class="justify-center font-regular tracking-wide text-xl text-main transition-colors duration-200 hover:text-article_title" aria-label="saq" title="saq">
        Ajouter Bouteille
      </a>
      <a href="{{ route('logout') }}" class="justify-center font-regular tracking-wide text-xl text-main transition-colors duration-200 hover:text-article_title" aria-label="Sign out" title="deconnecter" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Déconnexion
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>
      </a>
      <a href="#" class="pt-2 flex flex-col items-center justify-center text-xl rounded h-12 px-6 font-regular tracking-wide text-secondary transition duration-200 hover:text-main" aria-label="Compte" title="Compte"><img class="max-w-[37px]" src="{{ asset('img/svg/user-full.svg') }}" alt="user-profile">
        {{ Auth::user()->nom }}
      </a>

      @endguest
    </div>
  </div>
</nav>