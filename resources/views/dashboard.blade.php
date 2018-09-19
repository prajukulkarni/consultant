
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
            <div class="box-header">
              <h5 class="box-title" style="margin-left: -%; font-weight: bold; font-size: 18px;">Client List</h5>
              <p align="right">
                <a href="{{url('addclientdetails')}}">
                <button type="submit" class="btn bg-primary margin"><i class="fa fa-plus"></i>  Add  </button></a>
              </p>
            </div>
            <div class="box-body">              
               <table id="example1" class="table table-bordered table-striped">
               <thead>
                  <tr>
                    <th>Sr.No</th>
                    <th> Client Name </th>
                   <th colspan="2"  style="text-align: center;">Action</th>
                  </tr>
                 <tr>
                    <th></th>
                    <th></th>
                    <th>Edit</th>
                    <th>delete</th>
                    @foreach($registration as $val)
                 </tr>
                </thead>
               <tbody>
                <tr>
                  <td>{{$val->id}}</td>
                  <td>{{$val->cname}}</td>
                  <td>
                    <small class="label label-warning">
                      <a href="{{url('/edit/'.$val->id)}}">
                        <i class="fa fa-edit"></i>
                      </a>
                    </small>
                   </td>
                   <td> 
                    <small class="label label-danger">
                      <a href="{{url('/delete/'.$val->id)}}" onclick="return getconfirm()">
                      <i class="fa fa-trash"></i>
                    </a>
                    </small>
                  </td>
                  
                </tr>
               @endforeach
               </tr>
                </tbody>
                 <tfoot>
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
