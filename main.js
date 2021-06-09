const app = new Vue({
  el:'#app',
  data:{
    test:false,
    title:'TITOLO',
    dischi:[],
    toSearchGenre:'',
    selected:'title',
    genres:[], /* POSSIBILI GENERI */
    opzioni:[]

  },
  created(){
    this.apiCall('all','title');
  },
  methods:{
    
    apiCall(str,chiave){
      console.log('filtro per : ', this.selected);
      console.log('tipo: ', typeof(this.selected));
      console.log('sto cercando: ', str);
      axios.get('http://localhost:80/Projects/php-ajax-dischi/api.php',
    {
      params:{
        value :str,
        key: chiave
      }
    })
    .then(res => {
      console.log('ciao');
      this.genres=res.data.genres;
      this.dischi=res.data.albums;
      this.opzioni=res.data.options
      console.log(this.dischi);
      console.log(this.genres);
      console.log(this.opzioni);
    })
    .catch(err => {
      console.error('errore'); 
    })
    },
     capitalizeFirstLetter(string) {
      return string.charAt(0).toUpperCase() + string.slice(1);
    }
    
  }
})