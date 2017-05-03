@extends('layouts.master')


@section('content')

@include('layouts.admin-nav')

<div class="container">
    <div class="row">
        <div class="col-md-3">
       @include('layouts.admin-nav2')
        </div>
        <div class="col-md-9 well">
    
<div class="row admin">
    
    @foreach($menues as $single)
    <div class="col-md-4">
       
        <a href="{{ url('/admin/menu') }}/{{$single->id}}">
        <div class="menu-container img-thumbnail">
        <img src="{{asset('menu')}}/{{$single->image}}" alt="">
        
          <div class="overlay">
              <div class="overlay-text">
                  Edit
              </div>
          </div>
          
        </div>
        </a>
    
    </div>
    
    @endforeach
    
    <div class="col-md-4">
       
        <a href="{{ url('/admin/menu/new')}}">
           <div class="menu-container img-thumbnail">
            
            <img src="{{asset('images/image.jpg')}}" alt="">
          
          <div class="overlay">
              <div class="overlay-text">
                  New
              </div>
          </div>
            </div>

           </a>
       
    
    </div>
    
</div>
         
       
     </div>
        
       
        
    </div>
</div>
@endsection