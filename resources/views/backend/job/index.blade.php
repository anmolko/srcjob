@extends('backend.layouts.master')
@section('title', "Jobs")
@section('css')
    <link rel="stylesheet" href="{{asset('assets/backend/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/custom_css/datatable_style.css')}}">
    <link href="{{asset('assets/backend/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />

@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Jobs</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Jobs</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row g-4">
                                <div class="col-sm-auto">
                                    <h4 class="card-title mb-0">Job List</h4>

                                </div>
                                <div class="col-sm">
                                    <div class="d-flex justify-content-sm-end">
                                        <div>
                                            <a href="{{route('job.create')}}" class="btn btn-success"><i class="ri-add-line align-bottom me-1"></i> Add Job</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="row" >

                                <div class="table-responsive  mt-3 mb-1">
                                    <table id="job-index" class="table align-middle table-nowrap table-striped">
                                        <thead class="table-light">
                                        <tr>
                                            <th>Feature Image</th>
                                            <th>Name</th>
                                            <th>Job Code</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody id="blog-list">
                                        @if(!empty($jobs))
                                            @foreach($jobs as  $job)
                                                <tr id="job-individual-{{@$job->id}}">
                                                    <td >
                                                        <img src="{{asset('/images/job/'.@$job->image)}}" alt="{{@$job->slug}}" class="figure-img rounded-circle avatar-lg">
                                                    </td>
                                                    <td>
                                                        {{ ucwords(@$job->name) }}
                                                    </td>
                                                    <td >
                                                        {{ ucwords(@$job->code) }}
                                                    </td>
                                                    <td>{{ucfirst(@$job->category->name)}}</td>
                                                    <td>
                                                        <div class="btn-group view-btn" id="job-status-button-{{$job->id}}">
                                                            <button class="btn btn-light dropdown-toggle" style="width: 10em;" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                                                {{ucwords(@$job->status)}}
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside" style="">
                                                                @if($job->status == "draft")
                                                                    <li><a class="dropdown-item change-status" cs-update-route="{{route('job-status.update',$job->id)}}" href="#" cs-status-value="publish">Published</a></li>
                                                                @else
                                                                    <li><a class="dropdown-item change-status" cs-update-route="{{route('job-status.update',$job->id)}}" href="#" cs-status-value="draft">Draft</a></li>
                                                                @endif
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td >
                                                        <div class="row">

                                                            <div class="col text-center dropdown">
                                                                <a href="javascript:void(0);" id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-fill fs-17"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink2">
                                                                    <li><a class="dropdown-item" href="{{route('job.edit',$job->id)}}"><i class="ri-pencil-fill me-2 align-middle"></i>Edit</a></li>
                                                                    <li><a class="dropdown-item cs-job-remove" cs-delete-route="{{route('job.destroy',$job->id)}}"><i class="ri-delete-bin-6-line me-2 align-middle"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div><!--end row-->
                            <form action="#" method="post" id="deleted-form">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>


@endsection

@section('js')
    <script src="{{asset('assets/backend/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/backend/js/pages/form-validation.init.js')}}"></script>
    <!-- Sweet Alerts js -->
    <script src="{{asset('assets/backend/libs/sweetalert2/sweetalert2.min.js')}}"></script>

    <script src="{{asset('assets/backend/custom_js/job.js')}}"></script>

@endsection
