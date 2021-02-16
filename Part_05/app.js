var X = new Vue({

	el : '#app',
	data:{
		name:'Event Objects',
		color: 'one',
		log:{
			x:0,
			y:0
		}
	},
	methods:{
		test(e){
			console.log(e)
		},
		value(e){
			this.log.x = e.offsetX,
			this.log.y = e.offsetY
		}

	}
})