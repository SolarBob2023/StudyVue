<template>
    <div>
        <div class="form-group">
            <input type="text" class="form-control m-1" id="name" v-model="name" placeholder="name">
            <input type="number" class="form-control m-1" id="age" v-model="age" placeholder="18">
            <input type="text" class="form-control m-1" id="job"  v-model="job" placeholder="programmer">
            <input  @click.prevent="addPerson" class="btn btn-primary m-1" value="Отправить">
        </div>

    </div>
</template>

<script>
import data from "bootstrap/js/src/dom/data";

export default {
    name: "CreateComponent",

    data() {
        return {
            name : null,
            age : null,
            job : null,
        }
    },

    mounted() {

    },

    methods: {
        addPerson(){
            axios.post('/api/people',{name: this.name, age: this.age, job: this.job})
                .then( res => {
                    this.name = null;
                    this.age = null;
                    this.job = null;
                    console.log(res);
                })
        }
    },

    computed: {},

    components: {

    },
}
</script>

<style scoped>

</style>
