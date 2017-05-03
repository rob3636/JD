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
                <div class="col-md-10 col-md-offset-1">
                    
                 
          <form action="/admin/menu/{{$single->id}}" method="post" enctype="multipart/form-data">         {{ csrf_field() }}
                  {{ method_field('put') }}
                   
                   <div class="row admin" id="contact">
    <div class="col-md-12">
        <h1>Edit Menu</h1>
        </div>
    <div class="col-md-6">
        
            <div class="form-group">
                <input type="text" value="{{$single->title}}" required class="form-control" name="dish-name" autofocus />
            </div>
            <div class="form-group">
                <input type="text" value="{{$single->price}}" class="form-control" name="price"/>
            </div>
            
            <div class="form-group">
                <textarea class="form-control" name="description" >{{$single->description}}</textarea>
            </div>
            
           <div class="form-group row center-block">
               
                <div class="col-sm-8 no-padding">
                    <input class="btn btn-default" type="submit" value="Change" name="submit" id="edit-btn">
                </div>
                
               <div class="col-sm-4 no-padding">
                   <a href="/admin/menu/{{$single->id}}/delete">  <input class="btn btn-default" value="Remove" name="remove" id="edit-btn"></a>
                </div>
            </div>
        
    </div>
    <div class="col-md-6">
    <div class="gallery-container">
        <img src="{{asset('menu')}}/{{$single->image}}" class="img-thumbnail edit-menu-image center-block" id="menu-img-tag">
        
<!--        <img src="" id="menu-img-tag">-->
        
        <input type="file" name="file" id="menu-img">
    </div>
    </div>
</div>
                    
        </form>      
                    
                </div>
            </div>
        </div>
    </div>
</div>



@endsection