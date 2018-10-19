new Vue({
  el: '#app',
  data () {
    return {
      books: null
    }
  },
   mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
              user_id: '1',
              title: '',
              author: '',
              description: '',
              price: '',
              errors: ''
            };
        },
        methods: {
            onImageChange(e){
                console.log(e.target.files[0]);
                this.image = e.target.files[0];
            },
            formSubmit() {
                
                let currentObj = this;
 
                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                }
 
                let formData = new FormData();
                
                formData.append('user_id', this.user_id);
                formData.append('title', this.title);
                formData.append('author', this.author);
                formData.append('description', this.description);
                formData.append('price', this.price);
                formData.append('image', this.image);


                console.log(typeof formInput);
 
                console.log(formData);
                axios.post('api/books', formData, config)
                .then(function (response) {
                    currentObj.success = response.data.success;
                })
                .catch(error => {
                    return this.errors = error.response.data;
                });
            }
        }
})

