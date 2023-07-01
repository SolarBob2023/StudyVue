<template>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Job</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <template v-for="person in people">
            <tr :class="isEdited(person.id) ? 'd-none' : ''">
                <th scope="row">{{ person.id }}</th>
                <td>{{ person.name }}</td>
                <td>{{ person.age }}</td>
                <td>{{ person.job }}</td>
                <td><a href="" @click.prevent="changeEditPersonId(person.id, person.name, person.age, person.job)" class="btn btn-primary">Edit</a></td>
            </tr>
            <tr :class="isEdited(person.id) ? '' : 'd-none'">
                <th scope="row"></th>
                <td><input type="text" v-model="name"></td>
                <td><input type="number" v-model="age"></td>
                <td><input type="text" v-model="job"></td>
                <td><a href="" @click.prevent="updatePeople(person.id)" class="btn btn-primary">Update</a></td>
            </tr>
        </template>
        </tbody>
    </table>
</template>

<script>
import data from "bootstrap/js/src/dom/data";

export default {
    name: "IndexComponent",

    data() {
        return {
            people : null,
            editPersonId : null,
            name : null,
            age : null,
            job : null,
        }
    },

    mounted() {
        this.getPeople();
    },

    methods: {
        getPeople(){
            axios.get('api/people')
                .then( res => {
                    this.people = res.data
                })
        },
        updatePeople(id){
            this.editPersonId = null
            axios.patch(`api/people/${id}`, {name : this.name, age : this.age, job : this.job})
                .then( res => {
                    this.getPeople()
                })
        },
        changeEditPersonId(id, name, age, job) {
            this.editPersonId = id
            this.name = name
            this.age = age
            this.job = job
        },
        isEdited(id){
            return this.editPersonId  === id
        }



    },

    computed: {},

    components: {

    },
}
</script>

<style scoped>

</style>
