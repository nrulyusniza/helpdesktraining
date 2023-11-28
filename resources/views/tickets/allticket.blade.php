@extends('layouts.template')
@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('tickets.allticket') }}">Extension</a>
        </li>
        <li class="breadcrumb-item active">ket</li>
    </ol>
</nav>

<!-- Hoverable Table rows -->
<div class="col-12">
    <div class="card">
        <h5 class="card-header">ket List</h5>
        <div class="pull-right">
            <a class="btn btn-primary" href=""> New ket</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Request No</th>
                    <th>Ticket No</th>
                    <th>Ticket Type</th>
                    <th>Severity</th>
                    <th>Status</th>
                    <th>Report Received Date</th>
                    <th>Created By</th>
                    <th>Create Date</th>
                    <th>Update By</th>
                    <th>Update Date</th>
                    <th width="150px">Action</th>
                </tr>
            </thead>
            @foreach ($tickets as $tt)
            <tbody class="table-border-bottom-0">
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $tt->issue->request_no }}</td>
                    <td>{{ $tt->ticket_no }}</td>
                    <td>{{ $tt->type->request_type }}</td>
                    <td>{{ $tt->severity->severity_label }}</td>
                    <td>{{ $tt->ticstatus->ticstatus_label }}</td>
                    <td>{{ $tt->report_received }}</td>
                    <td>{{ $tt->user->fullname }}</td>
                    <td>{{ $tt->create_date }}</td>
                    <td>{{ $tt->user->fullname }}</td>
                    <td>{{ $tt->update_date }}</td>
                    <td>
                        <form action="" method="POST">
                            <a class="menu-icon tf-icons bx bx-edit" href=""></a>                
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