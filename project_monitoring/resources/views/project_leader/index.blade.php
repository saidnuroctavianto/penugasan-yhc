@extends('templates.app')

@section('title', 'Data Project Leader')

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
                                <a href="{{ url('/') }}" class="link"><i class="mdi mdi-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Project Leader
                            </li>
                        </ol>
                    </nav>
                    <h1 class="mb-0 fw-bold">Project Leader</h1>
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
            <div class="row">
                <div class="col-12">
                    @if ($message = Session::get('success'))
                        <div class="alert customize-alert alert-dismissible text-success alert-light-success fade show"
                            role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <div class="d-flex align-items-center font-weight-medium">
                                <i data-feather="info" class="text-success fill-white feather-sm me-2"></i>
                                {{ $message }}
                            </div>
                        </div>
                    @endif
                    <div class="card">
                        <div class="border-bottom title-part-padding">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="mb-0">List Project Leader</h4>
                                <a href="{{ url('project_leader/create') }}" class="btn btn-info btn-rounded m-t-10 mb-2">
                                    <i class="mdi mdi-plus"></i>
                                    Tambah
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatables"
                                    class="table m-t-30 table-hover contact-list v-middle text-nowrap footable footable-5 footable-paging footable-paging-center breakpoint-lg"
                                    data-paging="true" data-paging-size="7" style="">
                                    <thead>
                                        <tr class="footable-header">
                                            <th class="footable-first-visible">No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($project_leaders as $key => $project_leader)
                                            <tr>
                                                <td class="footable-first-visible">{{ $key + 1 }}</td>
                                                <td><a href="javascript:void(0)" class="link"><img
                                                            src="{{ asset('assets/images/' . $project_leader->image) }}"
                                                            alt="user" width="40" height="40"
                                                            class="rounded-circle me-2"
                                                            style="object-fit:cover">{{ $project_leader->name }}</a>
                                                </td>
                                                <td>{{ $project_leader->email }}</td>
                                                <td>
                                                    <a href="{{ route('project_leader.edit', $project_leader->id) }}"
                                                        class="btn btn-success btn-sm"><i class="mdi mdi-pencil"></i>
                                                    </a>
                                                    <form id="hapus-user-<?= $project_leader->id ?>"
                                                        action="{{ route('project_leader.destroy', $project_leader->id) }}"
                                                        method="POST" hidden>
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    </form>
                                                    <a onclick="event.preventDefault(); document.getElementById('hapus-user-{{ $project_leader->id }}').submit();"
                                                        class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================= -->
            <!-- End PAge Content -->
            <!-- ============================================================= -->
        </div>
        <!-- ============================================================= -->
        <!-- End Container fluid  -->
        <!-- ============================================================= -->
        <!-- ============================================================= -->

    @endsection
