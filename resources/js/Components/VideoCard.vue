<template>
  <div class="relative">
     <div class="rounded-lg bg-black m-2"
        :class="[
          show
          ? 'absolute z-30 transition ease-in-out delay-150 hover:translate-y-8 hover:scale-125 hover:bg-[#202020] duration-300'
          : ''
        ]"
        >
        <div @mouseover="show = true" @mouseleave="show = false; showVideo= false">
           <img
             class="aspect-video cursor-pointer"
             src="thumbnail || ''"
             :class="
             show 
               ? 'transition ease-in-out delay-150 rounded-l-lg'
               : 'rounded-lg',
               showVideo ? 'delay-350 hidden' : ''
             "
           />
        </div>
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

const { title, user, views, image, videoUrl, thumbnail } = toRefs(props)

let show = ref(false)
let showVideo = ref(false)
let video = ref(null)

watch(() => show.value, (show) => {
  if (show) {
    showVideo.value = true
    video.value.play()
    return ''
  }
  showVideo.value = false
  video.value.pause()
  video.value.currentTime = 0
})
</script>