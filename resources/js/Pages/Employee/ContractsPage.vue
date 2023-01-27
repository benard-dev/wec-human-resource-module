<script setup>
    import { Link } from '@inertiajs/vue3'
    import EmployeeLayout from '../../Layouts/EmployeeLayout.vue'
    defineProps({
        message: String
    })
</script>


<template>
    <EmployeeLayout>
        <!-- View full list of all employee contracts in tabular form -->
        <!-- All employee contracts are clickable to view full details -->
    </EmployeeLayout>
</template>

