<template>
    <div class="form-group w-25" v-if="person">
        <div class="m-1">
            <input type="text" v-model="person.name" placeholder="name" class="form-control">
        </div>
        <div class="m-1">
            <input type="number" v-model="person.age" placeholder="18" class="form-control">
        </div>
        <div class="m-1">
            <input type="text" v-model="person.job" placeholder="job" class="form-control">
        </div>
        <div class="m-1">
            <input :disabled="isDisabled" @click.prevent="$store.dispatch('updatePerson',
                 {id: person.id, name : person.name, age : person.age, job: person.job})"
                type="submit" value="Update" class="btn btn-primary">
        </div>
    </div>
</template>

<script>

export default {
    name: "Edit",
    data() {
        return {
        }
    },
    mounted() {
        this.$store.dispatch('getPerson', this.$route.params.id)
    },
    methods : {
    },

    computed: {
        isDisabled(){
            return this.person.name && this.person.job && this.person.age === ''
        },
        person(){
            return this.$store.getters.person
        }
    }
}
</script>

<style scoped>

</style>
