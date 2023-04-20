<nav class="bg-gray-50 shadow-sm">
  <div class="max-w-8xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-16">
      <!-- Logo -->
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <button id="mobile-menu-button" type="button" class="fixed top-3 right-5 inline-flex items-center justify-center p-2 rounded-md text-section_title hover:text-main hover:bg-accent_wine focus:outline-none focus:bg-accent_wine focus:text-main transition duration-150 ease-in-out">
  <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
  </svg>
</button>
      </div>
      <!-- Menu -->
      <div class="hidden sm:flex sm:items-center sm:justify-between w-full">
        <div class="flex-shrink-0">
          <a href="/" class="text-accent_wine uppercase tracking-wide font-bold"><img src="{{ asset('img/svg/logoWN.svg') }}" alt="logo-wineNot" class="mx-auto"></a>
        </div>
        <div class="hidden sm:block sm:ml-6">
          <ul class="items-center justify-between space-x-6 hidden lg:flex ">
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
              {{ Auth::user()->nom }} <!--  Affichage du nom Utilisateur. À modifier   -->
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Mobile Menu -->
  <div id="mobile-menu" class="block sm:hidden">
    <div class="space-y-4 flex flex-col items-center justify-center">
    <a href="/" class="text-accent_wine uppercase tracking-wide font-bold pb-4"><img src="{{ asset('img/svg/logoWN.svg') }}" alt="logo-wineNot" class="mx-auto"></a>
      <a href="{{ route('celliers.index') }}" class="justify-center font-medium tracking-wide text-accent_wine transition-colors duration-200 hover:text-section_title" aria-label="celliers" title="celliers">
        Celliers
      </a>
      @guest
      <a href="{{ route('home') }}" class="justify-center font-medium tracking-wide text-accent_wine transition-colors duration-200 hover:text-section_title" aria-label="articles" title="articles">
        Articles
      </a>
      <a href="{{ route('bouteilles') }}" class="justify-center font-medium tracking-wide text-accent_wine transition-colors duration-200 hover:text-section_title" aria-label="saq" title="saq">
        SAQ
      </a>
      <a href="{{ route('login') }}" class="justify-center font-medium tracking-wide text-accent_wine transition-colors duration-200 hover:text-section_title" aria-label="sign-in" title="sign-in">
        Connecter
      </a>
      <a href="{{ route('register') }}" class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-main transition duration-200 bg-accent_wine hover:bg-transparent hover:border border-accent_wine hover:text-accent_wine" aria-label="sign-up" title="sign-up">
        S'inscrire
      </a>

      @else
      <a href="{{ route('logout') }}" class="justify-center font-medium tracking-wide text-accent_wine transition-colors duration-200 hover:text-gray-500" aria-label="Sign out" title="deconnecter" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Déconnecter
      </a>
      <a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>
      </a>
      <a href="#" class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-accent_wine transition duration-200 border border-accent_wine hover:bg-accent_wine hover:text-main" aria-label="Compte" title="Compte">
        Compte
      </a>
      <a role="nave-link"  class="text-article_title">
        {{ Auth::user()->nom }} <!--  Affichage du nom Utilisateur. À modifier   -->
      </a>
      @endguest
    </div>
  </div>
</nav>