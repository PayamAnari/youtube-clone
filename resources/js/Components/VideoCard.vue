<template>
  <div class="relative">
     <div class="rounded-lg bg-black m-2">

     </div>
  </div>
  
</template>

<script setup>
import { defineProps, toRefs, ref, watch, onMounted } from 'vue';
import CheckCircle from 'vue-material-design-icons/CheckCircle.vue';

const props = defineProps({
  title: String,
  user: String,
  views: String,
  image: String,
  videoUrl: String,
  thumbnail: String,
})

</script>