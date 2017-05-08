@extends('layouts.master')


@section('content')

@include('layouts.admin-nav')

<div class="container">
    <div class="row">
        <div class="col-md-3">
        @include('layouts.admin-nav2')
        </div>
        <div class="col-md-9 well">
    
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Users </th>
                
            </tr>
        </thead>
        <tbody>
           @foreach($users as $admin)
            <tr>
                <td>{{$admin->name}}</td>
                <td>
                    @if(Auth::user()->id == $admin->id)
                    
                    <a href="/admin/users/{{$admin->id}}/delete"><button class="btn btn-default" type="button">Remove</button></a>
                    
                    @else
                    <button class="btn btn-default disabled" type="button">Remove</button>
                    
                    @endif
                </td>
                
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
       <a href="{{ url('/admin/users/newuser') }}"><button class="pure-button pure-button-primary" type="button">New User</button></a>
        </div>
    </div>
</div>
@endsection