
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
            
            <li><a href="#home" class="page-scroll">Home</a></li>
            <li><a href="#about" class="page-scroll">About</a></li>
            <li><a href="#menu" class="page-scroll">Menu</a></li>
            <li><a href="#contact" class="page-scroll">Contact</a></li>
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