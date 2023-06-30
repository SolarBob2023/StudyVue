<template>
    <div>
        <SinglePostComponent></SinglePostComponent>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="person in personAgeMoreTwenty">
                <th scope="row">{{ person.id }}</th>
                <td>{{ person.name }}</td>
                <td>{{ person.age }}</td>
                <td>{{ person.job }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import SinglePostComponent from "./SinglePostComponent.vue";
export default {
    name: "PostComponent",

    data() {
        return {
            persons: [
                {
                    id: 1,
                    name: 'Robert',
                    age: 25,
                    job: 'soldier',
                },
                {
                    id: 2,
                    name: 'Sasha',
                    age: 20,
                    job: 'builder',
                },
                {
                    id: 3,
                    name: 'Nikita',
                    age: 23,
                    job: 'trader',
                },
                {
                    id: 4,
                    name: 'Katya',
                    age: 23,
                    job: 'trader',
                },
                {
                    id: 5,
                    name: 'Dasha',
                    age: 21,
                    job: 'trader',
                },

            ],

        }
    },

    methods: {

    },

    computed: {
        personAgeMoreTwenty(){
            return this.persons.filter( function (person){
                return person.age > 20
            })
        }
    },

    components : {
        SinglePostComponent,
    }
}
</script>

<style scoped>

</style>
