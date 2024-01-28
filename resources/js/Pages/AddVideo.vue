<script setup>
import { ref } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import NavLayout from '@/Layouts/NavLayout.vue';

defineProps({ errors: Object})

let title = ref('')
let image = ref('')
let video = ref('')
let error = ref({
    title: null,
    image: null,
    video: null,
})

const addVideo = () => {
   let err = false

    error.value.title = null
    error.value.image = null
    error.value.video = null

    if (!title.value) {
        error.value.title = 'Title is required'
        err = true
    }

    if (!image.value) {
        error.value.image = 'Image is required'
        err = true
    }

    if (!video.value) {
        error.value.video = 'Video is required'
        err = true
    }

    if (err) {
        return
    }

    let data = new FormData()

    data.append('title', title.value)
    data.append('image', image.value)
    data.append('video', video.value)
}

const getVideo = (e) => {
    video.value = e.target.files[0]
}

const getImage = (e) => {
    image.value = e.target.files[0]
}


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
             v-model="title"
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
              placeholder="Title"
             >
             <span class="text-red-500">This is an error</span>
         </div>
         <div class="my-5"></div>
         <div>
            <div class="text-gray-200">Thumbnail</div>
             <input
             @change="getImage"
             type="file"
             class="
             form-control
             block
             w-full
             px-3
             py-1.5
             border
             text-white
             border-solid
             border-gray-600
             rounded
             transition
             ease-in-out m-0
            focus:text-gray-700
            focus:border-blue-600
            focus:outline-none
             "
             >
             <span class="text-red-500">This is an error</span>
         </div>
         <div class="my-5"></div>
         <div>
            <div class="text-gray-200">Video/MP4</div>
             <input
             @change="getVideo"
             type="file"
             class="
             form-control
             block
             w-full
             px-3
             py-1.5
             border
             text-white
             border-solid
             border-gray-600
             rounded
             transition
             ease-in-out m-0
            focus:text-gray-700
            focus:border-blue-600
            focus:outline-none
             "
             >
             <span class="text-red-500">This is an error</span>
         </div>
         <div class="my-5"></div>
           <div class="float-right">
             <button
             class="
             text-white bg-green-600
             hover:bg-green-700
             font-bold py-2
             px-4 rounded
             cursor-pointer
             "
             >
              Upload Video
             </button>
           </div>

       </form>
    </div>
   </NavLayout>
</template>