var X = new Vue({

	el : '#app',
	data:{
		name:'Vue JS PWA Framework...',
		location : 'Senpara'		
	},
	methods:{		
		press(){
			alert('You Pressed!!')
		},
		key(e){
			console.log(e.target.value) // Repeating value occured
		},
		text(e){
			this.location = e.target.value // Removing repeatation console
		}
	}
})