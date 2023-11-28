@extends('layouts.template')
@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('ticstatuss.allticstatus') }}">Extension</a>
        </li>
        <li class="breadcrumb-item active">Status</li>
    </ol>
</nav>

<!-- Hoverable Table rows -->
<div class="col-12">
    <div class="card">
        <h5 class="card-header">Status List</h5>
        <div class="pull-right">
            <a class="btn btn-primary" href=""> New Status</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Status</th>
                    <th width="150px">Action</th>
                </tr>
            </thead>
            @foreach ($ticstatuss as $ts)
            <tbody class="table-border-bottom-0">
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $ts->ticstatus_label }}</td>
                    <td>
                        <form action="{{ route('statuss.destroy',$ts->id) }}" method="POST">
                            <a class="menu-icon tf-icons bx bx-edit" href="{{ route('statuss.edit',$ts->id) }}"></a>                
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