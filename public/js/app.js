
new Vue({
  el: '#app',
  data () {
    return {
      books: null
    }
  },
  mounted () {
    axios
      .get('http://127.0.0.1:8000/api/books')
      .then(response => (this.books = response.data))
  }
})