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
            <input :disabled="!isDisabled" @click.prevent="$store.dispatch('storePerson',
             {name : name, age: age, job: job})" type="submit" value="Add" class="btn btn-primary">
        </div>
    </div>
</template>

<script>
export default {
    name: "Create",

    data() {
        return {
            name : null,
            age : null,
            job : null,
        }
    },

    methods : {

    },

    computed: {
        isDisabled(){
            return  this.name && this.job && this.age
        }
    }
}
</script>

<style scoped>

</style>
