<template>
  <div id="app"> 
    <Hook></Hook>
  </div>
</template>

<script>
import Hook from './components/Hook.vue'
export default {          
    name:'app',
    data(){
      return{
        
      }
    },
    components:{
      Hook
    }   
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
