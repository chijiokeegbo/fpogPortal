<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Students Portal</title>
</head>
<body><br>
    
    <div class="container-fluid bg-success" style="margin-top: 2%">
        <div class="p-2">
            <small>support@fpog-sce.com</small> <small>phone +23480-000-1111</small>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-top: 3%">
            <a href="/">
                <img src="/sce/logos.png" class="pr-3" style="height: 50px" alt=""><br>
            </a>
            <a class="navbar-brand" href="/">FPOG</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="#">Activities</a>
                <a class="nav-link" href="#">Admissions</a>
                <a class="nav-link" href="#">Contact Us</a>
              </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 bg-success" >
                <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/sce/student/student-banner2.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/sce/student/student-banner.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/sce/student/student-banner1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/sce/student/student-banner3.jpeg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
            <div class="col-4 p-4">
                <form>
                    <div class="form-group row">
                      <label for="InputEmail1" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="InputEmail1" aria-describedby="email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="InputPassword1" class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="InputPassword1">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div><br>
    <div class="container-fluid bg-dark">
        <div class="row pt-3"><br>
            <div class="col border pt-2 background-color: #1C2331">

            </div>
            <div class="col pt-2 text-white">
                <h3>Search Admission List</h3>
                <form class="p-2 " action="">
                    <div class="form-group">
                        <label for="searchSurname">Enter your surname</label>
                        <input type="text" id="searchSurname" class="form-control" placeholder="Search with your surname">
                    </div>
                    <div class="form-group">
                        <label for="searchProgram" class="col-form-label">Select Programme</label>
                        <select class="custom-select">
                            <option selected>Select Programme</option>
                            <option value="hnd">HND</option>
                            <option value="nd">ND</option>
                            <option value="diploma">Diploma</option>
                            <option value="certificate">Certificate</option>
                            <option value="*">All Programs</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="searchSession" class="col-form-label">Select Admission Year</label>
                        <select name="selectSession" class="custom-select" id="selectSession">
                            <option selected>Select Session</option>
                            <option value="2019">2019/2020</option>
                            <option value="2020">2020/2021</option>
                            <option value="*">All Sessions</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div><br>
            <div class="col border">
                
                </div>
            </div>
        </div>

    </div><br>

    <footer class="container-fluid p-3 my-2 bg-white text-dark border" style="margin-top: 3%">
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
        <div class="container pb-3 my-2 bg-white text-dark text-center">
            Copy Right @@2020 Federal Polytechnic of Oil & Gas. All rights reserved <br> 
            Powered by FPOG ICT Team
        </div>
    </footer>
</body>
</html>