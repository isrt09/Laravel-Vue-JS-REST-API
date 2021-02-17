<template>
  <div id="app"> 
    <Navigation></Navigation>
    <Content :friends="friends"></Content> 
    <Footer></Footer>   
  </div>
</template>

<script>
import Navigation  from './components/Navigation.vue'
import Content  from './components/Content.vue'
import Footer  from './components/Footer.vue'
export default {          
    name:'app',
    data(){
      return{
        friends:[
          {name:'Masum',age:35,score:'A+', status:true},
          {name:'Miraj',age:29,score:'A',status:true},
          {name:'Mamun',age:31,score:'B+',status:false},
          {name:'Majed',age:30,score:'C',status:false},
          {name:'Minhaz',age:32,score:'F',status:true}
        ]
      }
    },
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
