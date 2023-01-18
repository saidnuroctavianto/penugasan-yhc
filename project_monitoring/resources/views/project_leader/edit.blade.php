@extends('templates.app')

@section('title', 'Edit Project Leader')

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
                                Project Leader
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit Project Leader
                            </li>
                        </ol>
                    </nav>
                    <h1 class="mb-0 fw-bold">Edit Project Leader</h1>
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
                            <h4 class="card-title">Edit Project Leader</h4>
                            <h5 class="card-subtitle mb-3 pb-3 border-bottom">
                                silahkan input untuk mengedit project leader
                            </h5>
                            <form autocomplete="off" method="POST"
                                action="{{ route('project_leader.update', $project_leader) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="input-group mb-3">
                                    <span class="input-group-text border border-info bg-"><i data-feather="user"
                                            class="feather-sm fill-white"></i></span>
                                    <input type="text" class="form-control border border-info" placeholder="Nama"
                                        aria-label="Nama" aria-describedby="basic-addon1" name="name"
                                        value="{{ $project_leader->name }}">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text border border-info bg-"><i data-feather="mail"
                                            class="feather-sm fill-white"></i></span>
                                    <input type="text" class="form-control border border-info" placeholder="Email"
                                        aria-label="Email" aria-describedby="basic-addon1" name="email"
                                        value="{{ $project_leader->email }}">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text border border-info bg-"><i data-feather="image"
                                            class="feather-sm fill-white"></i></span>
                                    <input type="file" class="form-control border border-info" placeholder="Foto"
                                        aria-label="Foto" aria-describedby="basic-addon1" name="image">
                                </div>
                                <div class="d-md-flex align-items-center justify-content-end">
                                    <div class="mt-3 mt-md-0 ms-auto">
                                        <a href="{{ route('project_leader.index') }}"
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
