@extends('inc.nav')
@section('content')

    <div class="container-fluid border">
      <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="sce/weBanner.png" class="d-block w-100" alt="Welcome to FPOG">
                    <div class="carousel-caption text-center font-weight-bold">
                      <h1 class="text-dark display-3">Students eDesk</h1>
                      <h2 class="display-5 text-dark">Federal Polytechnic of Oil & Gas</h2>
                    </div>
                </div>
                <div class="carousel-item">
                  <img src="sce/sce3.png" class="d-block w-100" alt="SCE Students">
                  <div class="carousel-caption text-center font-weight-bold">
                    <h2 class="display-5 text-white"> Students of the School of Continuing Eductaion at the Orientation Ceremony</h2>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="sce/sce2.png" class="d-block w-100" alt="Rector">
                  <div class="carousel-caption text-center font-weight-bold">
                    <h2 class="display-5 text-info">Rector Addressing the Students of the School of Continuing Eductaion at the Orientation Ceremony</h2>
                  </div>
                </div>

                </div>
            </div>  
            <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
      </div>
    </div><br><hr>

    <div class="card-group">
      <div class="card">
        <img class="img-fluid" src="/sce/entrepreneurship.jpg" alt="Portal">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="/sce/admission.jpg" alt="Admissions">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="/sce/laboratory.jpg" alt="Science Laboratory">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="/sce/engineering.jpg" alt="Engineering">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
    <hr>

            <div class="container fluid border-primary p-4 text-center">
              <div class="row">
                <div class="col-sm-4 p-0">
                  <img src="/sce/students.jpg" class="img-fluid float-left" style="height: 285px" >
                </div>
                <div class="col-sm-8">
                  <h3> School of Continung Education</h3>
                  <h5> Federal Polytechnic of Oil & Gas, Bonny</h5>
                  <ul class="nav nav-tabs">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#preamble"><h5>Preamble</h5></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#mission"><h5>Our Vison</h5></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#vision"><h5>Our Mission</h5></a>
                      </li>
                  </ul>
          
                  <!-- Tab panes -->
                  <div class="tab-content border">
                    <div class="tab-pane container active" id="preamble">
                      <h5 class="p-3">The Federal Polytechnic of Oil & Gas, Bonny is established by
                      law to train technically skilled manpower for the oil and gas 
                      industries and other related industries in Nigeria and the West 
                      African Sub-Region. The Polytechnic is endowed with the capacity to run both 
                      regular and part-time programmes</h5>
                    </div>
                    <div class="tab-pane container fade" id="vision">
                      <h5 class="p-3">To be recognized as a leading institution in the middle level 
                        manpower training and development for the Oil and Gas industry
                        in Africa.</h5>
                    </div>
                    <div class="tab-pane container fade" id="mission">
                      <h5 class="p-3">To meet the middle-level manpower development of the Oil and Gas 
                        sector in Nigeria and the West Africa sub-region in line with the 
                        industry needs, community aspiration as well as forging partnership 
                        with world class institutions.</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div><br>

      <div class="container-fluid border-primary" style="margin-top: 3%">
        <div class="row">
          <div class="col-sm-3"  style="margin-top: 2%">
              <div class="card text-white bg-secondary mb-3" style="max-width: 18rem">
                          <img class="card-img-top" src="/sce/rector.jpg" alt="Rector of the FPOG">
                          <div class="card-body">
                              <h4 class="text-center font-weight-bolder">Prof. T. M. Abbey</h4>
                              <h5 class="text-center">Rector, Federal Polytechnic of Oil and Gas Bonny</h5>
                              <p class="card-text">To meet the middle-level manpower development of the Oil and Gas 
                              sector in Nigeria and the West Africa sub-region in line with the 
                              industry needs<a href="#">more</a></p>
                          </div>
                  
              </div><hr>

                <div class="card text-white bg-secondary mb-3" style="max-width: 18rem">
                      <img class="card-img-top" src="/sce/no_images.png" alt="Dean SCE">
                      <div class="card-body">
                        <h4 class="text-center">Dean of School of Continuing Education</h4>
                      </div>
                    </div>            
              <div class="card text-white bg-secondary mb-3" style="max-width: 18rem">
                  <div class="card-header">Our Vision</div>
                      <div class="card-body">
                          <p class="card-text">To be recognized as a leading institution in the middle level 
                              manpower training and development for the Oil and Gas industry
                              in Africa.</p>
                      </div>
                    </div>
          </div>
          <div class="col-sm-6" style="margin-top: 2%">
              <h4 class="text-center">Our News & Events</h4><hr>
              @if(count($posts) > 0)
                @foreach($posts as $post)
                  <div class="well">
                  <h5><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
                    <small>Posted on {{$post->created_at}} </small>
                  </div><hr>
                @endforeach
                  <div class="text-center">
                    {{$posts->links()}}
                  </div>
              @else
                  <p>No Post is on this page</p>
              @endif
          </div>
          
          <div class="col-sm-3"  style="margin-top: 2%">
              <ul class="list-group">
                  <h3 class="text-center">Related Schools</h3>
                  @if (count($schools) > 0)
                      @foreach($schools as $school)
                      <li class="list-group-item bg-secondary text-white font-weight-bolder"><a href="sidepages/{{$school->link}}" class="text-white">{{$school->name}}</a></li>
                      @endforeach
                  @else
                      <h4>Nothing They Here!</h4>
                  @endif

                  <h4 class="text-center">Units</h4>
                  @if (count($units) > 0)
                      @foreach($units as $unit)
                      <li class="list-group-item bg-secondary text-white font-weight-bolder"><a href="pages/{{$unit->link}}" class="text-white">{{$unit->name}}</a></li>
                      @endforeach
                  @else
                      <h4>Nothing They Here!</h4>
                  @endif

              </ul><br>
              <ul class="list-group">
                  <h4 class="text-center font-weight-bold">Units</h4>
                  <li class="list-group-item bg-secondary font-weight-bolder"><a href="#" class="text-white">Establishment</a></li>
                                    <li class="list-group-item bg-secondary text-white font-weight-bolder"><a href="/sidepages/sce" class="text-white">SCE</a></li>
                                    <li class="list-group-item bg-secondary text-white font-weight-bolder"><a href="#" class="text-white">Bursary</a></li>
                                    <li class="list-group-item bg-secondary text-white font-weight-bolder"><a href="/sidepages/consultancy" class="text-white">Consultancy</a></li>
                                    <li class="list-group-item bg-secondary text-white font-weight-bolder"><a href="/sidepages/procurement" class="text-white">Procurement</a></li>
                                    <li class="list-group-item bg-secondary text-white font-weight-bolder"><a href="/sidepages/remedial" class="text-white">Remedial</a></li>
                                    <li class="list-group-item bg-secondary text-white font-weight-bolder"><a href="#" class="text-white">Library</a></li>
                                    <li class="list-group-item bg-secondary text-white font-weight-bolder"><a href="#" class="text-white">SEWIS/IT Programme</a></li>
              </ul>
          </div>
      </div>
      </div><br>

        <div class="container bg-white"><br>
          <h4>Intervention Projects</h4>
          <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                      <img src="/sce/project.jpg" class="mx-auto d-block w-100" style="height: 300px width: 100px" alt="NITDA Project">
                      <div class="carousel-caption text-center font-weight-bold">
                        <h2 class="display-5 text-primary">NITDA ICT Center</h2>
                      </div>
                </div>
                <div class="carousel-item">
                  <img src="/sce/project1.jpg" class="mx-auto d-block w-100" style="height: 300px width: 100px" alt="NITDA Project">
                  <div class="carousel-caption text-center font-weight-bolder">
                    <h2 class="display-5 text-primary">NITDA ICT Center</h2>
                  </div>
                </div>
            </div><br>
              
    

            <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
        </div>

      </div>

  @endsection