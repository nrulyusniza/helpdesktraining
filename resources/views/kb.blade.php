@extends('layouts.template')

@section('content')
<div class="nav-align-top mb-4">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                        <a
                          type="button"
                          class="nav-link {{ request()->is('knowledgebaseall') ? 'active' : null }}"
                          href="{{ url ('knowledgebaseall') }}"
                          role="tab"

                          data-bs-target="#navs-top-home"
                          aria-controls="navs-top-home"
                          aria-selected="true">
                          Knowledge Base
                        </a>
                      </li>
                      <li class="nav-item">
                        <a
                          type="button"
                          class="nav-link {{ request()->is('categoryall') ? 'active' : null }}"
                          href="{{ url ('categoryall') }}"
                          role="tab"

                          data-bs-target="#navs-top-profile"
                          aria-controls="navs-top-profile"
                          aria-selected="true">
                          Category
                        </a>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane {{ request()->is('knowledgebaseall') ? 'active' : null }}" id="{{ url ('knowledgebaseall') }}" role="tabpanel">
                      <p>yada yada</p>
                      </div>
                      <div class="tab-pane {{ request()->is('categoryall') ? 'active' : null }}" id="{{ url ('categoryall') }}" role="tabpanel">
                        <p>
                          Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice
                          cream. Gummies halvah tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream
                          cheesecake fruitcake.
                        </p>
                      </div>
                    </div>
                  </div>
                  @endsection