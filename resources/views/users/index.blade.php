@extends('layouts.app')
@section('content')

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
        </div>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Users Management</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Users Management</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="f as fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
          @if ($message = Session::get('success'))
          <div class="alert alert-success">
            {{ $message }}
          </div>
          @endif
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 20%">
                        User Name
                    </th>
                    <th style="width: 30%">
                      Email
                    </th>
                    <th>
                      Roles
                    </th>
                    <th style="width: 49%" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($data as $key => $user)
                <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $user->name }}
                    <br/>
                    <small>
                      {{ $user->created_at }}
                </small></td>
                  <td>{{ $user->email }}</td>
                  <td>
                    @if(!empty($user->getRoleNames()))
                      @foreach($user->getRoleNames() as $v)
                         <label class="badge bg-success">{{ $v }}</label>
                      @endforeach
                    @endif
                  </td>
                    <td class="project-actions text-right">
                      <a class="btn btn-primary btn-sm" href="{{ route('users.show',$user->id) }}"><i class="fas fa-folder">
                      </i> Show</a>
                      <a class="btn btn-info btn-sm" href="{{ route('users.edit',$user->id) }}"><i class="fas fa-pencil-alt">
                      </i> Edit</a>
                      {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style'=>'display:inline']) !!}
                      <button type="submit" class="btn btn-danger btn-sm">
                          <i class="fas fa-trash"></i> Delete
                      </button>
                  {!! Form::close() !!}
                  
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  @endsection
  <!-- /.content -->
