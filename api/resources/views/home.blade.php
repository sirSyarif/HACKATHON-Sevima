<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>iCovid | Home</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="{!! asset('js/script.js') !!}"></script>
        

    </head>
    <body onload="loader()">
        <!--    PRELOADER   -->
        <div id="preloader">
            <div id="loader"></div>
        </div>
        <!-- #PAGE ILANGIN PAGE BUAT PRELOADERNYA -->
        <div id="page" class="animate-bottom">

            <div id="navbar" class="nav navbar-nav">
                <div>
                    <a href="#default" id="logo" class="float-left">iCOVID</a>
                    @guest            
                    @if (Route::has('login'))
                        
                            @auth
                                <a href="{{ url('/index') }}" >Home</a>
                            @else
                                <a class="float-right kanan" href="{{ route('login') }}">Login</a>
    
                                @if (Route::has('register'))
                                    <a class="float-right" href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        
                        @endif
                        @else
                            <a class="float-right kanan" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </div>
                </li>
            @endguest
            </div>


        <!-- CONTENT -->
        <div id="main">
            <div>
                <center><p class="judul" style="margin-top: 50px;"><span>CORONAVIRUS GLOBAL DISEASE</span></p>
                <h6 class="text">Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.Most people who fall sick with COVID-19 will experience mild to moderate symptoms and recover without special treatment.</h6>
            </center>
                <div class="row justify-content-center">
                   
                    <div class="card jarak col-sm-3 kuning">
                        <div class="card-body text-center">
                          <p>Total Confirmed</p>
                          <p id="positifGlobal"></p>
                        </div>
                    </div>
                    <div class="card jarak col-sm-3 hijau ">
                        <div class="card-body text-center">
                          <p>Total Recovered</p>
                          <p id="sembuhGlobal"></p>
                        </div>
                    </div>
                    <div class="card jarak col-sm-3 merah">
                        <div class="card-body text-center">
                          <p>Total Deaths</p>
                          <p id="meninggalGlobal"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card text-center" id="rs">
                <div class="card-header">
                  <h3>Hospital List</h3>
                </div>
                <div class="card-body">
                    <div class="table-wrapper-scroll-y my-custom-scrollbar table-responsive-sm">

                        <table class="table table-bordered table-striped mb-0">
                          <thead>
                            <tr>
                              <th scope="col">Nama Rumah Sakit</th>
                              <th scope="col">Alamat</th>
                              <th scope="col">Provinsi</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($rumah_sakit as $p)
                            <tr>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->alamat }}</td>
                                <td>{{ $p->provinsi }}</td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      
                      </div>
                </div>
                <div class="card-footer text-muted">
                  <h2>CASES IN INDONESIA</h2>
                  <div>
                  CONFIRMED : <p id="positif"></p> COVERED : <p id="sembuh"></p> DEATHS : <p id="meninggal"></p>
                  </div>
                </div>
            </div>
        </div>

        <div>
            <center><p class="judul" style="margin-top: 50px;"><span>VACCINATED DATA</span></p><center>
            <div class="container-fluid row justify-content-center">
            <div class="card jarak col-sm-5 hijau">
                        <div class="card-body text-center">
                          <p>Total Vaksinasi Dosis 1</p>
                          <p id="sasaran"></p>
                        </div>
                    </div>
                    <div class="card jarak col-sm-5 hijau">
                        <div class="card-body text-center">
                          <p>Total Vaksinasi Dosis 2</p>
                          <p id="medis"></p>
                        </div>
                    </div>
            </div>
        </div>


        <!-- FOOTER -->
        <footer class="new_footer_area bg_color">
            <div class="new_footer_top">
                <div class="container">
                   <div class="row">
                     <div class="col-lg-3 col-md-6">
                        <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Get in Touch</h3>
                            <p>Don’t miss any updates of Covid information !</p>
                            <form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">
                                <input type="text" name="EMAIL" class="form-control memail" placeholder="Email">
                                <button class="btn btn_get btn_get_two" type="submit">Get in Touch</button>
                                <p class="mchimp-errmessage" style="display: none;"></p>
                                <p class="mchimp-sucmessage" style="display: none;"></p>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" style="margin-left: 110px">
                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">More Information</h3>
                            <ul class="list-unstyled f_list">
                                <li><a href="https://covid19.go.id/">Gugus Tugas Percepatan Penanganan Covid19</a></li>
                                <li><a href="https://kawalcorona.com/">Kawal Corona</a></li>
                            </ul><br><br>
                            <h3 class="f-title f_600 t_color f_size_18">Thanks For</h3>
                            <ul class="list-unstyled f_list">
                                <li><a href="https://covid-19-apis.postman.com/">Postman API</a></li>
                                <li><a href="https://github.com/mathdroid/indonesia-covid-19-api">Mathdroid API</a></li>
                                <li><a href="https://kawalcorona.com/">Kawal Corona</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 float-right" id="kontak" style="margin-left: 170px">
                        <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Our Team Contact</h3>
                                <div class="f_social_icon">
                                    <a href="https://web.facebook.com/arif09hi" class="fa fa-facebook"></a>
                                    <a href="https://twitter.com/syarifh_9" class="fa fa-twitter"></a>
                                    <a href="https://www.instagram.com/syarifh_0/" class="fa fa-instagram"></a>
                                    <br><br><br><br>
                                    <h3 class="f-title f_600 t_color f_size_18">COVID-19 Hotline 119</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bg">
                    <div class="footer_bg_one"></div>
                    <div class="footer_bg_two"></div>
                </div>
            </div>
                <div class="footer_bottom">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-sm-7">
                                <p class="mb-0 f_400">© SMKN 4 BDG 2020 All rights reserved.</p>
                            </div>
                            <div class="col-lg-6 col-sm-5 text-right">
                                <p>Made with <i class="fa fa-heart"></i> in <a href="#">Bandung</a></p>
                            </div>
                        </div>
                    </div>
                </div>
        </footer>

        <!-- Sisain 1 tutup div buat preload hide !!! -->
        </div>
        
        

    </body>
</html>
