@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>New Leader</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">New Leader</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
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
                                <label>Leader Title</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Leader Title" />
                            </div>
                            <div class="form-group">
                                <label>Leader Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Leader Name" />
                            </div>
                            <div class="form-group">
                                <label>Leader DOB</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input"
                                        data-target="#reservationdate" />
                                    <div class="input-group-append" data-target="#reservationdate"
                                        data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Leader Role</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Leader Role" />
                            </div>
                            <div class="form-group">
                                <label>Leader Role Date In</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input"
                                        data-target="#reservationdate" />
                                    <div class="input-group-append" data-target="#reservationdate"
                                        data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /.card-header -->
                    </div>

                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Leader Address</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- left column -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Province</label>
                                        <select class="form-control select2" style="width: 100%">
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
                                        <select class="form-control select2" style="width: 100%">
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
                                        <label>House No.</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter House No." />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>District</label>
                                        <select class="form-control select2" style="width: 100%">
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
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Street No" />
                                    </div>
                                    <div class="form-group">
                                        <label>Village</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Village" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                    </div>

                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Leader Contact</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- left column -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone 1</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="text" class="form-control"
                                                data-inputmask='"mask": "(999) 999-9999"' data-mask>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="form-group">
                                        <label>Phone 3</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="text" class="form-control"
                                                data-inputmask='"mask": "(999) 999-9999"' data-mask>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="form-group">
                                        <label>Website</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Website" />
                                    </div>
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Twitter" />
                                    </div>
                                    <div class="form-group">
                                        <label>Telegram</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Telegram" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone 2</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="text" class="form-control"
                                                data-inputmask='"mask": "(999) 999-9999"' data-mask>
                                        </div>
                                        <!-- /.input group -->
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Email" />
                                    </div>

                                    <div class="form-group">
                                        <label>Facebook Page</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Facebook Page" />
                                    </div>

                                    <div class="form-group">
                                        <label>Linkin</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Linkin" />
                                    </div>
                                    <div class="form-group">
                                        <label>Youtube</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Youtube" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label> Published</label>

                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" value="1" checked="checked" type="radio"
                                id="published1" name="published" />
                            <label for="published1" class="custom-control-label">
                                Publish</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" value="0" type="radio" id="published2"
                                name="published" />
                            <label for="published2" class="custom-control-label">
                                Un-Publish</label>
                        </div>
                    </div>
                </div>

                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Leader Unit Address</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- left column -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Province</label>
                                        <select class="form-control select2" style="width: 100%">
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
                                        <select class="form-control select2" style="width: 100%">
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
                                        <label>House No.</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter House No." />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>District</label>
                                        <select class="form-control select2" style="width: 100%">
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
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Street No" />
                                    </div>
                                    <div class="form-group">
                                        <label>Village</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Village" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                    </div>

                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Leader unit Contact</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- left column -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone 1</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="text" class="form-control"
                                                data-inputmask='"mask": "(999) 999-9999"' data-mask>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="form-group">
                                        <label>Phone 3</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="text" class="form-control"
                                                data-inputmask='"mask": "(999) 999-9999"' data-mask>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="form-group">
                                        <label>Website</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Website" />
                                    </div>
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Twitter" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone 2</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="text" class="form-control"
                                                data-inputmask='"mask": "(999) 999-9999"' data-mask>
                                        </div>
                                        <!-- /.input group -->
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Twitter" />
                                    </div>

                                    <div class="form-group">
                                        <label>Facebook Page</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Facebook Page" />
                                    </div>

                                    <div class="form-group">
                                        <label>Linkin</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter Linkin" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Leader Description</h3>
                        </div>
                        <div class="card-body">
                            <textarea style="width: 100%"> </textarea>
                        </div>
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Leader Photo</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="file" class="form-control" id="exampleInputEmail1"
                                    placeholder="Upload Photo" />
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
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()


            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

        });
    </script>
@endsection
