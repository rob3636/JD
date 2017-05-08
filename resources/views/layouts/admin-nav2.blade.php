

<ul class="nav nav-pills nav-stacked">
    <li class="{{ Route::getCurrentRoute()->getPath() == 'admin' ? 'active' : '' }}"><a href="{{ url('/admin') }}"><i class="fa fa-home fa-fw"></i>Home</a></li>
    
    <li class="{{ Route::getCurrentRoute()->getPath() == 'admin/hero' ? 'active' : '' }}"><a href="{{ url('/admin/hero') }}"><i class="glyphicon glyphicon-heart fa-fw"></i>Hero Image</a></li>
      
    
    <li class="{{ Route::getCurrentRoute()->getPath() == 'admin/menu' ? 'active' : '' }}"><a href="{{ url('/admin/menu') }}"><i class="glyphicon glyphicon-cutlery fa-fw"></i>Menu</a></li>
    
    <li class="{{ Route::getCurrentRoute()->getPath() == 'admin/gallery' ? 'active' : '' }}"><a href="{{ url('/admin/gallery') }}"><i class="glyphicon glyphicon-picture fa-fw"></i>Gallery</a></li>
    
    <li class="{{ Route::getCurrentRoute()->getPath() == 'admin/users' ? 'active' : '' }}"><a href="{{ url('/admin/users') }}"><i class="glyphicon glyphicon-user fa-fw"></i>Users</a></li>
    
    <li><a href="{{ url('/logout') }}"><i class="glyphicon glyphicon-off fa-fw"></i>Logout</a></li>
                
</ul>
  


