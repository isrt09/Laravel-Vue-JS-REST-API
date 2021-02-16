var X = new Vue({

	el : '#app',
	data:{
		fname:true,
		lname:true
	},
	methods:{		
		showfName(){
			this.fname =!this.fname
		},
		showlName(){
			this.lname =!this.lname
		}
	}
})