@extends('layouts.app')
@section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
                        <div class="col-md-4">
              <div class="form-group">
                <h1 class="m-0 text-danger mt-3">New Quote</h1>
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
                        <a class="btn btn-app text-danger" id="close" href="{{route('quotes.index')}}">
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
            <div class="row">
              <!-- left column -->
              <div class="col-md-6">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                  </div>
                  <!-- /.card-header -->
                    <div class="card-body">
                      <div class="form-group">
                        <label>Leader</label>
                        <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">H.E Alabama</option>
                          <option>H.E Alaska</option>
                          <option>H.E California</option>
                          <option>H.E Delaware</option>
                          <option>H.E Tennessee</option>
                          <option>H.E Texas</option>
                          <option>Washington</option>
                        </select>
                      </div>
                      <!-- /.form-group -->
                      <div class="form-group">
                        <label>Program </label>
                        <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">H.E Alabama</option>
                          <option>H.E Alaska</option>
                          <option>H.E California</option>
                          <option>H.E Delaware</option>
                          <option>H.E Tennessee</option>
                          <option>H.E Texas</option>
                          <option>Washington</option>
                        </select>
                      </div>
                      <!-- /.form-group -->
                      <div class="form-group">
                        <label>Quote Type</label>
                        <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">H.E Alabama</option>
                          <option>H.E Alaska</option>
                          <option>H.E California</option>
                          <option>H.E Delaware</option>
                          <option>H.E Tennessee</option>
                          <option>H.E Texas</option>
                          <option>Washington</option>
                        </select>
                      </div>
                      <!-- /.form-group -->
                      
                    </div>
                    <!-- /.card-body -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                  </div>
                  <!-- /.card-header -->
                    <div class="card-body">
                      <div class="form-group">
                        <label>Meeting Type</label>
                        <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">H.E Alabama</option>
                          <option>H.E Alaska</option>
                          <option>H.E California</option>
                          <option>H.E Delaware</option>
                          <option>H.E Tennessee</option>
                          <option>H.E Texas</option>
                          <option>Washington</option>
                        </select>
                      </div>
                      <!-- /.form-group -->
                      <div class="form-group">
                        <label>Quote Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Program Title">
                      </div>
                      <!-- /.form-group -->
                      <div class="form-group">
                        <label>Quote Date</label>
                        <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                          <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime">
                          <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                       </div>
                      <!-- /.form-group -->
                      
                    </div>
                    <!-- /.card-body -->
                </div>
              </div>
            </div>
    
            <div class="row">
              <!-- left column -->
              <div class="col-md-6">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Quote Description</h3>
                  </div>
                  <!-- /.card-header -->
                    <div class="card-body">
                      <div class="form-group">
                        <textarea style="width: 100%; height: 140px;">                    
                        </textarea>
                      </div>
                      <div class="form-group">
                        <label> Published</label>
                        
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" value="1" checked="checked" type="radio" id="published1" name="published">
                          <label for="published1" class="custom-control-label"> Publish</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" value="0" type="radio" id="published2" name="published">
                          <label for="published2" class="custom-control-label">   Un-Publish</label>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                
              </div>
              <div class="col-md-6">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Documents & Images</h3>
                  </div>
                  <!-- /.card-header -->
                    <div class="card-body">
                      <div class="form-group">
                        <label>Quote file</label>
                        <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Program Title">
                      </div>
                      <div class="form-group">
                        <label>Quote Video</label>
                        <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Program Title">
                      </div>
                    </div>
                    <!-- /.card-body -->
                </div>
              </div>
            </div>
    
            <!-- SELECT2 EXAMPLE -->
            
            <!-- /.card -->
    
            
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->

@endsection