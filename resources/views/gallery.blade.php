@extends('layouts.master')

@section('content')

   
   @include('partials.navigation')
   
   
    <div class="photo-gallery" style="margin-top:50px;">
        <div class="container">
            <div class="intro">
                <h2 class="text-center"> Gallery</h2>
                <p class="text-center">Check out some cool pictures!!</p>
            </div>
            <div class="row photos">
         
                    @foreach($gallery as $picture)
                     
                <div class="col-lg-3 col-md-4 col-sm-6 item">
                    <div class="gallery-container img-thumbnail">
                        <a href="{{asset('/images')}}/{{$picture->image}}" data-lightbox="photos"><img class="img-responsive" src="{{asset('/images')}}/{{$picture->image}}"></a>
                    </div>
                </div>
                
                     @endforeach
           
            </div>
        </div>
    </div>
    
    @include('partials.footer')
   
@endsection


