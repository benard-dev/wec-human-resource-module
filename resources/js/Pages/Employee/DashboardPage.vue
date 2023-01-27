<script setup>
    import { Link } from '@inertiajs/vue3'
    import EmployeeLayout from '../../Layouts/EmployeeLayout.vue'
    import ProfilePictureComponent from '../../Components/Employee/ProfilePictureComponent.vue';
    import DetailsComponent from '../../Components/Employee/DetailsComponent.vue';
    import ManagementComponent from '../../Components/Employee/ManagementComponent.vue';
    import ContractsComponent from '../../Components/Employee/ContractsComponent.vue';

</script>

<script>
    export default {
        components: {
            ProfilePictureComponent, DetailsComponent, ManagementComponent, ContractsComponent
        },
    }
</script>

<template>    
    <EmployeeLayout>
        <h1>Employee Dashboard</h1>  
        <ProfilePictureComponent></ProfilePictureComponent>
        <DetailsComponent></DetailsComponent>
        <ManagementComponent></ManagementComponent>
        <ContractsComponent></ContractsComponent>
    </EmployeeLayout>
</template>
