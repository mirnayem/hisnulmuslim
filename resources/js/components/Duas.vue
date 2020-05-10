<template>
     <div class="row">
    <div class="col-2 pt-3">
    <div v-for="tag in tags" v-bind:key="tag.name">
     
    <h5><a class="text-secondary" href=""> {{tag.name}} </a> </h5>
            <hr>
       
    </div>
</div>

  <div class="col-10">
  
    <div class="col-12" v-for="dua in duas" v-bind:key ="dua.title">
    
     <div class="card-body">
       <h3 class="card-title"> <a class="text-secondary">{{dua.title}}</a></h3>
       <h5 class="card-text">{{dua.arabic}}</h5>
     </div>
    
   </div>
   <hr>
  
  </div>
</div>
</template>

<script>
export default {
  data: function () {
      return {
          duas: [],
          tags: [],

      }
  },

  mounted: function () {
      console.log('Duas loading...');
      this.fetchDuas();
      this.fetchTags();
  },

  methods: {
      fetchDuas:function(){
          console.log('fetching duas ...');
          axios.get('api/duas')
          .then((response) =>{
              console.log(response.data);
              this.duas = response.data;
          }).catch((error)=>{
              console.log(error);
          });
      },

         fetchTags:function(){
          console.log('fetching tags ...');
          axios.get('api/tags')
          .then((response) =>{
              console.log(response.data);
              this.tags = response.data;
          }).catch((error)=>{
              console.log(error);
          });
      },
  }
}
</script>