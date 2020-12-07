@extends('layouts.admin')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>BillInfo</h1>
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
                    <th>payment Id</th>
                    <th>electricity Bill</th>
                    <th>Utility Bill</th>
                    <th>Shop Wise Rent</th>
                    <th>Manage</th>
                  </tr>
                  </thead>
                  <tbody>
                  	@foreach($allbillshow as $key =>$orna)
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{$orna->paymentid}}</td>
                    <td>{{$orna->electricitybill}}</td>
                    <td>{{$orna->utilitybill}}</td>
                    <td>{{$orna->shopWiseRent}}</td>
                    <td>
                    	<a href="{{url('admin/bill/edit/'.$orna->id)}}">
                    		<i class="fas fa-pencil-alt"></i>
                    	</a>
                        <a href="{{url('admin/bill/delete/'.$orna->id)}}">
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