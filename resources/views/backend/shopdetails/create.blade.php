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
                <h3 class="card-title">SHOP DETAILS</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{url('/admin/shopdetails/submit')}}" method="post" enctype="multipart/form-data">
               @csrf
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputPassword1">ShopId</label>
                    <input type="text" name="shopid" class="form-control" id="exampleInputPassword1" placeholder="Enter Shop Id">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">ShopName</label>
                    <input type="text" name="shopName" class="form-control" id="exampleInputPassword1" placeholder="Enter Shop Name">
                  </div>
                    <input type="hidden" name="id" value="id">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Floor No</label>
                    <input type="text" name="floorNo" class="form-control" id="exampleInputEmail1" placeholder="Enter Floor No">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Block No</label>
                    <input type="text" name="blockNo" class="form-control" id="exampleInputEmail1" placeholder="Enter Block No">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter Price">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Area</label>
                    <input type="text" name="area" class="form-control" id="exampleInputEmail1" placeholder="Enter Area">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Enter Address">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="image" class="form-control" >
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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