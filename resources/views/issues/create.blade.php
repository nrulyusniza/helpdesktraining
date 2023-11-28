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

<div class="col-12">
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">New Request</h5>

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
            <form action="{{ route('issues.store') }}" method="POST">
            @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Request Type</label>
                    <div class="col-sm-10">
                        <select id="defaultSelect" class="form-select" name="kb_category">
                            <option selected disabled>-- Select Request Type--</option>
                                @foreach(App\Type::all() as $type)
                                <option value="{{$type->id}}">{{$type->request_type}}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-message">Site</label>
                    <div class="col-sm-10">
                        <select id="defaultSelect" class="form-select" name="site_name">
                            <option selected disabled>-- Select Site --</option>
                                @foreach(App\Site::all() as $site)
                                <option value="{{$site->id}}">{{$site->site_name}}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-message">Reported By</label>
                    <div class="col-sm-10">
                        <select id="defaultSelect" class="form-select" name="kb_category">
                            <option selected disabled>-- Select Name --</option>
                                @foreach(App\Reportingperson::all() as $reportingperson)
                                <option value="{{$reportingperson->id}}">{{$reportingperson->rptpers_name}}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Phone Number (Reported By)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="rptpers_mobile">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-message">Category</label>
                    <div class="col-sm-10">
                        <select id="defaultSelect" class="form-select" name="kb_category">
                            <option selected disabled>-- Select Category--</option>
                                @foreach(App\Reqcategory::all() as $reqcategory)
                                <option value="{{$reqcategory->id}}">{{$reqcategory->req_category}}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-message">Equipment</label>
                    <div class="col-sm-10">
                        <select id="defaultSelect" class="form-select" name="kb_category">
                            <option selected disabled>-- Select Equipment--</option>
                                @foreach(App\Equipment::all() as $equipment)
                                <option value="{{$equipment->id}}">{{$equipment->asset_hostname}} - {{$equipment->asset_type}}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="created_date">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Attachment</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" name="attachment" id="formFile" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Fault Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" type="text" name="fault_description"></textarea>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-secondary" href="{{ route('issues.index') }}">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection