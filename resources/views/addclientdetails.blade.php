
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
               <center style="margin-left: -1%; font-weight: bold; font-size: 18px;">Add Client Details</center>
                 
                  </h3><br /><br />
                  
                   <form class="login-form" action="{{url('details')}}" method="post" form name="myForm">
                   @csrf
                    
                    
                  <div class="col-md-3">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                        <input type="text" name="cname" class="form-control" required placeholder="Name">
                      </div>
                  </div>
                          <div class="col-md-3">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                           <input type="text" name="filenumber" class="form-control" placeholder="File number" value="" required> 
                      </div>
                  </div>


                  <div class="col-md-3">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                           <input type="text" name="pan" class="form-control" placeholder="P.A.N" value="" required> 
                      </div>
                  </div>
                    <div class="col-md-3">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                      <input type="text" name="address" class="form-control" placeholder="Address" value=""> 
                      </div>
                  </div>
                     <br><BR><BR>
                    <div class="col-md-3">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                      <input type="text" name="itpassword" class="form-control" placeholder="I.T Password" value=""> 
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                      <input type="text" name="gstloginid" class="form-control" placeholder="G.S.T login id" value=""> 
                      </div>
                  </div>
                 
                
                  <div class="col-md-3">
                      <div class="input-group">
                         
                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                           <input type="text" name="gstpassword" class="form-control" placeholder="G.S.T Password" value=""> 
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                      <input type="text" name="gstnumber" class="form-control" placeholder="G.S.T Number" value=""> 
                      </div>
                  </div>
                   <br><br><br>
                    <div class="col-md-3">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                      <input type="text" name="aadharnumber" class="form-control" placeholder="Aadhar number" value=""> 
                      </div>
                  </div>
                 
                    <div class="col-md-3">
                      <div class="input-group">
                      
                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                           <input type="text" name="dob" class="form-control" placeholder="Date of birth" value="" required> 
                      </div>
                  </div>
                
                  <div class="col-md-3">
                      <div class="input-group">
                         
                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                           <input type="text" name="mobileno" class="form-control" placeholder="Mobile number" value=""> 
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                      <input type="text" name="emailid" class="form-control" placeholder="Email_id" value=""> 
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
                    <button type="submit" class="btn bg-primary margin"><i class="fa fa-save">Save</i> 
                       </button>  
                     <button type="submit" class="btn btn-danger margin"><i class="fa fa-ban"> </i><a href="" style="color:white">Cancel</a> </button>
                </div>
              </form>
                </div>
              </div>
        </div>
      </div>
    </section>
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">

     </section>
     </div>
    <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
<div class="control-sidebar-bg"></div>
</div>
@endsection
