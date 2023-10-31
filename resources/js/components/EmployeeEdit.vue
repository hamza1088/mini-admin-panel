<template>
    <form @submit.prevent="updateEmployee">
        <!-- Form fields for updating the employee -->
        <button type="submit">Update Employee</button>
    </form>
</template>

<script>
export default {
    props: ['employee'],
    methods: {
        updateEmployee() {
            // Handle updating the employee, e.g., send a PUT request to the API
        },
    },
};
</script>
