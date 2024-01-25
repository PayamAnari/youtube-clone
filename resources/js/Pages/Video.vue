<script setup>
import { Head, Link } from '@inertiajs/vue3';
import NavLayout from '@/Layouts/NavLayout.vue';
import CheckCircle from 'vue-material-design-icons/CheckCircle.vue'
import ThumbUpOutline from 'vue-material-design-icons/ThumbUpOutline.vue'
import ThumbDownOutline from 'vue-material-design-icons/ThumbDownOutline.vue'

// defineProps({
//     canLogin: {
//         type: Boolean,
//     }

// });
</script>

<template>
    <Head title="Youtube" />

    <NavLayout>
        <div class="xl:flex">
           <div class="p-3">
             <video src="/videos/car.mp4" controls autoplay />
           </div>
        </div>
    </NavLayout>

</template>

