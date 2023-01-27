<script setup>
    import NavigationBarComponent from '../Components/Employee/NavigationBarComponent.vue';
</script>

<script>
    export default {
        components: { 
            NavigationBarComponent 
        }
    }
</script>

<template>
    <NavigationBarComponent></NavigationBarComponent>
    <slot></slot>
</template>