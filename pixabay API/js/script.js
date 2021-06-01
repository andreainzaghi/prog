new Vue({
  el: '#app',
  data:{
    title:'',
    images: []
  },
  methods:{
    imagesSearch: function() {
      let link = 'https://pixabay.com/api/?key=21824357-188f94b37d0cfe213094797ce&q='+ this.title
      axios.get(link,{
            params: {
              title:this.title
            }
          }).then((result)=>{
          this.images = result.data.hits;
            console.log(this.q);
          // console.log(result.data.hits);
        });
      }
    },
  })
