<template>
    <div>
        <p>Are you sure you want to delete this company?</p>
        <button @click="confirmDelete">Yes</button>
        <button @click="cancelDelete">No</button>
    </div>
</template>

<script>
export default {
    props: ['company'],
    methods: {
        confirmDelete() {
            // Handle confirming and deleting the company, e.g., send a DELETE request to the API
        },
        cancelDelete() {
            // Handle canceling the delete operation, e.g., go back to the company list
        },
    },
};
</script>
