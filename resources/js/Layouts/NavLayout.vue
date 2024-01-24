<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import MenuIcon from 'vue-material-design-icons/Menu.vue';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div class="relative">
      <div id="TopNav" class="w-[100%] h-[60px] fixed bg-black z-20 flex items-center justify-between">
          <div class="flex items-center">
            <button class="p-2 ml-3 rounded-full hover:bg-gray-700 inline-block cursor-pointer">
              <MenuIcon fillColor="#FFFFFF" :size="26" />
            </button>
          </div>
      </div>
      <div id="SideNav">

    </div>
     <div id="SideNavOverlay">

     </div>
      <slot />
    </div>
</template>
