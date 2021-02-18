<template>
    <div class="container">
        <div class="row">
            <div class="hook">
                <h1>Post</h1>
                <hr>
                <div v-for="post in posts" :key="post.id">
                    <h3>{{post.title}}</h3>
                    <p>{{post.body}}</p>
                </div>                
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    name:'hook',
    data(){
        return{
            posts : []
        }
    },
    methods:{

    },
    created(){
            axios.get('https://jsonplaceholder.typicode.com/posts/')
            .then(response=>{
                this.posts = response.data
            })
            .catch(error=>{
                console.log(error)
            })
        }
}
</script>

<style scoped>
h1{
    color:red
}
.hook{
    text-align: justify;
}
</style>