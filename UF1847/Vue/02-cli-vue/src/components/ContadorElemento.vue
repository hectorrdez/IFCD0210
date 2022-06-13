<template>
<h1>{{msg}}</h1>
<div>{{count}}</div>
<div>
    <button @click="increment">+1</button>
    <button @click="decrement">-1</button>
</div>
</template>
<script>
export default{
    data(){
        return{
            count: 0
        }
    },
    props:{
        msg: String
    },
    methods:{
        increment(){
            this.count++
        },
        decrement(){
            this.count--
        }
    },
}
</script>
<style>
      button {
        background-color: #41b883;
        border-radius: 5px;
        border: 1px solid #35495e;
        color: white;
        cursor: pointer;
        margin: 0 5px;
        padding: 5px 15px;
        transition: 0.3s ease-in-out;
      }
      button:hover {
        background-color: #2e845e;
        transition: 0.3s ease-in-out;
      }
</style>