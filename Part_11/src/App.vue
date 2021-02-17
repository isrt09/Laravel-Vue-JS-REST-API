<template>
  <div id="app"> 
    <Navigation></Navigation>
    <Content></Content> 
    <Footer></Footer>   
  </div>
</template>

<script>
import Navigation  from './components/Navigation.vue'
import Content  from './components/Content.vue'
import Footer  from './components/Footer.vue'
export default {          
    name:'app',
    components:{
      Navigation,
      Content,         
      Footer
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
.container{
  text-align: left;
}
</style>
