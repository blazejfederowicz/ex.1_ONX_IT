<template>
    <div class="flex min-h-full flex-1 flex-col justify-center px-6 py-12 lg:px-8">
      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm ">
        <form class="space-y-6">
          <div>
            <label for="url" class="block text-sm/6 font-medium text-gray-900">Enter URL</label>
            <div class="mt-2">
              <input  name="url" id="url" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
            </div>
          </div>
          <div>
            <p class="block text-sm/6 font-medium text-gray-900">Short URL</p>
            <div class="mt-2">
              <div  class="block w-full rounded-md bg-gray-200 px-3 py-1.5  sm:text-sm/6" >
                <a href="#" class=" underline underline-offset-2 text-blue-500">fdfd</a>
              </div>
            </div>
          </div>
          <div>
            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Convert</button>
          </div>
        </form>
      </div>
    </div>
  </template>
  
<script setup>


</script>
<style scoped>
    
</style>