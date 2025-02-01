<template>
    <div class="flex min-h-full flex-1 flex-col justify-center px-6 py-12 lg:px-8">
      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm ">
        <form @submit.prevent="submit" class="space-y-6">
          <div>
            <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
            <div class="mt-2">
              <input v-model="data.title"  name="title" id="title" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
            </div>
          </div>
          <div>
            <label for="url" class="block text-sm/6 font-medium text-gray-900">Original URL</label>
            <div class="mt-2">
              <input v-model="data.original_url" required  name="url" id="url" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
            </div>
          </div>
          <div>
            <p class="block text-sm/6 font-medium text-gray-900">Short URL</p>
            <div class="mt-2">
              <div  class="block w-full rounded-md bg-gray-200 px-3 py-1.5  sm:text-sm/6" >
                <a :href="data.shortened_url" rel="noopener noreferrer" target="_blank" class=" underline underline-offset-2 text-blue-500">{{ data.shortened_url }}</a>
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
import { ref } from 'vue';
import axiosClient from '../axios';

const data= ref({
    title:'',
    original_url:'',
    shortened_url: null,
})

const submit = () =>{
    axiosClient.post('/api/shorten-url', data.value)
    .then(response => {
        data.value.shortened_url = response.data.shortener_url
      console.log('Shortened URL:', response.data.shortener_url);
    })
    .catch(error => {
      console.error('Error shortening the URL:', error);
    });
  };
</script>
<style scoped>
    
</style>