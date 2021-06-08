const app = new Vue({
  el:'#app',
  data:{
    test:false,
    title:'TITOLO',
    dischi:[],

  },
  created(){
    axios.get('http://localhost:80/Projects/php-ajax-dischi/api.php')
    .then(res => {
      console.log('ciao');
      this.dischi=res.data;
      console.log(this.dischi);
    })
    .catch(err => {
      console.error('errore'); 
    })
  },
  methods:{

  }
})