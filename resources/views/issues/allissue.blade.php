@extends('layouts.template')
@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('issues.allissue') }}">Issue Tracking</a>
        </li>
        <li class="breadcrumb-item active">Request</li>
    </ol>
</nav>

<!-- Hoverable Table rows -->
<div class="col-12">
    <div class="card">
        <h5 class="card-header">Request List</h5>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('issues.create') }}"> New Request</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Request No</th>
                    <th>Reported By</th>
                    <th>Report Date</th>
                    <th>Site</th>
                    <th>Asset</th>
                    <th>Category</th>
                    <th>Fault Description</th>
                    <th>Status</th>
                    <th>User</th>
                    <th width="150px">Action</th>
                </tr>
            </thead>
            @foreach ($issues as $i)
            <tbody class="table-border-bottom-0">
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $i->request_no }}</td>
                    <td>{{ $i->reported_by }}</td>
                    <td>{{ $i->create_date->format('M d, Y') }}</td> <!-- 0000-00-00, in result  -0001 -->
                    <td>{{ $i->site->site_name ?? " " }}</td>
                    <td>{{ $i->equipment->asset_hostname ?? " " }} - {{ $i->equipment->asset_type ?? " " }}</td>
                    <td>{{ $i->reqcategory->req_category ?? " " }}</td>
                    <td>{{ $i->fault_description }}</td>
                    <td>{{ $i->status->status_label ?? " " }}</td> <!-- badges -->
                    <td>{{ $i->created_by }}</td>
                    <td>
                        <form action="{{ route('issues.destroy',$i->id) }}" method="POST">
                            <a class="menu-icon tf-icons bx bx-edit" href="{{ route('issues.edit',$i->id) }}"></a>                
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