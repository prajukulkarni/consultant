
@extends('layouts.master')   
@section ('content')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
           <div class="box">
    <section class="content-header">
      <h1>
         Client Details
        <!-- <small>User Master</small> -->
      </h1>
      <ol class="breadcrumb">
        <!-- <li><a href="#"><i class="fa fa-briefcase"></i> Client List </a></li> -->
        <!-- <li><a href="#"> User </a></li> -->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
           <div class="box" style="overflow-x: scroll;">
            <div class="box-header">
              <h3 class="box-title">Client List</h3>
              <p align="right">
                <a href="{{url('addclientdetails')}}">
                <button type="submit" class="btn bg-primary margin"><i class="fa fa-plus"></i>  Add  </button></a>
              </p>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
             <!--  <div class="box-footer">
                <button type="submit" class="btn bg-purple margin"><i class="fa fa-upload"></i>  Copy  </button>
                <button type="submit" class="btn bg-olive margin"><i class="fa fa-print"> </i>  Print </button>
                <button type="submit" class="btn btn-warning margin"><i class="fa fa-file-excel-o"> </i>  Excel </button>
                 <button type="submit" class="btn bg-navy margin"><i class="fa fa-eye-slash"> </i>  Show/Hide Column </button>
              </div> -->
               <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Sr.No</th>
                    <th> Name </th>
                    <th> File number </th>
                    <th> P.A.N </th>
                    <th> Address </th>
                    <th> I.T Password </th>
                    <th> G.S.T login id </th>
                      <th>  G.S.T Password </th>
                     <th> G.S.T Number </th>
                      <th>Aadhar number</th>
                       <th>Date of birth</th>
                        <th>Mobile number</th>
                       <th> Email_id</th>
                       
                    <th colspan="2">Action</th>
                  </tr>
                  <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                     
                      <th>View</th>
                    <th>edit</th>
                    <th>delete</th>
                     @foreach($registration as $val)
                  </tr>
                </thead>
                <tbody>
                
                <tr>
                  <td>{{$val->id}}</td>
                  <td>{{$val->cname}}</td>
                  <td>{{$val->filenumber}}</td>
                  <td>{{$val->pan}}</td>
                  <td>{{$val->address}}</td>
                  <td>{{$val->itpassword}}</td>
                  <td>{{$val->gstloginid}}</td>
                   <td>{{$val->gstpassword}}</td>
                  <td>{{$val->gstnumber}}</td>
                   <td>{{$val->aadharnumber}}</td>
                    <td>{{$val->dob}}</td>
                    
<!--                      
 -->                      <td>{{$val->mobileno}}</td>
                       <td>{{$val->emailid}}</td>
                    
                     <td>
                    <a href="{{url('viewclient')}}"><b><i class="fa fa-eye-slash"></i></b></a>
                  </td>   
                  <td>
                    <a href="{{url('/edit/'.$val->id)}}"><b><small class="label label-warning"><i class="fa fa-edit"></i></small></b></a>
                  </td>

                  <td>
                     <small class="label label-danger">
                      <a href="{{url('/delete/'.$val->id)}}" onclick="return getconfirm()">
                      <i class="fa fa-trash"></i>
                    </a>
                    </small>
                  </td>
                  @endforeach
                </tr>
                            
                </tbody>
                <tfoot>
                <!--  <tr>
                   <th>Sr.No</th>
                    <th> Name </th>
                    <th> Contact </th>
                    <th> Email </th>
                    <th> Password </th>
                     <th> Time </th>
                    <th colspan="2">Action</th>
                  </tr> -->
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  </div>
<script type="text/javascript">
                  function getconfirm() {                 
                    return confirm("Do you want to delete record?");
                  }
                </script>
<div class="content-wrapper">
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