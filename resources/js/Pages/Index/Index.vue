<template>

    <div>Index</div>
    <Link href="/hello">Show Page </Link>
    <div>
        The message is {{ message }}
    </div>

</template>

<script setup>
import {Link} from '@inertiajs/vue3'
import MainLayout from '../../Layouts/MainLayout.vue'
defineProps(['message'])

</script>




<!-- <template>
    <div v-for="listing in listings" v-bind:key="listing.id">
    <Link :href="`/${listing.id}`"> 
        {{ listing.street }} {{ listing.street_nr }} , {{ listing.city }} , for ${{ listing.price }}
    </Link>
    </div>
  </template>
  
  <script setup>
  import {Link} from '@inertiajs/vue3'
  defineProps({
      listings: Array,
  });
  </script> -->
