<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Submit drawing') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                <form method="POST" action="/drawings">
                  @csrf

                  <div>
                      <x-label for="title" :value="__('title')" />
                      <x-input id="title" class="block mt-1 w-full" type="text" name="title" required autofocus />
                  </div>
                  
                  <x-button class="ml-3">
                    Submit
                  </x-button>
                </form>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>

