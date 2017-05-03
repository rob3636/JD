@extends('layouts.master')


@section('content')

@include('layouts.admin-nav')

<div class="container">
    <div class="row">
        <div class="col-md-3">
          @include('layouts.admin-nav2')
        </div>
        <div class="col-md-9 well">
        
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
           
        @if(session('success'))
           <div class="alert alert-success">
               Image Uploaded
           </div>
        @endif
            
        @foreach($hero as $adminhero)   
            
    <img src="{{asset('hero-image')}}/{{$adminhero->image}}" alt="" class="img-responsive img-thumbnail center-block edit-menu-image" id="menu-img-tag">
        
        @endforeach
        </div>
        
        <div class="col-md-10 col-md-offset-1">
           
            <form class="hero-form" action="/admin/hero" method="post" enctype="multipart/form-data" id="form-submit">
             {{method_field('PUT')}}
              
              {{ csrf_field() }}
              
               <input type="file" name="hero" class="center-block" id="menu-img">
                  <input type="submit" name="submit" class="btn btn-defult">
                   </form>
        </div>
    </div>
       
       
        </div>
    </div>
</div>
@endsection