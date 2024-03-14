@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
                      <div class="col-md-4">
            <div class="form-group">
              <h1 class="m-0 text-danger mt-3">Leader</h1>
            </div>
            </div><!-- /.col -->
                      <div class="col-md-8">
              <ol class="breadcrumb float-sm-right">
                <li class="">
                      <a class="btn btn-app text-success" id="" href="{{route('leaders.create')}}">
                          <i class="fas  fa-plus-square"></i>  New
                      </a>
                  </li><li class="">
                      <a class="btn btn-app text-danger" id="multi_delete" href="javascript:void(0)">
                          <i class="fas fa-trash"></i>  Delete
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
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Advaced Search</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill"
                            href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home"
                            aria-selected="true">Leader</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill"
                            href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile"
                            aria-selected="false">Leader Address & Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill"
                            href="#custom-content-below-messages" role="tab"
                            aria-controls="custom-content-below-messages" aria-selected="false">Leader Unit Address &
                            Contact</a>
                    </li>
                </ul>
                <div class="tab-content" id="custom-content-below-tabContent">
                    <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel"
                        aria-labelledby="custom-content-below-home-tab">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Leader Title</label>
                                    <input type="text" class="form-control" placeholder="Enter Leader Title"
                                        value="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Leader Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Leader Name"
                                        value="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Leader Role</label>
                                    <input type="text" class="form-control" placeholder="Enter Leader Role"
                                        value="">
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel"
                        aria-labelledby="custom-content-below-profile-tab">
                        <div class="row">
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Province</label>
                                    <select class="form-control select2" style="width: 100%;">
                                      <option selected="selected">Alabama</option>
                                      <option>Alaska</option>
                                      <option>California</option>
                                      <option>Delaware</option>
                                      <option>Tennessee</option>
                                      <option>Texas</option>
                                      <option>Washington</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>District</label>
                                    <select class="form-control select2" style="width: 100%;">
                                      <option selected="selected">Alabama</option>
                                      <option>Alaska</option>
                                      <option>California</option>
                                      <option>Delaware</option>
                                      <option>Tennessee</option>
                                      <option>Texas</option>
                                      <option>Washington</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Commune</label>
                                    <select class="form-control select2" style="width: 100%;">
                                      <option selected="selected">Alabama</option>
                                      <option>Alaska</option>
                                      <option>California</option>
                                      <option>Delaware</option>
                                      <option>Tennessee</option>
                                      <option>Texas</option>
                                      <option>Washington</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" placeholder="Enter Participant Unit"
                                        value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Website</label>
                                    <input type="text" class="form-control" placeholder="Enter Participant Country"
                                        value="">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Telegram</label>
                                    <input type="text" class="form-control" placeholder="Enter Participant Name"
                                        value="">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="Enter Participant Role"
                                        value="">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Facebook Page</label>
                                    <input type="text" class="form-control" placeholder="Enter Participant Role"
                                        value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel"
                        aria-labelledby="custom-content-below-messages-tab">
                        <div class="row">
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Province</label>
                                    <select class="form-control select2" style="width: 100%;">
                                      <option selected="selected">Alabama</option>
                                      <option>Alaska</option>
                                      <option>California</option>
                                      <option>Delaware</option>
                                      <option>Tennessee</option>
                                      <option>Texas</option>
                                      <option>Washington</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>District</label>
                                    <select class="form-control select2" style="width: 100%;">
                                      <option selected="selected">Alabama</option>
                                      <option>Alaska</option>
                                      <option>California</option>
                                      <option>Delaware</option>
                                      <option>Tennessee</option>
                                      <option>Texas</option>
                                      <option>Washington</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Commune</label>
                                    <select class="form-control select2" style="width: 100%;">
                                      <option selected="selected">Alabama</option>
                                      <option>Alaska</option>
                                      <option>California</option>
                                      <option>Delaware</option>
                                      <option>Tennessee</option>
                                      <option>Texas</option>
                                      <option>Washington</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" placeholder="Enter Participant Unit"
                                        value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Website</label>
                                    <input type="text" class="form-control" placeholder="Enter Participant Country"
                                        value="">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Telegram</label>
                                    <input type="text" class="form-control" placeholder="Enter Participant Name"
                                        value="">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="Enter Participant Role"
                                        value="">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label>Facebook Page</label>
                                    <input type="text" class="form-control" placeholder="Enter Participant Role"
                                        value="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- /.card -->

            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Search</button>
            </div>
          </div>
        
        <!-- /.card -->
        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                                Digital Strategist
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b>Nicole Pearson</b></h2>
                                        <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist /
                                            Coffee Lover </p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-building"></i></span> Address: Demo Street 123,
                                                Demo City 04312, NJ</li>
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="{{ asset('backend/dist/img/user1-128x128.jpg') }}" alt="user-avatar"
                                            class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                        <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="fas fa-user"></i> View Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                                Digital Strategist
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b>Nicole Pearson</b></h2>
                                        <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist /
                                            Coffee Lover </p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-building"></i></span> Address: Demo Street 123,
                                                Demo City 04312, NJ</li>
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="{{ asset('backend/img/user2-160x160.jpg') }}" alt="user-avatar"
                                            class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                        <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="fas fa-user"></i> View Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                                Digital Strategist
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b>Nicole Pearson</b></h2>
                                        <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist /
                                            Coffee Lover </p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-building"></i></span> Address: Demo Street 123,
                                                Demo City 04312, NJ</li>
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="{{ asset('backend/dist/img/user1-128x128.jpg') }}" alt="user-avatar"
                                            class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                        <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="fas fa-user"></i> View Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                                Digital Strategist
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b>Nicole Pearson</b></h2>
                                        <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist /
                                            Coffee Lover </p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-building"></i></span> Address: Demo Street 123,
                                                Demo City 04312, NJ</li>
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" alt="user-avatar"
                                            class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                        <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="fas fa-user"></i> View Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                                Digital Strategist
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b>Nicole Pearson</b></h2>
                                        <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist /
                                            Coffee Lover </p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="{{ asset('backend/dist/img/user1-128x128.jpg') }}" alt="user-avatar"
                                            class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                        <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="fas fa-user"></i> View Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                                Digital Strategist
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b>Nicole Pearson</b></h2>
                                        <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist /
                                            Coffee Lover </p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-building"></i></span> Address: Demo Street 123,
                                                Demo City 04312, NJ</li>
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="{{ asset('backend/dist/img/user1-128x128.jpg') }}" alt="user-avatar"
                                            class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                        <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="fas fa-user"></i> View Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                                Digital Strategist
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b>Nicole Pearson</b></h2>
                                        <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist /
                                            Coffee Lover </p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-building"></i></span> Address: Demo Street 123,
                                                Demo City 04312, NJ</li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="{{ asset('backend/dist/img/user1-128x128.jpg') }}" alt="user-avatar"
                                            class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                        <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="fas fa-user"></i> View Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                                Digital Strategist
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b>Nicole Pearson</b></h2>
                                        <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist /
                                            Coffee Lover </p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-building"></i></span> Address: Demo Street 123,
                                                Demo City 04312, NJ</li>
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="{{ asset('backend/dist/img/user1-128x128.jpg') }}" alt="user-avatar"
                                            class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                        <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="fas fa-user"></i> View Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                                Digital Strategist
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b>Nicole Pearson</b></h2>
                                        <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist /
                                            Coffee Lover </p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-building"></i></span> Address: Demo Street 123,
                                                Demo City 04312, NJ</li>
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" alt="user-avatar"
                                            class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                        <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="fas fa-user"></i> View Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <nav aria-label="Contacts Page Navigation">
                    <ul class="pagination justify-content-center m-0">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                        <li class="page-item"><a class="page-link" href="#">8</a></li>
                    </ul>
                </nav>
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
