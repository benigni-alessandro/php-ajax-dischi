var app = new Vue({
    el: '#root',
    data: {
      lista_canzoni:[],
      genere_filtered:[],
      orderedlist:[]
    },
    created(){
      axios.get('http://localhost:8888/php-ajax-dischi/call.php')
      .then((response) => {
        console.log(response);
      this.list = response.data;
      let lista = this.list;
      this.list.forEach((card, i) => {
      this.lista_canzoni.push(card);
      this.genere_filtered.push(card);
      })
     })
    },
    methods:{
      onChange: function (event) {
        let selected = event.target.value;
        console.log(selected);
        this.genere_filtered = this.lista_canzoni.filter((card) => card.genre == selected || selected == 'all');
        console.log(this.genere_filtered);
      },
      ordina: function ordina() {
         this.orderedlist = this.sortObject(this.genere_filtered);
      },
      sortObject: function(o) {
        return this.genere_filtered.sort((a, b) => { return a.year - b.year;});
    }
    }
});
