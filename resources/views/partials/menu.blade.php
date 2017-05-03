
<section id="menu">
    <div class="container">
        <h1 class="text-center">Menu</h1>
        <div class="row">
            <div class="col-md-12">
                <div class=row>
                    <div class=col-md-12>

                      <ul class="pgwSlider">
    @foreach($menues as $item)
    <li><img src="{{asset('menu')}}/{{$item->image}}" alt="{{$item->title}} {{$item->price}}" data-description="{{$item->description}}">

    </li>
    @endforeach
</ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
 
    
</section>