<template>
    <tr :class="this.$parent.isEdited(person.id) ? 'd-none' : ''">
        <th scope="row">{{ person.id }}</th>
        <td>{{ person.name }}</td>
        <td>{{ person.age }}</td>
        <td>{{ person.job }}</td>
        <td><a href="" @click.prevent="changeEditPersonId(person.id, person.name, person.age, person.job)"
               class="btn btn-primary">Edit</a></td>
        <td><a href="" @click.prevent="deletePerson(person.id)" class="btn btn-danger">Delete</a></td>
    </tr>
</template>

<script>

export default {
    name: "ShowComponent",

    props: [
      'person'
    ],

    data() {
        return {
        }
    },

    mounted() {
    },

    methods: {
        changeEditPersonId(id, name, age, job) {
            let editName = `edit_${id}`;
            let editedPerson = this.$parent.$refs[editName][0];
            this.$parent.editPersonId = id
            editedPerson.name = name
            editedPerson.age = age
            editedPerson.job = job
        },
        deletePerson(id) {
            this.$parent.editPersonId = null
            axios.delete(`api/people/${id}`)
                .then(res => {
                    this.$parent.getPeople()
                })
        },
    },

    computed: {},

    components: {},
}
</script>

<style scoped>

</style>
