<template>
    <AppLayout>
        <template #content> 
            <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">Student Details</h1>
        </div><br/>
        <div class="col-lg-5">
                <form class="form-add" @submit="formadd" enctype="multipart/form-data">
                   
                    <div class="form-group">
                      <label for="studentname" class="label">Student Name</label>
                      <input type="text" name="name"  class="form-control" id="input"  placeholder="Enter Student Name">
                    </div>
                    <div class="form-group">
                      <label for="inputage" class="label">Age</label>
                      <input type="number" name="age" class="form-control" id="input" placeholder="Enter Student Age">
                    </div>
                    <div class="form-group">
                    <label for="status" class="label" name="status" >Status</label>
                    <select class="form-control" id="input" >
                        <option selected>Select...</option>
                        <option>Active</option>
                        <option>Inactive</option>
                      </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFile"  class="label" >Input Student Image</label>
                        <input class="form-control" type="file" id="input" name="image" >
                      </div>
                    
                    <button type="submit" class="btn btn-primary" id="button">Submit</button>
                  </form>
            
        </div>
        <div class="col-lg-12" id="table">
           
            <table class="table">
                <thead class="-table table-hover table-dark">
                  <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Student Age</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                   
                    <tr v-for="(task,key) in tasks">

                        <th scope="row">{{ task.id }}</th>
                        <td v-if="task.image">
                            <img :src="`/storage/images/${task.image}`" :alt="`${task.id}`" class="img-thumbnail" width="70px" height="70px"/>
                            
                            
                       
                    </td>
                        <td>{{ task.name }}</td>
                        <td>{{ task.age }}</td>
                        <td>
                            
                                <h5><span v-if="task.status=='Active'" class="badge rounded-pill bg-success" width="50px">Active</span>  </h5> 
                           
                            <h5 ><span  class="badge rounded-pill bg-warning">Inactive</span>  </h5>
                                
                          
                          
                            </td>
                        <td><a href="{{ route('student.delete',task.id) }}"><button class="btn btn-danger">Delete</button></a>
                            <a href="{{ route('student.done',task.id) }}"><button class="btn btn-primary">Status</button></a>
                            <a href="javascript:void(0)" ><button class="btn btn-warning" onclick="formEdit({{$task->id }})">
                                Edit</button></a></td>
                      </tr>
                      
                   
                </tbody>
              </table>
              
        </div> 
        
        </div>

    </div>
    
    

        </template>
        </AppLayout>

</template>
<script >
import AppLayout from '@/Layouts/App.vue'

export default {
    components : {
        AppLayout
    },
    props:{
        tasks: Array
    },
    data () {
    task:   {
            name: ''
            // age: '',
            // status: '',
            // image: null
    }
    }
    ,
    methods:{
    async formadd (){
     
    }
}

}


</script>

<style lang="css" scoped>

.page-title{
            padding-top: 5vh;
            color: rgb(116, 236, 162);
            font-family: 'Times New Roman', Times, serif;
            font-size: 4em;
        }
        .form-add{
            background-color: rgb(255, 255, 255);
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            width: 600px;
            margin-left: 60%; 
        }
        .label{
            margin-left: 3%;
        }
        #input{
            width:560px;
            margin-left: 3%;  
        }
        #button{
        margin-left: 40%;
        }
        #table{
            margin-top: 5%
        }


</style>