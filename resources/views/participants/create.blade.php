@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
                      <div class="col-md-4">
            <div class="form-group">
              <h1 class="m-0 text-danger mt-3">New Participant</h1>
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
                      <a class="btn btn-app text-danger" id="close" href="{{route('participants.index')}}">
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
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Participant Information</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Participant Title</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Participant Title">
                            </div>
                            <div class="form-group">
                                <label>Participant Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Participant Name">
                            </div>
                            <div class="form-group">
                                <label>Participant Role</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Participant Role">
                            </div>
                            <div class="form-group">
                                <label>Participant Unit</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Participant Unit">
                            </div>
                        </div>
                        <!-- /.card-header -->
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Participant Description</h3>
                        </div>
                        <div class="card-body">
                            <textarea style="width: 100%;">

              </textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label> Published</label>

                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" value="1" checked="checked" type="radio"
                                id="published1" name="published">
                            <label for="published1" class="custom-control-label"> Publish</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" value="0" type="radio" id="published2"
                                name="published">
                            <label for="published2" class="custom-control-label"> Un-Publish</label>
                        </div>
                    </div>

                </div>

                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Participant Address and Contact</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- left column -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Counttry</label>
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Philippines</option>
                                            <option>Indonesia</option>
                                            <option>Singapore</option>
                                            <option>Cambodia</option>
                                            <option>Thailand</option>
                                            <option>Brunei</option>
                                            <option>Malaysia</option>
                                            <option>Laos</option>
                                            <option>Myanmar</option>
                                            <option>Vietnam</option>
                                            <option>Timor-Leste</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone 1</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                          </div>
                                          <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" inputmode="text">
                                        </div>
                                        <!-- /.input group -->
                                      </div>
                                    <div class="form-group">
                                        <label>Website</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text"><i class="fas fa-globe"></i></span>
                                            </div>
                                            <input type="email" class="form-control" placeholder="Enter Website">
                                          </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text">@</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone 2</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                          </div>
                                          <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" inputmode="text">
                                        </div>
                                        <!-- /.input group -->
                                      </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                            </div>
                                            <input type="email" class="form-control" placeholder="Email">
                                          </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Facebook Page</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text">@</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>LinkedIn</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text">@</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Address">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-header -->
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Participant Photo</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">

                                <input type="file" class="form-control" id="exampleInputEmail1"
                                    placeholder="Program Title">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
