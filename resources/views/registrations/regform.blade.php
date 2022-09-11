<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Registration Form || ND Programme</title>
</head>
<body>
    <div class="container p-5">
        <form action="ParttimeformController@store" method="POST">
        @csrf
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-4">
                        {{Form::label('lname', 'Last Name')}}
                        {{Form::text('lname', '', ['class' => 'form-control', 'placeholder' => 'Last Name'])}}
                    </div><br>
                    <div class="col-md-4">
                        {{Form::label('fname', 'First Name')}}
                        {{Form::text('fname', '', ['class' => 'form-control', 'placeholder' => 'First Name'])}}
                    </div><br>
                    <div class="col-md-4">
                        {{Form::label('oname', 'Other Name')}}
                        {{Form::text('oname', '', ['class' => 'form-control', 'placeholder' => 'Other Name'])}}
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        {{Form::label('dob', 'Date of Birth')}}
                        {{Form::text('dob', '', ['class' => 'form-control', 'placeholder' => 'Date of Birth'])}}
                    </div><hr>
                    <div class="col-md-6">
                        <label><h6>Gender</h6></label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="">Select Gender</option>
                                <option value="male">Male</option><hr>
                                <option value="female">Female</option><hr>
                            </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            {{Form::label('town', 'Home Town')}}
                            {{Form::text('town', '', ['class' => 'form-control', 'placeholder' => 'Home Town'])}}
                        </div>
                        <div class="col-4">
                          {{Form::label('lga', 'LGA')}}
                          {{Form::text('lga', '', ['class' => 'form-control', 'placeholder' => 'LGA'])}}
                        </div>
                        <div class="col-4">
                            {{Form::label('state', 'State')}}
                            {{Form::text('state', '', ['class' => 'form-control', 'placeholder' => 'State'])}}
                        </div>
                    </div>
                </div>
            </div>

                    <h5>Contact Information</h5><hr>
                    <div class="form-group">
                        {{Form::label('caddress', 'Contact Address')}}
                        {{Form::text('caddress', '', ['class' => 'form-control', 'placeholder' => 'Contact Address'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('paddress', 'Permanent Address')}}
                        {{Form::text('paddress', '', ['class' => 'form-control', 'placeholder' => 'Permanent Address'])}}
                    </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-4">
                        {{Form::label('ptown', 'Home Town')}}
                        {{Form::text('pptown', '', ['class' => 'form-control', 'placeholder' => 'Home Town'])}}
                    </div>
                    <div class="col-4">
                      {{Form::label('plga', 'LGA')}}
                      {{Form::text('plga', '', ['class' => 'form-control', 'placeholder' => 'LGA'])}}
                    </div>
                    <div class="col-4">
                        {{Form::label('pstate', 'State')}}
                        {{Form::text('pstate', '', ['class' => 'form-control', 'placeholder' => 'State'])}}
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        {{Form::label('phone1', 'Phone Number 1')}}
                        {{Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Phone Number 1'])}}
                    </div>
                    <div class="form-group col-md-4">
                        {{Form::label('phone2', 'Phone Number 2')}}
                        {{Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Phone Number 2'])}}
                    </div>

                    <div class="col-md-4">
                        {{Form::label('email', 'eMail')}}
                        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'eMail'])}}
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div>
                        <h5>Courses Available</h5>
                        <div class="col-md-8">
                          
                              <select name="course" id="course" class="form-control">
                                  <option value="">Select Course</option>
                                  <option value="Accountancy">Accountancy</option><hr>
                                  <option value="Computer Engineering Technology">Computer Engineering Technology</option><hr>
                                  <option value="Computer Science">Computer Science</option><hr>
                                  <option value="Electrical/Electronics Engineering Technology">Electrical/Electronics Engineering Technology</option><hr>
                                  <option value="Electrical Installations">Electrical Installations</option><hr>
                                  <option value="Fabrication & Wielding">Fabrication & Wielding</option><hr>
                                  <option value="Production and Manufacturing Engineering Technology">Production and Manufacturing Engineering Technology</option><hr>
                                  <option value="Human Resource Management">Human Resource Management</option><hr>
                                  <option value="Electrical Installations">Electrical Installations</option><hr>
                                  <option value="Information and Communication Technology">Information and Communication Technology</option><hr>
                                  <option value="Industrial Safety & Environmental Engineering Technology">Industrial Safety & Environmental Engineering Technology</option><hr>
                                  <option value="Instrumentation & Control Technology">Instrumentation & Control Technology</option><hr>
                                  <option value="Maritime Management Technology">Maritime Management Technology</option><hr>
                                  <option value="Transport Logistic Technology">Transport Logistic Technology</option><hr>
                                  <option value="Petroleum Marketing">Petroleum Marketing</option><hr>
                                  <option value="Business Manageent">Business Management</option><hr>
                                  <option value="Library and Information Science">Library and Information Science</option><hr>
                                  <option value="Safety and Security Management in Oil & Gas">Safety and Security Management in Oil & Gas</option><hr>
                                  <option value="Office and Information Management Technology">Office and Information Management Technology</option><hr>
                                  <option value="Public Administration">Public Administration</option><hr>
                                  <option value="Mass Communication">Mass Communication</option><hr>                            
                              </select>
                        </div>
                      </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-4">
                        {{Form::label('exnumber', 'Exam Number')}}
                        {{Form::text('exnumber', '', ['class' => 'form-control', 'placeholder' => 'Examination Number'])}}
                    </div><br>

                    <div class="col-md-4">
                        {{Form::label('exyear', 'Examination Year')}}
                        {{Form::text('exyear', '', ['class' => 'form-control', 'placeholder' => 'Examination Year'])}}
                    </div><br>
                      <div class="col-md-4">
                          <label><h6>Examination Type</h6></label>
                              <select name="exname" id="exname" class="form-control">
                                  <option value="">Select Type</option>
                                  <option value="SSCE-WAEC">WASSCE</option><hr>
                                  <option value="SSCE-NECO">SSCE NECO</option><hr>
                                  <option value="GCE-WAEC">WAEC GCE</option><hr>
                                  <option value="GCE-NECO">NECO GCE</option><hr>
                                  <option value="NABTEB">NABTEB</option><hr>
                              </select>
                        </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-row">
                    <div class="col-4">
                          {{Form::label('subject1', 'Subject & Grade')}}
                          {{Form::text('subject1', '', ['class' => 'form-control', 'placeholder' => 'Subject = Grade'])}}
                    </div>
                    <div class="col-2">
                      
                    </div>
                    <div class="col-6">

                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-4">
                          {{Form::label('', '')}}
                          {{Form::text('subject2', '', ['class' => 'form-control', 'placeholder' => 'Subject = Grade'])}}
                    </div>
                    <div class="col-2">
                      
                    </div>
                    <div class="col-6">

                    </div>
                  </div>

                  <div class="form-row">
                    <div class="col-4">
                          {{Form::label('', '')}}
                          {{Form::text('subject3', '', ['class' => 'form-control', 'placeholder' => 'Subject = Grade'])}}
                    </div>
                    <div class="col-2">
                      
                    </div>
                    <div class="col-6">

                    </div>
                  </div>

                  <div class="form-row">
                    <div class="col-4">
                          {{Form::label('', '')}}
                          {{Form::text('subject4', '', ['class' => 'form-control', 'placeholder' => 'Subject = Grade'])}}
                    </div>
                    <div class="col-2">
                      
                    </div>
                    <div class="col-6">

                    </div>
                  </div>

                  <div class="form-row">
                    <div class="col-4">
                          {{Form::label('', '')}}
                          {{Form::text('subject5', '', ['class' => 'form-control', 'placeholder' => 'Subject = Grade'])}}
                    </div>
                    <div class="col-2">
                      
                    </div>
                    <div class="col-6">

                    </div>
                  </div>
            </div>

            <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                  <label class="form-check-label" for="invalidCheck2">
                    Agree to terms and conditions
                  </label>
                </div>
            </div>

            {{Form::submit('Submit', ['class' => 'btn btn-primary my-2'])}}
            {!! Form::close() !!}

        </form>
    </div>
    
</body>
</html>