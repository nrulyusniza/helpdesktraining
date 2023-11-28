@extends('layouts.template')
@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('tickets.allconsumable') }}">ticket Tracking</a>
        </li>
        <li class="breadcrumb-item active">Consumable</li>
    </ol>
</nav>

<div class="col-12">
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Edit : {{ $ticket->ticket_no }}</h5>

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
            <!-- <form action="{{ route('tickets.allconsumableupdate',$ticket->id) }}" method="POST">
            @csrf
            @method('PUT') -->
                
            <!-- Basic Layout & Basic with Icons -->
            <div class="row">
                <!-- 1st Layout -->
                <div class="col-xxl">
                    <div class="card mb-4 shadow-none bg-transparent border border-primary">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Ticket Info : Readonly Data - {{ $ticket->request_no }}</h5>
                        </div>
                        <div class="card-body">
                            <form>
                            <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Site</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="site_name" value="{{ $ticket->issue->site->site_name }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Reported By</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="reported_by" value="{{ $ticket->issue->reported_by}}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Phone Number (Reported By)</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="phone_no" value="{{ $ticket->issue->phone_no }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Category</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="req_category" value="{{ $ticket->issue->reqcategory->req_category }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Equipment</label>
                            <div class="col-sm-10">   
                                <select id="defaultSelect" class="form-select" name="asset_hostname">
                                    <option selected disabled>-- Select Equipment --</option>
                                        @foreach(App\Equipment::all() as $equipment)
                                        <option value="{{ $equipment->asset_hostname .'-'. $equipment->asset_type }}">{{ $equipment->asset_hostname }} - {{ $equipment->asset_type }}</option>
                                        @endforeach
                                </select>                    
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Date</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="create_date" value="{{ $ticket->issue->create_date->format('M d, Y') }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Attachment</label>
                            <div class="col-sm-10">
                            <input type="file" class="form-control" name="attachment" value="{{ $ticket->issue->attachment }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Fault Description</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="fault_description" value="{{ $ticket->issue->fault_description }}" readonly>
                            </div>
                        </div>
                            </form>
                        </div>
                    </div>
                </div>

                    <form action="{{ route('tickets.allconsumableupdate',$ticket->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- 2nd Layout -->
                        <div class="col-xxl">
                            <div class="card mb-4 shadow-none bg-transparent border border-warning">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Create Ticket Log : Update Data</h5>
                                </div>
                                <div class="card-body">
                                    <form>
                                    <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Ticket Status</label>
                                    <div class="col-sm-10">
                                    <select id="defaultSelect" class="form-select" name="ticstatus_label">
                                            <option selected disabled>-- Select Status --</option>
                                                @foreach(App\Ticstatus::all() as $ticstatus)
                                                <option value="{{ $ticstatus->ticstatus_label }}">{{ $ticstatus->ticstatus_label }}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Comments</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Response Date</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Response Time</label>
                                    <div class="col-sm-10">
                                        <input type="time" class="form-control" name="" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Response Type</label>
                                    <div class="col-sm-10">
                                    <select id="defaultSelect" class="form-select" name="response_type">
                                            <option selected disabled>-- Select Status --</option>
                                                @foreach(App\Reaction::all() as $reaction)
                                                <option value="{{ $reaction->response_type }}">{{ $reaction->response_type }}</option>
                                                @endforeach
                                        </select> 
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Attachment</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="" value="">
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <a class="btn btn-secondary" href="{{ route('tickets.allconsumable') }}">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                        <!-- </div>
                    </div>
                </div> -->

                <div class="divider">
                    <div class="divider-text">
                        <i class="bx bx-cube-alt"></i>
                    </div>
                </div>

                <!-- Hoverable Table rows -->
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Ticket Log</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th>Update By</th>
                                    <th>Response Type</th>
                                    <th>Response Date</th>
                                    <th>Response Time</th>
                                    <th>Attachment</th>
                                    
                                </tr>
                            </thead>
                            @foreach($ticket->ticketLogs as $log)
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $log->id }}</td>
                                    <td>{{ $log->ticstatus->ticstatus_label }}</td>
                                    <td>{{ $log->date }}</td>
                                    <td>{{ $log->description }}</td>
                                    <td>{{ $log->update_by }}</td>
                                    <td>{{ $log->reaction->response_type }}</td>
                                    <td>{{ $log->response_date }}</td>
                                    <td>{{ $log->response_time }}</td>
                                    <td>{{ $log->attachment }}</td>                                    
                                </tr>
                            </tbody>
                            @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                <!--/ Hoverable Table rows -->


            </div>
            <!-- </form> -->
        </div>

        
    </div>
</div>

@endsection