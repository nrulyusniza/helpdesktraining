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

<div class="col-lg-12 mb-2 order-0">
  <div class="row">
    <!-- Total Ticket -->
    <div class="col-xl-7 col-lg-7">
      <div class="card h-100">
        <div class="card-header">
          <div class="card-title mb-0">
            <h5 class="m-0 me-2">Total Ticket by Months</h5>
          </div>
        </div>
        <div class="card-body px-0">
          <div class="tab-content p-0">
            <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
              <!--
              <div class="d-flex p-4 pt-3">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="../assets/img/icons/unicons/wallet.png" alt="User" />
                </div>
                <div>
                  <small class="text-muted d-block">Total Balance</small>
                  <div class="d-flex align-items-center">
                    <h6 class="mb-0 me-1">$459.10</h6>
                    <small class="text-success fw-medium">
                      <i class="bx bx-chevron-up"></i>
                      42.9%
                    </small>
                  </div>
                </div>
              </div> -->
              <div id="incomeChart"></div>
              <div class="d-flex justify-content-center pt-4 gap-2">
                <div class="flex-shrink-0">
                  <div id="expensesOfWeek"></div>
                </div>
                <div>
                  <!--
                  <p class="mb-n1 mt-1">Expenses This Week</p>
                  <small class="text-muted">$39 less than last week</small> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Category -->
    <div class="col-xl-5 col-lg-5">
      <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between pb-0">
          <div class="card-title mb-0">
            <h5 class="m-0 me-2">Category</h5>
            <!--
            <small class="text-muted">42.82k Total Sales</small> -->
          </div>
          <!--
          <div class="dropdown">
            <button
              class="btn p-0"
              type="button"
              id="orederStatistics"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
              <a class="dropdown-item" href="javascript:void(0);">Select All</a>
              <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
              <a class="dropdown-item" href="javascript:void(0);">Share</a>
            </div>
          </div> -->
        </div>
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="d-flex flex-column align-items-center gap-1">
              <h2 class="mb-2">8,258</h2>
              <span>Total Orders</span>
            </div>
            <div id="orderStatisticsChart"></div>
          </div>
          <ul class="p-0 m-0">
            <li class="d-flex mb-4 pb-1">
              <div class="avatar flex-shrink-0 me-3">
                <span class="avatar-initial rounded bg-label-primary"
                  ><i class="bx bx-mobile-alt"></i
                ></span>
              </div>
              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Electronic</h6>
                  <small class="text-muted">Mobile, Earbuds, TV</small>
                </div>
                <div class="user-progress">
                  <small class="fw-medium">82.5k</small>
                </div>
              </div>
            </li>
            <li class="d-flex mb-4 pb-1">
              <div class="avatar flex-shrink-0 me-3">
                <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
              </div>
              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Fashion</h6>
                  <small class="text-muted">T-shirt, Jeans, Shoes</small>
                </div>
                <div class="user-progress">
                  <small class="fw-medium">23.8k</small>
                </div>
              </div>
            </li>
            <li class="d-flex mb-4 pb-1">
              <div class="avatar flex-shrink-0 me-3">
                <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
              </div>
              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Decor</h6>
                  <small class="text-muted">Fine Art, Dining</small>
                </div>
                <div class="user-progress">
                  <small class="fw-medium">849k</small>
                </div>
              </div>
            </li>
            <li class="d-flex">
              <div class="avatar flex-shrink-0 me-3">
                <span class="avatar-initial rounded bg-label-secondary"
                  ><i class="bx bx-football"></i
                ></span>
              </div>
              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Sports</h6>
                  <small class="text-muted">Football, Cricket Kit</small>
                </div>
                <div class="user-progress">
                  <small class="fw-medium">99</small>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection