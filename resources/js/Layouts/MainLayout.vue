<template>
<Link href="/listing">Listings </Link>&nbsp;
<Link href="/listing/create">New Listing </Link>
<!-- <div>The page with time {{ timer }}</div> -->

<div v-if="flash && flash.success" class="success">
      {{ flash.success }}
    </div>

<slot>Default</slot>
</template>


<script setup>
import {ref, computed} from 'vue'
import {Link, usePage } from '@inertiajs/vue3'


// Get the flash message from the page
const page = usePage()
// const flashSuccess = computed(() => page.value.flash.success)
const flash = page.value ? page.value.flash : null
</script>

<style scoped>

.success {
    background-color: green;
    color: white;
}

</style>