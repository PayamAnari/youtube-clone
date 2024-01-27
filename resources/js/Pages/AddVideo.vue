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
             <input
             type="text"
             class="
             form-control
             block
             w-full
             px-5
             py-1.5
             text-xl
             font-normal
             text-gray-200
             bg-black
             placeholder-gray-400
             bg-clip-padding
             border
             border-bold
             border-gray-600
             rounded
             transition
             ease-in-out m-0
             border-transparent
             focus:ring-0


             "
             >
         </div>
       </form>
    </div>
   </NavLayout>
</template>