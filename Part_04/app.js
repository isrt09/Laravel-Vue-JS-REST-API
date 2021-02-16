var x = new Vue({
	el  : '#app',
	data: {
		dollar: 100,
		
	},
	methods:{
		Pay(amount){
			return this.dollar += amount
		},
		Low(amount){
			return this.dollar -= amount
		}

	}
})