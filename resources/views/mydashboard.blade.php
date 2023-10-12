@extends('layouts.template')
@section('content')

<div class="col-lg-12 mb-4 order-0">
  <div class="card">
    <div class="d-flex align-items-end row">
      <div class="col-sm-7">
        <div class="card-body">
          <h5 class="card-title text-primary">Welcome back, {{ Auth::user()->fullname }}! 🎉</h5>
          <p class="mb-4">
          You are logged in!
          </p>                       
        </div>
      </div>
      <div class="col-sm-5 text-center text-sm-left">
        <div class="card-body pb-0 px-0 px-md-4">
          <img
            src="{{ asset('pages/assets/img/illustrations/man-with-laptop-light.png') }}"
            height="140"
            alt="View Badge User"
            data-app-dark-img="{{ asset('pages/illustrations/man-with-laptop-dark.png') }}"
            data-app-light-img="{{ asset('pages/illustrations/man-with-laptop-light.png') }}" />
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-lg-12 mb-4 order-0">
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
          </div>
          <span class="fw-medium d-block mb-1">Knowledge Base</span>
          <h3 class="card-title mb-2">{{ $knowledgebases }}</h3>
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
          </div>
          <span class="fw-medium d-block mb-1">Users</span>
          <h3 class="card-title mb-2">{{ $users }}</h3>
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
          </div>
          <span class="fw-medium d-block mb-1">Sites</span>
          <h3 class="card-title mb-2">{{ $sites }}</h3>
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
          </div>
          <span class="fw-medium d-block mb-1">Assets</span>
          <h3 class="card-title mb-2">{{ $equipments }}</h3>
        </div>
      </div>
    </div>

  </div>
</div>


<div class="col-lg-12 mb-4 order-0">
  <div class="row">
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
          </div>
          <span class="fw-medium d-block mb-1">Tickets</span>
          <h3 class="card-title mb-2">$12,628</h3>
        </div>
      </div>
    </div>

    <!-- 6 -->
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
          </div>
          <span class="fw-medium d-block mb-1">Open</span>
          <h3 class="card-title mb-2">$12,628</h3>
        </div>
      </div>
    </div>

    <!-- 7 -->
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
          </div>
          <span class="fw-medium d-block mb-1">Closed</span>
          <h3 class="card-title mb-2">$12,628</h3>
        </div>
      </div>
    </div>

    <!-- 8 -->
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
          </div>
          <span class="fw-medium d-block mb-1">KIV</span>
          <h3 class="card-title mb-2">$12,628</h3>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection