@extends('Backend.Common.MainLayout')
@push('setTitle')
    Projects - BharatX Technologies.
@endpush

@section('content')
    @include('Backend.Common.successMessagae')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="border-left: 5px solid #7884f1; ">
                    <div class="card-body">
                        <div class="admin-title d-flex justify-content-between px-2">
                            <div class="d-flex admin-title-box">
                                <h2 class="mb-0 pt-3" style="margin-bottom: 0;">{{ $title }}</h2>
                                <div class="breadcrumbs">
                                    <ol class="breadcrumb bg-white ms-3 mb-0 pt-4">
                                        @foreach ($breadcrumbs as $breadcrumb)
                                            <li>
                                                <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['text'] }}</a> 
                                                @if (!$loop->last)
                                                    <span class="me-1"> > </span>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">  
                    <div class="card-header mb-4 d-flex justify-content-between" style="background-color:  #7884f1; border-left: 5px solid #7884f1;">
                        <h5 class="mb-0 text-white">
                            <i class="bi bi-people "></i>
                            <span>Add Projects Details</span>
                        </h5>
                        <a href="{{ route('admin.projects') }}" class="btn btn-outline-light btn-sm" style="font-weight: bold;">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="form-group">
                                        <label for="project_name" class="mb-2">Project Name</label>
                                        <input type="text" class="form-control" id="project_name" name="project_name" required value="{{ old('project_name') }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="client_name" class="mb-2">Client Name</label>
                                    <select class="form-control" name="client">
                                        <option hidden>Select Client</option>
                                        @if (!empty($clientsData))
                                            @foreach ($clientsData as $clients)
                                                <option value="{{ $clients->id }}">{{ $clients->contact_name }}</option>
                                            @endforeach
                                        @else
                                            <option>No Clients</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="technologies" class="mb-2">Technologies</label>
                                        <input type="text" class="form-control" id="technologies" name="technologies" required value="{{ old('technologies') }}">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection