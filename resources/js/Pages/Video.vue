<script setup>
import { Head, Link } from '@inertiajs/vue3';
import NavLayout from '@/Layouts/NavLayout.vue';
import CheckCircle from 'vue-material-design-icons/CheckCircle.vue'
import ThumbUpOutline from 'vue-material-design-icons/ThumbUpOutline.vue'
import ThumbDownOutline from 'vue-material-design-icons/ThumbDownOutline.vue'
import RecommendedVideos from '@/Components/RecommendedVideos.vue'

defineProps({
   video: Object,
    comments: Array,
    recommendedVideos: Array

});
</script>

<template>
    <Head title="Youtube" />

    <NavLayout>
        <div class="xl:flex">
           <div class="p-3">
             <video :src="video.video || ''" controls autoplay />
             <div class="text-white text-2xl font-extrabold mt-4">{{ video.title }}</div>
             <div class="flex items-center mb-4">
               <img 
               class="rounded-full m-1.5 mt-2 flex items-baseline w-8 h-8"
               :src="`https://picsum.photos/id/${(Math.random() * 100).toFixed(0)}/100` || ''"
               />
             <div class="pl-2 mt-1">
                <div class=" text-white text-lg font-extrabold flex items-center">
                  {{ video.user }} <CheckCircle fillColor="#888888" :size="17" />
                </div>
                 <div class="text-sm text-gray-400 font-extrabold">{{ video.views }}</div>
               </div>
             </div>
             <div class="bg-[#3F3F3F] rounded-lg w-full p-3 text-white">
                <div class="text-white text-lg font-extrabold">{{ video.views }}</div>
                <div class="text-sm font-extrabold mb-6">Hi Developers, In this tutorial, we will build a full-stack 
                </div>
                <div class="text-sm font-extrabold mb-6">Hi Developers, In this tutorial, we will build a full-stack YouTube clone using the powerful combination of Vue.js, Javascript, Tailwind CSS, Laravel, and Inertia.js
                </div>
             </div>
             <div class="mt-6">
                   <div class="text-white text-lg font-extrabold">
                       {{ comments.length }} Comments
                   </div>
                   <div class="flex items-flex mb-4 mt-2 ">
                    <img 
                      class="rounded-full mt-2 w-12 h-12"
                      :src="`https://picsum.photos/id/${(Math.random() * 100).toFixed(0)}/100` || ''"
                     />
                     <div class="pl-6 mt-1">
                      <div class="text-white font-extrabold flex items-baseline">
                      <div>John Doe</div>
                        <div class="text-gray-400 pl-3">
                           10 days ago
                        </div>
                      </div>
                      <div class="text-gray-200 text-sm font-semibold">
                        the application, such as video uploads, file uploads, and video playback when hovering over a thumbnail.
                       </div>
                       <div class="mt-4 flex items-center">
                         <ThumbUpOutline fillColor="#FFFFFF" :size="20" class="pr-2" />
                         <div class="text-gray-400 text-sm font-extrabold pr-10">
                              {{ (Math.random() * 100 ).toFixed(0) }}
                         </div>
                          <ThumbDownOutline fillColor="#FFFFFF" :size="20" class="pr-2" />
                       </div>
                     </div>
                   </div>
                </div>
           </div>
           <div class="w-[500px] p-3 sm:block hidden">
            <div class="flex mb-3">
              <RecommendedVideos 
              :vid="{
              title: 'Big city in amsterdam',
              video: '/videos/car.mp4',
              thumbnail: '/videos/Thumbnails/car.png',
              user: 'Emmy Watson',
              views: '14k views - 10 days ago',
            }"
            />
            </div>
           </div>
        </div>
    </NavLayout>

</template>

