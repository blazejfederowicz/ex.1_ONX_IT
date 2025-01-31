<template>
    <div class="min-h-full">
      <Disclosure as="nav" class="bg-gray-800" v-slot="{ open }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
              <div class="shrink-0">
                <img class="size-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" />
              </div>
              <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                  <RouterLink v-for="item in navigation" :key="item.name" :to="item.to" :class="[$route.name === item.to.name ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white', 'rounded-md px-3 py-2 text-sm font-medium']" :aria-current="$route.name === item.to.name  ? 'page' : undefined">{{ item.name }}</RouterLink>
                </div>
              </div>
            </div>
            <div class="-mr-2 flex md:hidden">
              <!-- Mobile menu button -->
              <DisclosureButton class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                <span class="absolute -inset-0.5" />
                <span class="sr-only">Open main menu</span>
                <Bars3Icon v-if="!open" class="block size-6" aria-hidden="true" />
                <XMarkIcon v-else class="block size-6" aria-hidden="true" />
              </DisclosureButton>
            </div>
          </div>
        </div>
        <DisclosurePanel class="md:hidden">
          <div class="space-y-1 px-2 pt-4 pb-3 sm:px-3 border-t border-gray-700">
            <RouterLink v-for="item in navigation" :key="item.name" :to="item.to" :class="[$route.name === item.to.name ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white', 'block rounded-md px-3 py-2 text-base font-medium']" :aria-current="$route.name === item.to.name ? 'page' : undefined">{{ item.name }}</RouterLink>
          </div>
        </DisclosurePanel>
      </Disclosure>
      <main class="">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          <RouterView/>
        </div>
      </main>
    </div>
  </template>
  
  <script setup>
    import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
    import { Bars3Icon, XMarkIcon } from '@heroicons/vue/24/outline'
    import { RouterLink, RouterView } from 'vue-router';
  
    const navigation = [
        { name: 'Home', to: {name: 'Home'} },
        { name: "Your URL", to:{name:'Url'} },
    ]
  </script>