<template>
    <div v-if="person">
        <div> Name: {{ person.name }}</div>
        <div> Age: {{ person.age }}</div>
        <div> Job: {{ person.job }}</div>
        <router-link class="btn btn-primary" :to="{ name : 'person.edit', params : {id : person.id}}">Edit</router-link>
    </div>
</template>

<script>
export default {
    name: "Show",
    data() {
        return {
        }
    },
    mounted() {
        this.$store.dispatch('getPerson', this.$route.params.id)
    },
    methods : {

    },

    computed : {
        person(){
            return this.$store.getters.person
        }
    }
}
</script>

<style scoped>

</style>
