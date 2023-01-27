<script setup>
    import { Link } from '@inertiajs/vue3';
</script>

<template>

    <!-- Navigation bar -->
    <div class="">
        <div class="logo">
            <Link href="/">WEC HR Module</Link>
        </div>  
        <div>
            <div>
                <Link href="/employee/">Employee Dashboard</Link>
            </div>
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
    </div>
    <slot></slot>
</template>