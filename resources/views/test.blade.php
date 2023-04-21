@extends('layouts.app')
@section('content')
<!-- from-accent_wine to-main bg-gradient-to-t        lg:max-w-screen-2xl-->
<footer class="pt-16 bg-accent_wine">
      <div class=" mx-auto sm:max-w-xl md:max-w-full  text-secondary md:px-8">
        <div class="grid gap-10 row-gap-6 mb-8 sm:grid-cols-2 lg:grid-cols-4">
          <div class="sm:col-span-2">
            <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
             <img src="{{asset('img/svg/logoWN-white.svg')}}" alt="company-logo">
            </a>
            
          </div>
          <div class="space-y-2 text-xl">
            <p class="text-base font-regular tracking-wide text-main">Contacts</p>
            <div class="flex">
              <p class="mr-1 text-gray-800">Phone:</p>
              <a href="tel:850-123-5021" aria-label="Our phone" title="Our phone" class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">850-123-5021</a>
            </div>
            <div class="flex">
              <p class="mr-1 text-gray-800">Email:</p>
              <a href="mailto:info@lorem.mail" aria-label="Our email" title="Our email" class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">info@lorem.mail</a>
            </div>
            <div class="flex">
              <p class="mr-1 text-gray-800">Address:</p>
              <a href="https://www.google.com/maps" target="_blank" rel="noopener noreferrer" aria-label="Our address" title="Our address" class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">
                312 Lovely Street, NY
              </a>
            </div>
          
            </div>
            <p class="mt-4 text-sm text-gray-500">
              Bacon ipsum dolor amet short ribs pig sausage prosciutto chicken spare ribs salami.
            </p>
          </div>
        </div>
        <div class="px-4 flex flex-col-reverse justify-between pt-5 pb-10 border-t border-secondary lg:flex-row">
          <p class="text-sm text-gray-600">
            © Copyright 2023 WineNot Inc. All rights reserved.
          </p>
          <ul class="flex flex-col mb-3 space-y-2 lg:mb-0 sm:space-y-0 sm:space-x-5 sm:flex-row">
          </ul>
        </div>
      </div>
</footer>

    @endsection