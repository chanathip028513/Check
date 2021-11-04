@extends('layouts.admin.admin')
@section('conten')

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Mali&display=swap');
    </style>
<div class="container pt-5" style="font-family: 'Mali', cursive">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <h2><strong>My Profile</strong></h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                        <p><strong>Name : </strong>{{Auth::user() ->name}}</p>
                        <p><strong>Username : </strong>{{Auth::user() ->username}}</p>
                        <p><strong>phone : </strong>{{Auth::user() ->phone}}</p>
                        <p><strong>Email : </strong>{{Auth::user() ->email}}</p>
                        <p><strong>Created At : </strong>{{Auth::user() ->created_at}}</p>

                        
                        

                        
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
