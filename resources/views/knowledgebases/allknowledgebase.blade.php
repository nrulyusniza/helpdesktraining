@extends('layouts.template')
@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('knowledgebases.allknowledgebase') }}">User & Asset Management</a>
        </li>
        <li class="breadcrumb-item active">Knowledge Base</li>
    </ol>
</nav>

<!-- Hoverable Table rows -->
<div class="col-12">
    <div class="nav-align-top mb-4">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <button
                    type="button"
                    class="nav-link active"
                    role="tab"
                    data-bs-toggle="tab"
                    data-bs-target="#navs-top-home"
                    aria-controls="navs-top-home"
                    aria-selected="true">
                    Knowledge Base
                </button>
            </li>
            <li class="nav-item">
                <button
                    type="button"
                    class="nav-link"
                    role="tab"
                    data-bs-toggle="tab"
                    data-bs-target="#navs-top-profile"
                    aria-controls="navs-top-profile"
                    aria-selected="false">
                    Category
                </button>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('knowledgebases.create') }}"> New Knowledge Base</a>
                </div>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Category</th>
                            <th>Tittle</th>
                            <th>Content</th>
                            <th width="150px">Action</th>
                            </tr>
                        </thead>
                        @foreach ($knowledgebases as $b)
                        <tbody class="table-border-bottom-0">
                            <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $b->kb_category }}</td>
                            <td>{{ $b->kb_title }}</td>
                            <td>{{ $b->kb_content }}</td>
                            <td>
                                <form action="{{ route('knowledgebases.destroy',$b->id) }}" method="POST">
                                    <a class="menu-icon tf-icons bx bx-edit" href="{{ route('knowledgebases.edit',$b->id) }}"></a>                
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
            <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                <!--- BLANK -->                
            </div>
        </div>
    </div>
</div>
<!--/ Hoverable Table rows -->

@endsection