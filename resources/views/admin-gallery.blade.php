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

   
        
         <div class="col-md-12">
                

               <div class="row">
        <div class="col-md-12">
            <h1>Upload Multiple Images</h1>
            <form action="/admin/gallery" method="post" enctype="multipart/form-data" multiple="true" class="dropzone" id="image-upload">
                
        {{method_field('PUT')}}
        {{ csrf_field() }}
               
               
                
            </form>
           
          
        </div>
    </div>
               
                
                 <div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Gallery</th>
                
            </tr>
        </thead>
        <tbody>
         
         
           @foreach($pictures as $gallery)
            <tr>
                <td><div class="gallery-container img-thumbnail">
                    <a href="{{asset('images')}}/{{$gallery->image}}" data-lightbox="photos"><img src="{{asset('images')}}/{{$gallery->image}}" class=" gallery-image"></a>
                </div></td>
                <td>
                    
                    <a href="/admin/gallery/{{$gallery->id}}/delete" class="btn btn-default" type="submit">Remove</a>
                </td>
                
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
                    
                     
        
        </div>
    
    

       
        </div>
        
      
    </div>
</div>
@endsection