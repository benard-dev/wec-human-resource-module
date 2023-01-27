<script setup>
    import { Link } from '@inertiajs/vue3';
</script>

<template>
    <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 w-full">
        <div class="container mx-auto px-32">
            <nav class="p-4 flex items-center justify-between">
                <div class="text-xl font-bold text-wec-blue dark:text-indigo-300">
                    <Link href="/">WEC HR Module</Link>
                </div>
                <div class="text-lg font-medium text-wec-blue dark:text-indigo-300 border-b-2 border-wec-blue dark:border-indigo-300">
                    <Link href="/employee">Employee Sub Module</Link>
                </div>
                <div class="text-md font-medium hover:text-wec-blue border-b-2 border-transparent hover:border-wec-blue dark:hover:text-indigo-300 dark:hover:border-indigo-300">
                    <Link href="/employee/details">Employee Details</Link>
                </div>
                <div class="text-md font-medium hover:text-wec-blue border-b-2 border-transparent hover:border-wec-blue dark:hover:text-indigo-300 dark:hover:border-indigo-300">
                    <Link href="/employee/contracts">Employee Contracts</Link>
                </div>
                <div class="text-md font-medium hover:text-wec-blue border-b-2 border-transparent hover:border-wec-blue dark:hover:text-indigo-300 dark:hover:border-indigo-300">
                    <Link href="/employee/management">Employee Management</Link>
                </div>
            </nav>
        </div>  
    </header>
</template>