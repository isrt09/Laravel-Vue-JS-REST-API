var x = new Vue({
	el:'#app',
	data :{
		fname : 'Mazedur',
		lname : 'Rahman',		
		country :'Bangladesh'
	},
	methods:{
		myClass(){
			return 'M.Sc'
		},
		myRoll(number){
			return `${number}`
		},
		myCountry(){
			return `My Home District is ${this.country}`
		}
	}
})