@extends('layouts.admin.admin')
 @section('conten')

 <div class="container">
     <div class="row pt-4">
      <h2> <p>Products Type</p></h2>
      <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Type Name</th>
                <th scope="col">Products Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                
                <td>
                    <a href="" class="btn btn-success">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>

        </tbody>
    </table>
 </div>

 @endsection
