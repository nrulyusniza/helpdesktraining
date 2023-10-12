@extends('layouts.template')
@section('content')

<h4 class="py-3 mb-4"><span class="text-muted fw-light">User & Asset Management/</span> User Groups</h4>

<!-- Hoverable Table rows -->
<div class="col-12">
    <div class="card">
        <h5 class="card-header">Group List</h5>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('roles.create') }}"> Add New Role</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
            <thead>
                <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th width="150px">Action</th>
                </tr>
            </thead>
            @foreach ($roles as $r)
            <tbody class="table-border-bottom-0">
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $r->role_name }}</td>
                <td>{{ $r->role_desc }}</td>
                <td>
                    <!--
                    <form action="{{ route('roles.destroy',$r->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('roles.edit',$r->id) }}">Edit</a>                
                        @csrf
                        @method('DELETE')                    
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    -->
                    <form action="{{ route('roles.destroy',$r->id) }}" method="POST">
                        <a class="menu-icon tf-icons bx bx-edit" href="{{ route('roles.edit',$r->id) }}"></a>                
                        @csrf
                        @method('DELETE')                    
                        <a type="submit" class="menu-icon tf-icons bx bx-trash" style="color:#ff0000"></a>
                    </form>
                </td>
                </tr>
            </tbody>
            @endforeach
            </table>
        </div>
    </div>
</div>
<!--/ Hoverable Table rows -->

@endsection