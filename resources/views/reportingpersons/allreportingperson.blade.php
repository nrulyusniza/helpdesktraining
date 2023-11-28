@extends('layouts.template')
@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('reportingpersons.allreportingperson') }}">User & Asset Management</a>
        </li>
        <li class="breadcrumb-item active">Reporting Person</li>
    </ol>
</nav>

<!-- Hoverable Table rows -->
<div class="col-12">
    <div class="card">
        <h5 class="card-header">Reporting Person List</h5>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('reportingpersons.create') }}"> New Reporting Person</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Site</th>
                    <th width="150px">Action</th>
                </tr>
            </thead>
            @foreach ($reportingpersons as $rp)
            <tbody class="table-border-bottom-0">
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $rp->rptpers_name }}</td>
                    <td>{{ $rp->rptpers_mobile }}</td>
                    <td>{{ $rp->site_id }}</td>
                    <td>
                        <form action="{{ route('reportingpersons.destroy',$rp->id) }}" method="POST">
                            <a class="menu-icon tf-icons bx bx-edit" href="{{ route('reportingpersons.edit',$rp->id) }}"></a>                
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

@if (Session::has('message'))
            <script>
              toastr.options = {
                "progressBar" : true,
                "closeButton" : true,
              }
              toastr.success("{{ Session::get('message') }}"), 'Success!',{timeOut:12000});
              toastr.info("{{ Session::get('message') }}");
              toastr.warning("{{ Session::get('message') }}");
              toastr.error("{{ Session::get('message') }}");
              </script>
              @endif
@endsection