<template>
    <div>
        <SinglePostComponent></SinglePostComponent>
        <div>Name : {{ name }}</div>
        <div>Job : {{ myJob }}</div>
        <button @click="sayHello">Hello</button>
        <button @click="sayHi">Hi</button>
    </div>
</template>

<script>
import SinglePostComponent from "./SinglePostComponent.vue";
export default {
    name: "PostComponent",

    data() {
        return {
            name : 'robert',
            age : 20
        }
    },

    methods: {
        sayHello(){
            console.log('Hello')
        },
        sayHi(){
            console.log('Hi')
        }
    },

    computed: {
        myJob(){
            return this.name + ' is ' + 'soldier'
        }
    },

    components : {
        SinglePostComponent,
    }
}
</script>

<style scoped>

</style>
