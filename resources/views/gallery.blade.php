@extends('layouts.master')

@section('content')

   
 
<div id="home"></div>
@foreach($hero as $heroimage)




@endforeach

<div class="jumbotron">
  
  <div class="bg">
    <div class="image" style="background-image: url({{asset('hero-image')}}/{{$heroimage->image}})"></div>
</div>
  <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header" id="navbar">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="small-logo-container">
            <a class="small-logo page-scroll" href="#home"><img src="{{asset('assets/logo2.png')}}"></a>
          </div>
        </div>
        <div class="navbar-collapse collapse">
          
          <ul class="nav navbar-nav navbar-right cl-effect-17">
            
            <li><a href="{{url('/')}}" class="page-scroll">Home</a></li>
            


            <li><a href="gallery" class="page-scroll">Gallery</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container-fluid big-logo-row">
     
     
      <div class="container">
        <div class="row">
          <div class="col-xs-12 big-logo-container">
            <h1 class="big-logo">Johnny's Dumplings House</h1>
          </div><!--/.col-xs-12 -->
        </div><!--/.row -->
      </div><!--/.container -->
    </div><!--/.container-fluid -->
  
</div>
   
   
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


