@extends('layouts.app')
@section('content')

        
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
                <div class="col-md-4">
      <div class="form-group">
        <h1 class="m-0 text-danger mt-3">New Quote Type</h1>
      </div>
      </div><!-- /.col -->
                <div class="col-md-8">
        <ol class="breadcrumb float-sm-right">
          <li class="">
                <a class="btn btn-app text-success" id="save" href="javascript:void(0)">
                    <i class="fas fa-save"></i>  Save
                </a>
            </li><li class="d-none d-md-inline">
                <a class="btn btn-app text-warning" id="save_close" href="javascript:void(0)">
                    <i class="fas fa-file-archive"></i>  Save &amp; Close
                </a>
            </li><li class="">
                <a class="btn btn-app text-primary" id="save_new" href="javascript:void(0)">
                    <i class="fas fa-file"></i>  Save &amp; New
                </a>
            </li><li class="">
                <a class="btn btn-app text-info" id="save_copy" href="javascript:void(0)">
                    <i class="fas fa-copy"></i>  Save as Copy
                </a>
            </li><li class="">
                <a class="btn btn-app text-danger" id="close" href="{{route('quotetypes.index')}}">
                    <i class="fas fa-times-circle"></i>  Close
                </a>
            </li>             </ol>
      </div><!-- /.col -->
      
    </div><!-- /.row -->
    <div class="row">
      <div class="col-sm-12"> </div><!-- /.col-sm-12 -->
    </div><!-- /.row -->
    
  </div><!-- /.container-fluid -->
</div>
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quote Type Information</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Quote Type Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Quote Type">
                    </div>
                    <div class="form-group">
                      <label> Published</label>
                      
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input" value="1" checked="checked" type="radio" id="published1" name="published">
                        <label for="published1" class="custom-control-label"> Publish</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input" value="0" type="radio" id="published2" name="published">
                        <label for="published2" class="custom-control-label"> Un-Publish</label>
                      </div>
                    </div>
                    
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    
                    <div class="form-group">
                      <label> Quote Description</label>
                        <textarea style="width: 100%; height: 140px;">                    
                        </textarea>
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
               
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
              
            </div>
            <!-- /.card -->
    
            
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
     
@endsection