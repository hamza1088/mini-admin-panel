<template>
    <form @submit.prevent="createEmployee">
        <!-- Form fields for creating a new employee -->
        <button type="submit">Create Employee</button>
    </form>
</template>

<script>
export default {
    methods: {
        createEmployee() {
            // Handle creating a new employee, e.g., send a POST request to the API
        },
    },
};
</script>
