import Vue from 'vue'
import App from './App.vue'

Vue.config.productionTip = false

Vue.filter('excerpt', val=>{
  if(!val || typeof(val) != 'string') return ''
  val = val.slice(0,20)
  return val
})

new Vue({
  render: h => h(App),
}).$mount('#app')
