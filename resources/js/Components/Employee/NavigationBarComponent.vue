<script setup>
    import { Link } from '@inertiajs/vue3';
</script>

<template>
    <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 w-full">
        <div class="container mx-auto">
            <nav class="p-4 flex items-center justify-between">
                <div class="text-lg">
                    <Link :href="route('index')">WEC HR Module</Link>
                </div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </nav>
        </div>
        <div class="logo">
            
        </div>
        <div class="logo">
            <Link href="/employee/">Employee Sub Module</Link>
        </div>    
        <div>
            <div>
                <Link href="/employee/details">Employee Details</Link>
            </div>
            <div>
                <Link href="/employee/contract">Employee Contracts</Link>
            </div>
            <div>
                <Link href="/employee/add">Employee Management</Link>
            </div>
        </div> 
    </header>
</template>