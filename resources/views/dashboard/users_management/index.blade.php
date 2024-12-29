@extends('dashboard_layout.index')


@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">MANAGE USERS</h1>
    
</div>

   
    
<!-- DATA TABLE -->     
   <div class="row">
    <div class="col-8 col-sm-10"></div> <div class="col-4 col-sm-2"> <div class="btn btn-success m-1" data-bs-toggle="modal" data-bs-target="#addmember">ADD USERS</div></div>
  </div> 
<div class="table-responsive">

<table   class="table table-bordered" id="example1" width="100%" cellspacing="0">

<thead class="">
<tr>
<th>#</th>
<th>Username</th>
<th>Email</th>
<th>Edit</th>
<th>Delete</th>

</tr>
</thead>


<tbody class="table table-striped table-hover ">

  <?php $i=1;  ?>
@if(count($users)>0)
    
   @foreach ($users as $user)
   <tr>
    <td><?php echo $i++ ?></td>
    <td>{{$user->name}} </td>
    <td>{{$user->email}}</td>
    
    <!--<td><a href='#' data-bs-toggle='modal' data-id=''  data-bs-target='#pop' class='showdata' value='' name='data'><i class='fa fa-edit'></i></a></td>-->
    <td><a href="#"  data-bs-toggle="modal" data-bs-target="#EditUser{{$user->id}}"><i class='fa fa-edit'></i></a></td>
    <td><a href='#'  data-bs-toggle="modal" data-bs-target="#DeleteUser{{$user->id}}"><i class='fa fa-trash'></i></a></td>
    
    @include('dashboard.users_management.edit')
    @include('dashboard.users_management.delete')
    </tr> 
   @endforeach
@else 

  
  @endif



</tbody>
</table>
</div>   

      

<div class="modal fade " id="addmember" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">ADD USER</h5>
          <button type="button" class="battan-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
        </div>
        
        <div class="modal-body">
          
       <form action="{{route('users_management.store')}}" method="post">

        <div class="mb-3 row">
                <label for="inputText" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="inputText"  name="name" required>
                </div>
                </div>

           
     @csrf
         

             

                <div class="mb-3 row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="Email"  class="form-control" id="inputEmail" name="email" required>
                </div>
                </div>

        


               
            
                <div class="mb-3 row">
                 <label for="inputText" class="col-sm-2 col-form-label">{{__('User Role')}}</label>
           
                 <div class="col-sm-10">
                 <select class="form-select form-control" aria-label="Default select example" name="role">
                     <option value="SuperAdmin">Admin</option>
                     <option value="Seller">Seller</option>
                    
                 </select>
                 </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword" name="password" required>
                    </div>
                </div>


            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-secondary">Submit</button>
       
          </form>
        </div>
      </div>
    </div>
  </div>


@endsection