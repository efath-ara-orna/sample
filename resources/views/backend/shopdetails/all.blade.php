@extends('layouts.admin')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ShopInfo</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Shop Id</th>
                    <th>Shop Name</th>
                    <th>Floor No</th>
                    <th>Block No</th>
                    <th>Shop Price</th>
                    <th>Shop Area</th>
                    <th>Shop Address</th>
                    <th>Image</th>
                    <th>Manage</th>
                  </tr>
                  </thead>
                  <tbody>
                  	@foreach($allshow as $key =>$orna)
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{$orna->shopid}}</td>
                    <td>{{$orna->shopName}}</td>
                    <td>{{$orna->floorNo}}</td>
                    <td>{{$orna->blockNo}}</td>
                    <td>{{$orna->price}}</td>
                    <td>{{$orna->area}}</td>
                    <td>{{$orna->address}}</td>
                    <td>{{$orna->image}}</td>
                    <td>
                    	<a href="{{url('admin/shopdetails/edit/'.$orna->id)}}">
                    		<i class="fas fa-pencil-alt"></i>
                    	</a>
                        <a href="{{url('admin/shopdetails/delete/'.$orna->id)}}">
                    		<i class="fas fa-trash-alt"></i>
                    	</a>

                    </td>
                  </tr>
                  @endforeach
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection