new Vue({
  el: '#app',
  data () {
    return {
     
      email: '',
      password: '',
      errors:''
      
  }
},
  methods : {
    login : function() {
      axios
      .post('http://127.0.0.1:8000/api/users/login',{

      "email" : this.email,
      "password" : this.password,

} )
      .then(response => (window.location.replace("/")) )
      .catch(error => this.errors = error.response.data  )
    }
  },
  
})