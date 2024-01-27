<script setup>
import { Head, Link } from '@inertiajs/vue3';
import NavLayout from '@/Layouts/NavLayout.vue';


// definePorts({
//     canLogin: {
//         type: Boolean,
//     }
// });
</script>

<template>
  <Head title="Youtube" />

   <NavLayout>
     <div class="max-2xl mx-auto p-4">
      <table class="min-w-full">
         <thead class="border-b">
           <tr class="text-white flex justify-between">
             <th scope="col" class="text-sm font-medium px-6 py-4 text-left">Videos</th>
             <th scope="col" class="text-sm font-medium px-6 py-4 text-left">Options</th>
           </tr>
         </thead>
      </table>
     </div>
   </NavLayout>
</template>