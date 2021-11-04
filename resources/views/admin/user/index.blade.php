@extends('layouts.admin.admin')
 @section('conten')

 

 <div class="container">
     <div class="row pt-4">
        <h2> <p>User</p></h2>
         <table class="table">
             <thead class="thead-dark">
                 <tr>
                     <th scope="col">ID</th>
                     <th scope="col">Username</th>
                     <th scope="col" style="padding-right: 50px">E-Mail</th>
                     <th scope="col">Password</th>
                     <th scope="col">Status</th>
                     <th scope="col">Action</th>
                 </tr>
             </thead>
             <tbody>
                 <tr>
                     <th scope="row">1</th>
                     <td>Mark</td>
                     <td>Otto</td>
                     
                     <td>@mdo</td>
                     <td>@mdo</td>
                     <td>
                         <a href="" class="btn btn-success">Edit</a>
                         <a href="" class="btn btn-danger">Delete</a>
                     </td>
                 </tr>

             </tbody>
         </table>
     </div>
 </div>

 @endsection



