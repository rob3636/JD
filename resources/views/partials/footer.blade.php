
<div class="footer-dark">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-push-6 item text">
                    <h3>Johnny's Dumpling House</h3>
                    <p>Passionate about the art of handcrafted dumplings, leaders of the revolutionary street food culture.</p>
                </div>
                <div class="col-md-3 col-md-pull-6 col-sm-4 item">
                    <h3>Types of Food</h3>
                    <ul>
                        <li>Soul Food</li>
                        <li>Dumplings</li>
                        <li>Baos</li>
                        <li>Sui Mei</li>    
                    </ul>
                </div>
                <div class="col-md-3 col-md-pull-6 col-sm-4 item">
                    <h3>Admin Page</h3>
                    <ul>
                               @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        
                    @else
                        <li>
                            <a href="{{ url('/admin') }}" class="">
                                {{ Auth::user()->name }}
                            </a>

                            
                        </li>
                    @endif
                    </ul>
                </div>
                <div class="col-md-12 col-sm-4 item social"><a href="https://www.facebook.com/JohneysDumplings/" target="_blank"><i class="icon ion-social-facebook"></i></a><a href="https://www.tripadvisor.co.nz/Restaurant_Review-g1760740-d10673247-Reviews-Johney_s_Dumpling_House-Mount_Maunganui_Tauranga_Bay_of_Plenty_Region_North_Isl.html" target="_blank"><i class="icon fa fa-tripadvisor"></i></a></div>
            </div>
            <p class="copyright">Johnny's Dumpling House 2017</p>
        </div>
    </footer>
</div> 