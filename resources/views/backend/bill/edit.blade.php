@extends('layouts.admin')
@section('content')


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          <div class="col-md-8">
          <div class="col-sm-6">
           
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
           <div class="col-md-2"></div>
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Bill Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{url('/admin/bill/update')}}"method="post">
               @csrf
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Payment Id</label>
                    <input type="text" name="paymentid" class="form-control" id="exampleInputPassword1" value="{{$data->paymentid}}">
                     <input type="hidden" name="id"  value="{{$data->id}}">
                  </div>
                  <label for="exampleInputPassword1">Electricity Bill</label>
              <input type="text" name="electricitybill" class="form-control" id="exampleInputPassword1" value="{{$data->electricitybill}}">
                   </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Utility Bill</label>
                    <input type="text" name="utilitybill" class="form-control" id="exampleInputEmail1" value="{{$data->utilitybill}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">shop wise Rent</label>
                    <input type="text" name="shopWiseRent" class="form-control" id="exampleInputEmail1" value="{{$data->shopWiseRent}}">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->
            
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection