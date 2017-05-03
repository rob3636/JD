@extends('layouts.master')


@section('content')

@include('layouts.admin-nav')

<div class="container">
    <div class="row">
        <div class="col-md-3">
          @include('layouts.admin-nav2')
        </div>
        <div class="col-md-9 well">
            Welcome to the admin page
        </div>
    </div>
</div>
@endsection