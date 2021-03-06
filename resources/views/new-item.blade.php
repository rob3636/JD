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
                    
                 
        <form action="{{ url('/admin/menu/create') }}" enctype="multipart/form-data" method="post" class="pure-form">
                   {{method_field('PUT')}}
                   {{ csrf_field() }}
                   <div class="row admin">
    <div class="col-md-12">
        <h1>Create a New Dish</h1>
        </div>
    <div class="col-md-6">
            <div class="form-group">
                <input type="text" placeholder="Dish Name" required class="form-control" name="title" autofocus/>
            </div>
            <div class="form-group">
                  <div class="row">
                <div class="col-sm-6">
               
                    <div class="input-group">
                       <div class="input-group-addon">$</div>
                        <input type="text" class="form-control" name="price" placeholder="Price"/>
                    </div>
                </div>
                   
               <div class="col-sm-6">
                   
                     <select class="form-control" name="quantity">
                <option value="" selected>Quantity</option>     
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>

                    </select>
                    

                </div>
                </div>
            </div>
            
            <div class="form-group">
                <textarea class="form-control" name="description" placeholder="Description"></textarea>
            </div>
            
            <input class="pure-button pure-button-primary" type="submit" value="Create" name="submit" id="edit-btn">
        
        
    </div>
    <div class="col-md-6">
   
      <div class="gallery-container">
              <img src="http://dummyimage.com/300x300/4d494d/686a82.gif&text=click+to+add" alt="placeholder+image" class="img-thumbnail edit-menu-image" id="menu-img-tag">
            
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