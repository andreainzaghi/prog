new Vue({
  el: '#app',
  data:{
    series: []
  },
  methods:{
    moviesSearch: function() {
      let link = 'https://pixabay.com/api/?key=21824357-188f94b37d0cfe213094797ce&q=yellow+flowers&image_type=photo'
      axios.get(link).then((resultate)=>{
          this.series = resultate.data.hits;
          console.log(resultate.data);
        });
      }
    },
  })