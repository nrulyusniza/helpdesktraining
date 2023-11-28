@extends('layouts.template')
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Edit : </h5>

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
            
            @csrf
            @method('PUT')
                
            <!-- Basic Layout & Basic with Icons -->
            <div class="row">
                <!-- 1st Layout -->
                <div class="col-xxl">
                    <div class="card mb-4 shadow-none bg-transparent border border-primary">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Equipment Info : Readonly Data - </h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Site</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" name="site_name" value="{{ $equipment->site->site_name }}" readonly>
                                    </div>
                                </div>                       
                            </form>
                        </div>
                    </div>
                </div>

                    <form action="{{ route('equipments.allassetupdate',$equipment->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- 2nd Layout -->
                        <div class="col-xxl">
                            <div class="card mb-4 shadow-none bg-transparent border border-warning">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Create Equipment Log : Update Data</h5>
                                </div>
                                <div class="card-body">
                                    <form>
                                    
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Comments</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="" value="">
                                    </div>
                                </div>                                
                                <div class="row justify-content-end">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <a class="btn btn-secondary" href="{{ route('equipments.allasset') }}">Cancel</a>
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
                        <h5 class="card-header">Equipment Log</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>location</th>                                
                                </tr>
                            </thead>
                            @foreach($equipment->equipmentlogs as $log)
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $log->id }}</td>
                                    <td>{{ $log->asset_newlocation }}</td>                              
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