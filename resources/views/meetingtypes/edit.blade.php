<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>New Participation Type</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">New Participation Type</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Participation Type Infomation</h3>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Participation Type</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Leader Title">
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
                <label> Participation Description</label>
                
                  <textarea style="width: 100%; height: 140px;">                    
                  </textarea>
               
              </div>
              
              
            </div>
            <!-- /.col -->
          </div>
         
          <!-- /.row -->
        </div>
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