<template>
<!-- <div class="text-center">
    <h1>Add Tag</h1>
    <form action="#" @submit.prevent = "edit ? updateTag(tag.id) : createTag()">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" v-model="tag.name">
        </div>
        <div class="form-group">
            <button v-show="!edit" type="submit" class="btn btn-success">Add Tag</button>
            <button v-show="edit" type="submit" class="btn btn-success">Update Tag</button>
        </div>
    </form>
<h1>All Tags</h1>

<h4 v-for="tag in tags" v-bind:key="tag.name"> {{tag.name}} <button @click="showTag(tag.id)" class="btn btn-default btn-sm" > Edit </button> <button @click="deleteTag(tag.id)" class="btn btn-danger btn-sm" > Delete </button>  </h4>

</div> -->


<div class="row">

   <div class="col-md-6">
        <h2>Add Tag</h2>
        <form action= "#" @submit.prevent = "edit ? updateTag(tag.id) : createTag()" enctype="multipart/form-data"> 
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="" class="form-control" v-model="tag.name">
              
            </div>
            <div class="form-group">
              <label for="photo">Image</label>
              <input type="file" name="photo" id="" class="form-control" v-on:change="onPhotoChange" >
             </div>
             <div class="form-group">
                <button v-show="!edit" type="submit" class="btn btn-success">Add Tag</button>
                <button v-show="edit" type="submit" class="btn btn-success">Update Tag</button>
             </div>
           
         </form>
    </div>


    <div class="col-md-6">

    
      <table class="container table table-striped">
      <thead>
        <tr>
          <th scope="col">Tags</th>
          <th scope="col">Update</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody v-for="tag in tags" v-bind:key="tag.name">
             
        <tr>
          
          <td> {{tag.name}} </td>
          <td> <button @click="showTag(tag.id)" class="btn btn-secondary btn-sm" > Edit </button> </td>
          <td> <button @click="deleteTag(tag.id)" class="btn btn-danger btn-sm" >Delete </button> </td>
        </tr>
       
      
      </tbody>
    </table>
    </div>
    
</div>
</template>

<script>
export default {
  data: function () {
      return {
           edit : false,
          tags: [],
          tag: {
              id:'',
              name : '',
              photo : '',
              slug : ''
          }

      }
  },

  mounted: function () {
      console.log('Tags loading...');
      this.fetchTags();
  },

  methods: {
        

        fetchTags: function(){
            console.log('Fetching tags ...');
             axios.get('api/tags')
              .then((response) =>{
                  console.log(response.data);
                  this.tags = response.data;
              }).catch((error) =>{
                  console.log(error);
              });
        },

        onPhotoChange : function(e){
                console.log(e.target.files[0]);
                this.photo = e.target.files[0];
            },

         createTag: function(){
             console.log('creating tag ...');
             const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                }

             let self = this;
             let params = Object.assign({}, self.tag);
             
              axios.post('api/tags/store', params ,config)
              .then(function(){
                  self.tag.name = '';
                  self.tag.photo = '';
                  self.tag.slug = '';
                  self.edit = false;
                  self.fetchTags();
              })
              .catch((error) =>{
                  console.log(error);
              })

         },

         showTag: function(id){
             let self = this;
             axios.get('api/tags/'+id)
              .then((response) =>{
                self.tag.id = response.data.id;
                self.tag.name = response.data.name;
                self.tag.photo = response.data.photo;
                self.tag.slug = response.data.slug;
             })
             self.edit = true;
         },

         updateTag: function(id){
             console.log('updating tag "+id+"...');

            let self = this;
             let params = Object.assign({}, self.tag);
              axios.patch('api/tags/'+id, params)
              .then(function(){
                  self.tag.name = '';
                  self.tag.slug = '';
                  self.edit = false;
                  self.fetchTags();
              })
              .catch((error) =>{
                  console.log(error);
              })
         }, 

         deleteTag: function(id){
            let self = this;
            axios.delete('api/tags/'+id)
            .then(function(response){
                self.fetchTags();
            })
            .catch(function(error){
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