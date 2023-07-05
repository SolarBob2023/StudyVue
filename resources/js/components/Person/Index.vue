<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="person in people">
                <th scope="row">{{ person.id }}</th>
                <td>
                    <router-link :to="{ name: 'person.show', params: {id : person.id}}">{{ person.name }}</router-link>
                </td>
                <td>{{ person.age }}</td>
                <td>{{ person.job }}</td>
                <td><router-link class="btn btn-primary" :to="{ name : 'person.edit',
                params: {id : person.id}}">Edit</router-link></td>
                <td>
                    <a class="btn btn-danger" @click.prevent="$store.dispatch('deletePerson',person.id)" href="#">Delete</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "Index",

    data() {
        return {

        }
    },

    mounted() {
        this.$store.dispatch('getPeople')
    },

    methods : {

    },

    computed : {
        people(){
            return this.$store.getters.people
        }
    }
}
</script>

<style scoped>

</style>
