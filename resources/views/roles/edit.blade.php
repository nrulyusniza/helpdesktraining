@extends('layouts.template')
@section('content')

<h4 class="py-3 mb-4"><span class="text-muted fw-light">User & Asset Management/ User Groups/</span> Edit User Group</h4>

<div class="col-12">
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Edit User Group</h5>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
        <div class="card-body">
            <form action="{{ route('roles.update',$role->id) }}" method="POST">
            @csrf
            @method('PUT')
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="role_name" value="{{ $role->role_name }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="role_desc" value="{{ $role->role_desc }}">
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a class="btn btn-secondary" href="{{ route('roles.index') }}">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection