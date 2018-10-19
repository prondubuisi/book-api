new Vue({
  el: '#app',
  data () {
    return {
      name: '',
      email: '',
      password: '',
      password_confirmation: '',
      errors: ''
    }
  },
  methods : {
    signup : function() {
      axios
      .post('http://127.0.0.1:8000/api/users',{

      "email" : this.email,
      "name" : this.name,
      "password" : this.password,
      "password_confirmation" : this.password_confirmation  
  
})
      .then(response => (window.location.replace("/")) )
      .catch(error => this.errors = error.response.data )
    }
  },
  
})