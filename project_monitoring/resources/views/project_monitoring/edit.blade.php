@extends('templates.app')

@section('title', 'Edit Project Monitoring')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-titles">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12 align-self-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 d-flex align-items-center">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}" class="link"><i class="mdi mdi-home fs-5"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Project Monitoring
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit Project Monitoring
                            </li>
                        </ol>
                    </nav>
                    <h1 class="mb-0 fw-bold">Edit Project Monitoring</h1>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================= -->
        <!-- Container fluid  -->
        <!-- ============================================================= -->
        <div class="container-fluid">
            <!-- ============================================================= -->
            <!-- Start Page Content -->
            <!-- ============================================================= -->
            <!-- Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Project Monitoring</h4>
                            <h5 class="card-subtitle mb-3 pb-3 border-bottom">
                                silahkan input untuk mengedit project monitoring
                            </h5>
                            <form autocomplete="off" method="POST"
                                action="{{ route('project_monitoring.update', $project_monitoring) }}">
                                @csrf
                                @method('put')
                                <div class="input-group mb-3">
                                    <span class="input-group-text border border-info bg-"><i data-feather="briefcase"
                                            class="feather-sm fill-white"></i></span>
                                    <input type="text" class="form-control border border-info" placeholder="Nama Project"
                                        aria-label="Nama Project" aria-describedby="basic-addon1" name="name"
                                        value="{{ $project_monitoring->name }}">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text border border-info bg-"><i data-feather="users"
                                            class="feather-sm fill-white"></i></span>
                                    <input type="text" class="form-control border border-info" placeholder="Client"
                                        aria-label="Client" aria-describedby="basic-addon1" name="client"
                                        value="{{ $project_monitoring->client }}">
                                </div>
                                <label for="">Project Leader</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text border border-info bg-"><i data-feather="command"
                                            class="feather-sm fill-white"></i></span>
                                    <select name="id_leader" class="form-control border border-info">
                                        <option value="">Pilih Project Leader</option>
                                        @foreach ($project_leaders as $project_leader)
                                            <option value="{{ $project_leader->id }}"
                                                {{ $project_monitoring->id_leader == $project_leader->id ? 'selected' : '' }}>
                                                {{ $project_leader->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label for="">Start Date</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text border border-info bg-"><i data-feather="calendar"
                                            class="feather-sm fill-white"></i></span>
                                    <input type="date" class="form-control border border-info" placeholder="Start Date"
                                        aria-label="Start Date" aria-describedby="basic-addon1" name="start_date"
                                        value="{{ date('Y-m-d', strtotime($project_monitoring->start_date)) }}">
                                </div>
                                <label for="">End Date</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text border border-info bg-"><i data-feather="calendar"
                                            class="feather-sm fill-white"></i></span>
                                    <input type="date" class="form-control border border-info" placeholder="End Date"
                                        aria-label="End Date" aria-describedby="basic-addon1" name="end_date"
                                        value="{{ date('Y-m-d', strtotime($project_monitoring->end_date)) }}">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text border border-info bg-"><i data-feather="zap"
                                            class="feather-sm fill-white"></i></span>
                                    <input type="number" class="form-control border border-info" placeholder="Progress"
                                        aria-label="Progress" aria-describedby="basic-addon1" name="progress"
                                        value="{{ $project_monitoring->progress }}">
                                </div>
                                <div class="d-md-flex align-items-center justify-content-end">
                                    <div class="mt-3 mt-md-0 ms-auto">
                                        <a href="{{ route('project_monitoring.index') }}"
                                            class="btn btn-danger font-weight-medium rounded-pill px-4 ">
                                            <div class="d-flex align-items-center">
                                                <i data-feather="x-circle"
                                                    class="feather feather-save feather-sm text-white fill-white me-2"></i>
                                                Gak Jadi
                                            </div>
                                        </a>
                                        <button type="submit" class="btn btn-info font-weight-medium rounded-pill px-4 ">
                                            <div class="d-flex align-items-center">
                                                <i data-feather="send"
                                                    class="feather feather-save feather-sm text-white fill-white me-2"></i>
                                                Simpan
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->
            <!-- ============================================================= -->
            <!-- End PAge Content -->
            <!-- ============================================================= -->
        </div>
        <!-- ============================================================= -->
        <!-- End Container fluid  -->
        <!-- ============================================================= -->
        <!-- ============================================================= -->

    @endsection
