<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>FPOG eDesk</title>

    </head>
        <body>
                <nav class="navbar navbar-expand-md navbar-light bg-info sticky-top" style="margin-top: 3%"><br>
                    <img src="/sce/logos.png" class="pr-3" style="height: 60px" alt=""><br>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'FPOG eDesk') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav text-white">
                            <li class="nav-item text-white pr-3 mr-2 my-2 font-weight-bolder active"><a href="/">Home</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle font-weight-bolder text-secondary" data-toggle="dropdown" href="/program">About FPOG</a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="/pages/history">History</a><hr>
                                  <a class="dropdown-item" href="/pages/rector">Chief Executive Message</a><hr>
                                  <a class="dropdown-item" href="/pages/mission">Mission and Vision</a><hr>
                                  <a class="dropdown-item" href="/pages/location">Location</a><hr>
                                  <a class="dropdown-item" href="/pages/magt">Administrative Leadership</a><hr>
                                  <a class="dropdown-item" href="/pages/ranking">Ranking</a><hr>
                                  <a class="dropdown-item" href="/pages/contact">Contact Us</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle font-weight-bolder text-secondary" data-toggle="dropdown" href="/program">Students</a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Admission Portal</a><hr>
                                  <a class="dropdown-item" href="/registrations/regdetail">Applicant's Login</a><hr>
                                  <a class="dropdown-item" href="#">Student's Login</a><hr>
                                  <a class="dropdown-item" href="#">Full-Time Admission Requirements</a><hr>
                                  <a class="dropdown-item" href="#">Part-Time Admission Requirements</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle font-weight-bolder text-secondary" data-toggle="dropdown" href="/program">Academics</a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Higer National Diploma Programmes</a><hr>
                                  <a class="dropdown-item" href="#">National Diploma Programmes</a><hr>
                                  <a class="dropdown-item" href="#">Certificate Programes</a><hr>
                                  <a class="dropdown-item" href="#">List of Specialied Courses</a><hr>
                                  <a class="dropdown-item" href="#">Skill Development Academy</a><hr>
                                  <a class="dropdown-item" href="#">Admission Prospectus</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle font-weight-bolder text-secondary" data-toggle="dropdown" href="/services">Administration</a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Organisational Structure</a><hr>
                                  <a class="dropdown-item" href="#">Management Team</a><hr>
                                  <a class="dropdown-item" href="#">Governing Council</a><hr>
                                  <a class="dropdown-item" href="#">Heads of Academic Department</a><hr>
                                  <a class="dropdown-item" href="#">Academic Administration</a><hr>
                                  <a class="dropdown-item" href="#">Academic Calender</a><hr>
                                  <a class="dropdown-item" href="#">Approved Students Charges</a><hr>
                                  <a class="dropdown-item" href="#">Eams and Records</a><hr>
                                  <a class="dropdown-item" href="#">Transcript</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle font-weight-bolder text-secondary" data-toggle="dropdown" href="/services">Resources</a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Journals</a><hr>
                                  <a class="dropdown-item" href="#">FPOG Magaines</a><hr>
                                  <a class="dropdown-item" href="#">Public Lectures</a>
                                </div>
                            </li>
                            <li class="nav-item pr-3 mr-2 my-2 font-weight-bolder text-white"><a href="/">Library</a></li>
                            
                            @if (!Auth::guest())
                                <li class="nav-item">
                                    <a class="nav-link" href="register">{{ __('Register') }}</a>
                                </li>           
                            @endif 
                        </ul>
    
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/students">Students</a>
                                </li>
                                @if (Route::has('register'))

                                                                          
                                    <form class="d-flex mb-lg-0">
                                        <input class="form-control mr-2" type="text" placeholder="Search">
                                        <button class="btn btn-secondary" type="submit">Search</button>
                                        </form>
                                @endif
                            @else
                                <li class="nav-item text-dark my-2 mr-2"><a href="posts/create">{{ __('Create') }}</a></li>
                                
                                <li class="nav-item"><a class="nav-link" href="/unit/unit">Add Unit</a></li>

                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="/dashboard" class="my-2">Dashboard</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
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
                        </ul>
                    </div>
                </nav

                
                    @include('inc.message')
                    @yield('content')               
                    
                
                <footer class="container-fluid p-3 my-2 bg-dark text-white" style="margin-top: 3%">
                    <div class="row">
                        <div class="col">
                            <h3>Students</h3>
                            <ul>
                                <li><a href="#">Admission</a></li>
                                <li><a href="#">Applicants Login</a></li>
                                <li><a href="#">Student's Login</a></li>
                                <li><a href="#">Full-Time Admission</a></li>
                                <li><a href="#">Part-Time Admission</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h3>Academics</h3>
                            <ul>
                                <li><a href="#">Higher National Diploma Programmes</a></li>
                                <li><a href="#">National Diploma Programmes</a></li>
                                <li><a href="#">Certificate Programmes</a></li>
                                <li><a href="#">List of Specialied Courses</a></li>
                                <li><a href="#">Skill Development Academy</a></li>
                                <li><a href="#">Admission Prospectus</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h3>Resources</h3>
                            <ul>
                                <li><a href="#">Library</a></li>
                                <li><a href="#">Journals</a></li>
                                <li><a href="#">FPOG Magazine</a></li>
                                <li><a href="#">Public Lectures</a></li>
                                <li><a href="#">Academic Calender</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h3>Portals</h3>
                            <ul>
                                <li><a href="#">Student Portal</a></li>
                                <li><a href="#">Staff Portal</a></li>
                                <li><a href="#">Campus Life</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="container pb-3 my-2 bg-dark text-white text-center">
                        Copy Right @@2020 Federal Polytechnic of Oil & Gas. All rights reserved <br> 
                        Powered by FPOG ICT Team
                    </div>
                </footer>            
        </body>
</html>
  