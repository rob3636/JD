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
               <label>Name of Dish</label>
                <input type="text" value="{{$single->title}}" required class="form-control" name="dish-name" autofocus />
            </div>
            <div class="form-group">
  <div class="row">
                <div class="col-sm-6">
               <label>Price</label>
                   
                    <div class="input-group">
                        <div class="input-group-addon">$</div>
                        <input type="text" value="{{$single->price}}" class="form-control" name="price"/>
                    </div>
                </div>
                   
               <div class="col-sm-6">
                    <label>Quantity</label>
                     <select class="form-control" name="quantity">
                     
                <option value="1" {{ $single->quantity == 1  ? "selected" : "" }}>1</option>
                <option value="2" {{ $single->quantity == 2  ? "selected" : "" }}>2</option>
                <option value="3" {{ $single->quantity == 3  ? "selected" : "" }}>3</option>
                <option value="4" {{ $single->quantity == 4  ? "selected" : "" }}>4</option>
                <option value="5" {{ $single->quantity == 5  ? "selected" : "" }}>5</option>
                <option value="6" {{ $single->quantity == 6  ? "selected" : "" }}>6</option>
                <option value="7" {{ $single->quantity == 7  ? "selected" : "" }}>7</option>
                <option value="8" {{ $single->quantity == 8  ? "selected" : "" }}>8</option>
                <option value="9" {{ $single->quantity == 9  ? "selected" : "" }}>9</option>
                <option value="10" {{ $single->quantity == 10  ? "selected" : "" }}>10</option>

                    </select>
                    

                </div>
    </div>
            </div>
            
            <div class="form-group">
               <label>Description</label>
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