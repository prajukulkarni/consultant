@extends('layouts.master')   
@section ('content')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<div class="content-wrapper">
   <section class="content">
      <div class="row">
        <div class="col-md-12">
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">
                    <center>View Client</center>
                <br><br>
                  @foreach($registration as $val)  
                  <div class="col-md-3">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                        <input type="text" value="{{$val->cname}}" name="cname" class="form-control" required placeholder="Name">
                      </div>
                  </div>
               
                          <div class="col-md-3">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                           <input type="text" value="{{$val->filenumber}}" name="filenumber" class="form-control" placeholder="File number" value="" required> 
                      </div>
                  </div>

                      <input type="hidden" value="{{$val->id}}" name="id">
                  <div class="col-md-3">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                           <input type="text" value="{{$val->pan}}" name="pan" class="form-control" placeholder="P.A.N" value="" required> 
                      </div>
                  </div>
                    <div class="col-md-3">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                      <input type="text" value="{{$val->address}}" name="address" class="form-control" placeholder="Address" value=""> 
                      </div>
                  </div>
                     <br><BR><BR>
                    <div class="col-md-3">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                      <input type="text" value="{{$val->itpassword}}" name="itpassword" class="form-control" placeholder="I.T Password" value=""> 
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                      <input type="text" value="{{$val->gstloginid}}" name="gstloginid" class="form-control" placeholder="G.S.T login id" value=""> 
                      </div>
                  </div>
                 
                
                  <div class="col-md-3">
                      <div class="input-group">
                         
                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                           <input type="text" value="{{$val->gstpassword}}" name="gstpassword" class="form-control" placeholder="G.S.T Password" value=""> 
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                      <input type="text" value="{{$val->gstnumber}}" name="gstnumber" class="form-control" placeholder="G.S.T Number" value=""> 
                      </div>
                  </div>
                   <br><br><br>
                    <div class="col-md-3">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                      <input type="text" value="{{$val->aadharnumber}}" name="aadharnumber" class="form-control" placeholder="Aadhar number" value=""> 
                      </div>
                  </div>
                 
                    <div class="col-md-3">
                      <div class="input-group">
                      
                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                           <input type="text" value="{{$val->dob}}" name="dob" class="form-control" placeholder="Date of birth" value="" required> 
                      </div>
                  </div>
                
                  <div class="col-md-3">
                      <div class="input-group">
                         
                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                           <input type="text" value="{{$val->mobileno}}" name="mobileno" class="form-control" placeholder="Mobile number" value=""> 
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                      <input type="text" value="{{$val->emailid}}" name="emailid" class="form-control" placeholder="Email_id" value=""> 
                      </div>
                  </div>
                   <br><br><br>
                   <div class="col-md-3">
                      <div class="input-group">
                        
                      <div class="checkbox">
        <!-- <label class="checkbox-inline" style="margin-left: -15%; font-weight: bold; font-size: 18px;">Select Services :-<br> -->
                   <h4>Select Services :</h4>
                   <label class="checkbox-inline">
                   <input type="checkbox" id="inlineCheckbox1" name="checkbox[]" value="option1"> Incometax
                   </label><br>
                   <label class="checkbox-inline">
                   <input type="checkbox" id="inlineCheckbox2" name="checkbox[]" value="option2"> GST
                   </label><br>
                   <label class="checkbox-inline">
                   <input type="checkbox" id="inlineCheckbox3" name="checkbox[]" value="option3"> Finance
                   </label> <br>
                   <label class="checkbox-inline">
                   <input type="checkbox" id="inlineCheckbox3" name="checkbox[]" value="option4"> Accounting
                 </label>
                 </div>
                      </div>
                  </div>

                    <br><br><br>
                  </div>
                <div class="checkbox">
                  </div>
                  <div class="box-footer">
                   
                     <button type="submit" class="btn btn-danger margin"><i class="fa fa-ban"> </i><a href="{{url('fetchclient')}}" style="color:white">Cancel</a> </button>
                </div>
                 @endforeach
              <!-- </form> -->
                </div>
              </div>
        </div>
      </div>
    </section>
  </div>
@endsection
  
