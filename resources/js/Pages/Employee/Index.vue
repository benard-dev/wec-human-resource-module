<script setup>
    import { Link } from '@inertiajs/vue3'
    defineProps({
        message: String
    })
</script>


<template>
    <div>Index</div>
    <div>The message is {{ message }}</div>
</template>

