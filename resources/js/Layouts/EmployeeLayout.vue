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
    <main class="container mx-auto px-32 pt-8">
        <slot></slot>
    </main>
</template>