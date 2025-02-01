<template>
  <div class=" md:w-2xl mx-auto mt-10 p-3">
    <div class="px-4 sm:px-0 ">
      <h3 class="text-base/7 font-semibold text-gray-900">Url's Provided by you and others.</h3>
      <p class="mt-1 max-w-2xl text-sm/6 text-gray-500">History of all url's that has been converted.</p>
    </div>
    <div class="mt-6 border-t border-gray-400">
      <dl class="divide-y divide-gray-100">
        <div v-for="item in urls" class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0" :key="item.id">
          <p class=" col-span-3 text-md text-black font-bold ">{{item.title}}</p>
          <a :href="item.shortener_url" target="_blank" class="text-sm/6 font-medium text-gray-900 break-words">{{ item.shortener_url }}</a>
          <a :href="item.original_url" target="_blank" class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0 break-words">{{ item.original_url }}</a>
        </div>
       </dl>
    </div>
  </div> 
</template>
<script setup>
import { onMounted, ref } from 'vue';
import axiosClient from '../axios';

    const urls= ref([]);
    const loading = ref(true);

    onMounted(() =>{
        axiosClient.get('/api/urls')
            .then(response =>{
                urls.value = response.data
            })
            .catch(error =>{
                console.error('Error fetching URLs:', error);
            })
            .finally(()=>{
                loading.value = false;
            })
    })
    
</script>
<style scoped>
    
</style>