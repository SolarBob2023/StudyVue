<template>
    <tr :class="this.$parent.isEdited(person.id) ? '' : 'd-none'">
        <th scope="row"></th>
        <td><input type="text" v-model="name"></td>
        <td><input type="number" v-model="age"></td>
        <td><input type="text" v-model="job"></td>
        <td><a href="" @click.prevent="updatePerson(person.id)" class="btn btn-primary">Update</a></td>
    </tr>
</template>

<script>

export default {
    name: "EditComponent",

    props: [
      'person'
    ],

    data() {
        return {
            name: null,
            age: null,
            job : null,
        }
    },

    mounted() {
    },

    methods: {
        updatePerson(id) {
            this.$parent.editPersonId = null
            axios.patch(`api/people/${id}`, {name: this.name, age: this.age, job: this.job})
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
