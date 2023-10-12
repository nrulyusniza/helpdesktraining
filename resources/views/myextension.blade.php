@extends('layouts.template')
@section('content')



<div class="col-12">
  <div class="row">
    <!-- 1 -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="card">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <img
                src="{{ asset('pages/assets/img/icons/unicons/chart-success.png') }}"
                alt="chart success"
                class="rounded" />
            </div>
            <div class="dropdown">
                <button
                class="btn p-0"
                type="button"
                id="cardOpt3"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                <a class="dropdown-item" href="{{ route('types.allrequesttype') }}">View More</a>
                </div>
            </div>
          </div>
          <span class="fw-medium d-block mb-1">Request Type</span>
          <h3 class="card-title mb-2">qwe</h3>
        </div>
      </div>
    </div>

    <!-- 2 -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="card">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <img
                src="{{ asset('pages/assets/img/icons/unicons/chart-success.png') }}"
                alt="chart success"
                class="rounded" />
            </div>
            <div class="dropdown">
                <button
                class="btn p-0"
                type="button"
                id="cardOpt3"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                <a class="dropdown-item" href="{{ route('reqcategorys.allreqcategory') }}">View More</a>
                </div>
            </div>
          </div>
          <span class="fw-medium d-block mb-1">Request Category</span>
          <h3 class="card-title mb-2">qwe</h3>
        </div>
      </div>
    </div>

    <!-- 3 -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="card">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <img
                src="{{ asset('pages/assets/img/icons/unicons/chart-success.png') }}"
                alt="chart success"
                class="rounded" />
            </div>
            <div class="dropdown">
                <button
                class="btn p-0"
                type="button"
                id="cardOpt3"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                <a class="dropdown-item" href="{{ route('severitys.allseverity') }}">View More</a>
                </div>
            </div>
          </div>
          <span class="fw-medium d-block mb-1">Severity</span>
          <h3 class="card-title mb-2">qwe</h3>
        </div>
      </div>
    </div>

    <!-- 4 -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="card">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <img
                src="{{ asset('pages/assets/img/icons/unicons/chart-success.png') }}"
                alt="chart success"
                class="rounded" />
            </div>
            <div class="dropdown">
                <button
                class="btn p-0"
                type="button"
                id="cardOpt3"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                <a class="dropdown-item" href="{{ route('statuss.allstatus') }}">View More</a>
                </div>
            </div>
          </div>
          <span class="fw-medium d-block mb-1">Status</span>
          <h3 class="card-title mb-2">qwe</h3>
        </div>
      </div>
    </div>

    <!-- 5 -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="card">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <img
                src="{{ asset('pages/assets/img/icons/unicons/chart-success.png') }}"
                alt="chart success"
                class="rounded" />
            </div>
            <div class="dropdown">
                <button
                class="btn p-0"
                type="button"
                id="cardOpt3"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                <a class="dropdown-item" href="{{ route('reactions.allresponsetype') }}">View More</a>
                </div>
            </div>
          </div>
          <span class="fw-medium d-block mb-1">Response Type</span>
          <h3 class="card-title mb-2">qwe</h3>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection