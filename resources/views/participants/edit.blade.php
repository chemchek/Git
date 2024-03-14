@extends('layouts.app')
@section('content')

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>New Participant Hoster</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">New Participant Hoster</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label>Participant Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Participant Title">
              </div>
              <div class="form-group">
                <label>Participant Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Participant Name">
              </div>
              <div class="form-group">
                <label>Participant Role</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Participant Role">
              </div>
              <div class="form-group">
                <label>Participant Unit</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Leader Adress">
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
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Participant Photo</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
               
                <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Program Title">
              </div>
              </div>
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

        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Participant Address</h3>
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
                  <label>District</label>
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
                  <label>Village</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Program Title">
                </div>
                <div class="form-group">
                  <label>House No.</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Program Title">
                </div>



              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Province</label>
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
                  <label>Commune</label>
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
                  <label>Street No</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Program Title">
                </div>


              </div>
            </div>
              
            </div>
            <!-- /.card-header -->
          </div>
          
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">CONTACT INFORMATION</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Phone 1</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Program Title">
                  </div>
                  <div class="form-group">
                    <label>Phone 3</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Program Title">
                  </div>
                  <div class="form-group">
                    <label>Website</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Program Title">
                  </div>
                  <div class="form-group">
                    <label>Twitter</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Program Title">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Phone 2</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Program Title">
                  </div>
                  
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Program Title">
                  </div>
                  
                  <div class="form-group">
                    <label>Facebook Page</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Program Title">
                  </div>
                  
                  <div class="form-group">
                    <label>Linkin</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Program Title">
                  </div>
                </div>
              </div>

              



              

            </div>
          </div>



        </div>

      </div>

      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        <!-- /.card-body -->
        <div class="card-footer">
          
          <button class="btn btn-primary">Submit</button>
        </div>
      </div>
      <!-- /.card -->

      
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->

@endsection