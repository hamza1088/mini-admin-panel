<template>
    <div>
        <h2>Company List</h2>
        <ul>
            <li v-for="company in companies" :key="company.id">
                {{ company.name }}
                <button @click="editCompany(company)">Edit</button>
                <button @click="deleteCompany(company)">Delete</button>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            companies: [],
        };
    },
    created() {
        this.fetchCompanies();
    },
    methods: {
        fetchCompanies() {
            // Make an API request to get a list of companies
            axios.get('/api/companies')
                .then((response) => {
                    this.companies = response.data;
                })
                .catch((error) => {
                    console.error(error);
                });
        },
        editCompany(company) {
            // Handle editing a company, e.g., show a form for editing
        },
        deleteCompany(company) {
            // Handle deleting a company, e.g., show a confirmation dialog
        },
    },
};
</script>
