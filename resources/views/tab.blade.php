@extends('layouts.template')

@section('content')
<div class="nav-align-top mb-4">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                        <a
                          type="button"
                          class="nav-link {{ request()->is('tab1') ? 'active' : null }}"
                          href="{{ url ('tab1') }}"
                          role="tab"

                          data-bs-target="#navs-top-home"
                          aria-controls="navs-top-home"
                          aria-selected="true">
                          Home
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          type="button"
                          class="nav-link {{ request()->is('tab2') ? 'active' : null }}"
                          href="{{ url ('tab2') }}"
                          role="tab"

                          data-bs-target="#navs-top-profile"
                          aria-controls="navs-top-profile"
                          aria-selected="true">
                          Profile
                        </a>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane {{ request()->is('tab1') ? 'active' : null }}" id="{{ url ('tab1') }}" role="tabpanel">
                        <p>
                          Icing pastry pudding oat cake. Lemon drops cotton candy caramels cake caramels sesame snaps
                          powder. Bear claw candy topping.
                        </p>
                      </div>
                      <div class="tab-pane {{ request()->is('tab2') ? 'active' : null }}" id="{{ url ('tab2') }}" role="tabpanel">
                        <p>
                          Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice
                          cream. Gummies halvah tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream
                          cheesecake fruitcake.
                        </p>
                        <p class="mb-0">
                          Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah
                          cotton candy liquorice caramels.
                        </p>
                      </div>
                    </div>
                  </div>
                  @endsection