<script setup>
import { Head, Link } from '@inertiajs/vue3';
import NavLayout from '@/Layouts/NavLayout.vue';
</script>

<template>
   <Head title="Youtube" />

   <NavLayout>
    <div class="max-w-xl mx-auto px-4">
      <div class="text-white font-extrabold text-3xl py-10">Add Video</div>
       <form>
         <div>
            <div class="text-gray-200">Title</div>
         </div>
       </form>
    </div>
   </NavLayout>
</template>