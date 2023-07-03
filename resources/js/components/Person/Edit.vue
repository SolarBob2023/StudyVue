<template>
    <div class="form-group w-25">
        <div class="m-1">
            <input type="text" v-model="name" placeholder="name" class="form-control">
        </div>
        <div class="m-1">
            <input type="number" v-model="age" placeholder="18" class="form-control">
        </div>
        <div class="m-1">
            <input type="text" v-model="job" placeholder="job" class="form-control">
        </div>
        <div class="m-1">
            <input :disabled="isDisabled" @click.prevent="updatePerson" type="submit" value="Update" class="btn btn-primary">
        </div>
    </div>
</template>

<script>

export default {
    name: "Edit",
    data() {
        return {
            name : null,
            age : null,
            job : null,
        }
    },
    mounted() {
        this.getPerson();
    },
    methods : {
        getPerson(){
            axios.get(`/api/people/${this.$route.params.id}`)
                .then( res => {
                    this.name = res.data.data.name
                    this.age = res.data.data.age
                    this.job = res.data.data.job
                })
        },
        updatePerson(){
            axios.patch(`/api/people/${this.$route.params.id}`, { name : this.name, age:this.age, job:this.job })
                .then( res => {
                    this.$router.push({ name: 'person.show', params : { id : this.$route.params.id}})
                })
        }
    },

    computed: {
        isDisabled(){
            return this.name && this.job && this.age === ''
        }
    }
}
</script>

<style scoped>

</style>
