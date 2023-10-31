<template>
    <div>
        <h2>Employee List</h2>
        <ul>
            <li v-for="employee in employees" :key="employee.id">
                {{ employee.first_name }} {{ employee.last_name }}
                <button @click="editEmployee(employee)">Edit</button>
                <button @click="deleteEmployee(employee)">Delete</button>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            employees: [],
        };
    },
    created() {
        this.fetchEmployees();
    },
    methods: {
        fetchEmployees() {
            // Make an API request to get a list of employees
            // Update the 'employees' data property with the response
        },
        editEmployee(employee) {
            // Handle editing an employee, e.g., show an edit form
        },
        deleteEmployee(employee) {
            // Handle deleting an employee, e.g., show a confirmation dialog
        },
    },
};
</script>
