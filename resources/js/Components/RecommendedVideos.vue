<script setup>
import { defineProps, toRefs, ref, watch, onMounted } from 'vue';
import CheckCircle from 'vue-material-design-icons/CheckCircle.vue';

const props = defineProps({ vid: Object });
const { vid } = toRefs(props);

let show = ref(false);
let video = ref(null);

watch(() => show.value, (show) => {
  if (show) {
    video.value.play()
    return ''
  }
  video.value.pause()
  video.value.currentTime = 0
})
</script>

<template>
  
</template>