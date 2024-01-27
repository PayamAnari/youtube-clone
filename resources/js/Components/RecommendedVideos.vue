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
        <div @mouseover="show = true" 
             @mouseleave="show = false; "
             >
           <img
             width="340"
             class="aspect-video cursor-pointer rounded-lg"
             :src="vid.thumbnail || ''"
             :class="show ? 'delay-350 hidden' : ''"
           />
           <div class="w-full h-full aspect-video cursor-pointer"
            :class="showVideo ? '' : 'delay-350 hidden'"
           >
            <video ref="video" :src="videoUrl || ''" type="video/mp4" />
           </div>
        </div>
</template>