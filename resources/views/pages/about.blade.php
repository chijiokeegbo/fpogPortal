    @extends('inc.nav')
    <div class="container my-0 bg-dark text-white">
        <h1 class="text-center">{{$title}}</h1>
    </div>
            
                  
            @section('content')
            <div class="container" style="margin-top: 5%">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card text-white bg-secondary mb-3" style="max-width: 18rem">
                            <div class="card-header">The Preamble</div>
                                <div class="card-body">
                                    <p class="card-text">The Federal Polytechnic of Oil & Gas, Bonny is established by
                                        law to train technically skilled manpower for the oil and gas 
                                        industries and other related industries in Nigeria and the West 
                                        African Sub-Region. The Polytechnic is endowed with the capacity to run both 
                                        regular and part-time programmes</p>
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
                        <div class="card text-white bg-secondary mb-3" style="max-width: 18rem">
                            <div class="card-header">Our Mission</div>
                                <div class="card-body">
                                    <p class="card-text">To meet the middle-level manpower development of the Oil and Gas 
                                    sector in Nigeria and the West Africa sub-region in line with the 
                                    industry needs, community aspiration as well as forging partnership 
                                    with world class institutions.</p>
                                </div>
                            
                        </div>                 
                        
                    </div>
                    
                        
                    <div class="col-sm-6 border-top-0">
                        <h4 class="text-center">News Flash</h4>
                        <div class="jumbotron-fluid">
                        <h1 class="text-center">{{$title}}</h1>
                        </div>
                    </div>
                    
                    <div class="col-sm-3">
                        <ul class="list-group">
                            <h4 class="text-center">Schools</h4>
                            <li class="list-group-item bg-secondary text-white font-weight-bolder"><a href="#" class="text-white">Engineering Technology</a></li>
                            <li class="list-group-item bg-secondary text-white font-weight-bolder"><a href="#" class="text-white">Applied Sciences</a></li>
                            <li class="list-group-item bg-secondary text-white font-weight-bolder"><a href="#" class="text-white">Environment Technology</a></li>
                            <li class="list-group-item bg-secondary text-white font-weight-bolder"><a href="#" class="text-white">General Studies</a></li>
                            <li class="list-group-item bg-secondary text-white font-weight-bolder"><a href="#" class="text-white">Business Studies</a></li>
                            <li class="list-group-item bg-secondary text-white font-weight-bolder"><a href="#" class="text-white">Continuing Education</a></li>
                        </ul><br>
                        <ul class="list-group">
                            <h4 class="text-center font-weight-bold">Units</h4>
                            <li class="list-group-item bg-secondary font-weight-bolder"><a href="#" class="text-white">Establishment</a></li>
                            <li class="list-group-item bg-secondary text-white font-weight-bolder"><a href="#" class="text-white">Admission</a></li>
                            <li class="list-group-item bg-secondary text-white font-weight-bolder"><a href="#" class="text-white">Bursary</a></li>
                            <li class="list-group-item bg-secondary text-white font-weight-bolder"><a href="#" class="text-white">Consultancy</a></li>
                            <li class="list-group-item bg-secondary text-white font-weight-bolder"><a href="#" class="text-white">Procurement</a></li>
                            <li class="list-group-item bg-secondary text-white font-weight-bolder"><a href="#" class="text-white">Protocol</a></li>
                            <li class="list-group-item bg-secondary text-white font-weight-bolder"><a href="#" class="text-white">Library</a></li>
                            <li class="list-group-item bg-secondary text-white font-weight-bolder"><a href="#" class="text-white">SEWIS/IT Programme</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endsection
