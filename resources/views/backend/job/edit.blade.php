@extends('backend.layouts.master')
@section('title', "Edit Job")
@section('css')

    <link href="{{asset('assets/backend/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <style>
        .blog-feature-image{
        }
        .feature-image-button{
            position: absolute;
            top: 25%;
        }
        .profile-foreground-img-file-input {
            display: none;
        }
    </style>
@endsection
@section('content')


    <div class="page-content">
        <div class="container-fluid" style="position:relative;">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Job</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{route('job.index')}}">Job</a></li>
                                <li class="breadcrumb-item active">Edit Job</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            {!! Form::open(['url'=>route('job.update', @$edit->id),'method'=>'put','class'=>'needs-validation','novalidate'=>'','enctype'=>'multipart/form-data']) !!}

            <div class="row">

                <div class="col-lg-8">

                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label>Job Name <span class="text-muted text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" id="job_name" onclick="slugMaker('job_name','job_slug')" value="{{@$edit->name}}" required>
                                <div class="invalid-feedback">
                                    Please enter the job name.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Slug <span class="text-muted text-danger">*</span></label>
                                <input type="text" class="form-control" name="slug" id="job_slug" value="{{@$edit->slug}}" required>
                                <div class="invalid-feedback">
                                    Please enter the job Slug.
                                </div>
                                @if($errors->has('slug'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('slug')}}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label>Required Number of Jobs <span class="text-muted text-danger">*</span></label>
                                <input type="text" class="form-control" name="required_number" value="{{@$edit->required_number}}" required>
                                <div class="invalid-feedback">
                                    Please enter the required number of jobs.
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label>LT Number </label>
                                <input type="text" class="form-control" name="lt_number" value="{{@$edit->lt_number}}">
                                <div class="invalid-feedback">
                                    Please enter the LT Number.
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label>Salary <span class="text-muted text-danger">*</span></label>
                                <input type="text" min="1" class="form-control" name="salary" value="{{@$edit->salary}}" required>
                                <div class="invalid-feedback">
                                    Please enter the salary.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label>Job Description</label>

                                <textarea class="form-control" id="ckeditor-classic-blog" name="description" placeholder="Enter job description" rows="3" required>{!! $edit->description !!}</textarea>
                                <div class="invalid-tooltip">
                                    Please enter the job description.
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end card -->


                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#addblog-metadata"
                                       role="tab">
                                        Meta Data
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end card header -->
                        <div class="card-body">
                            <div class="tab-content">

                                <div class="tab-pane active" id="addblog-metadata" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="meta-title-input">Meta title</label>
                                                <input type="text" class="form-control" placeholder="Enter meta title" name="meta_title" value="{{@$edit->meta_title}}"  id="meta-title-input">
                                            </div>
                                        </div>
                                        <!-- end col -->

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="meta-keywords-input">Meta Keywords</label>
                                                <input type="text" class="form-control" placeholder="Enter meta keywords" name="meta_tags" value="{{@$edit->meta_tags}}"  id="meta-keywords-input" data-choices data-choices-text-unique-true>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->

                                    <div>
                                        <label class="form-label" for="meta-description-input">Meta Description</label>
                                        <textarea class="form-control" id="meta-description-input" placeholder="Enter meta description" name="meta_description" rows="3">{{@$edit->meta_description}}</textarea>
                                    </div>
                                </div>
                                <!-- end tab pane -->
                            </div>
                            <!-- end tab content -->
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                    <div class="text-end mb-3">
                        <button type="submit" class="btn btn-success w-sm">Submit</button>
                    </div>



                </div>
                <!-- end col -->

                <div class="col-lg-4 ">
                    <div class="sticky-side-div">

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Job Categories</h5>
                            </div>
                            <div class="card-body">
                                <p class="text-muted mb-2"> Select job category</p>
                                <select class="form-select" name="job_category_id" data-choices data-choices-search-true >
                                    @if(!empty(@$categories))
                                        @foreach(@$categories as $categoryList)
                                            <option value="{{ @$categoryList->id }}" @if(@$edit->job_category_id == @$categoryList->id) selected @endif>{{ ucwords(@$categoryList->name) }}</option>
                                        @endforeach
                                    @endif
                                </select>

                            </div>
                            <!-- end card body -->
                        </div>

                        <div class="card ">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Select Options</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="choices-publish-status-input" class="form-label">Status</label>

                                    <select class="form-select" id="choices-publish-status-input" name="status" data-choices data-choices-search-false>
                                        <option value="publish" @if(@$edit->status == "publish") selected @endif>Published</option>
                                        <option value="draft" @if(@$edit->status == "draft") selected @endif>Draft</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label>Min Qualification <span class="text-muted text-danger">*</span></label>
                                    <select class="form-control shadow-none" name="min_qualification" required>
                                        <option value disabled> Select Min Qualification</option>
                                        <option value="none"  @if(@$edit->status == "none") selected @endif>None</option>
                                        <option value="primary education"  @if(@$edit->status == "primary education") selected @endif>Primary Education </option>
                                        <option value="secondary education"  @if(@$edit->status == "secondary education") selected @endif>Secondary Education</option>
                                        <option value="SEE pass"  @if(@$edit->status == "SEE pass") selected @endif>SEE Pass</option>
                                        <option value="intermediate pass"  @if(@$edit->status == "intermediate pass") selected @endif>Intermediate Pass</option>
                                        <option value="bachelor pass"  @if(@$edit->status == "bachelor pass") selected @endif>Bachelor Pass</option>
                                        <option value="post graduate pass"  @if(@$edit->status == "post graduate pass") selected @endif>Post Graduate Pass</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please enter the Min Qualification.
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="start_date" class="form-label">Start Date <span class="text-muted text-danger">*</span></label>
                                    <input type="text" class="form-control" name="start_date" id="start_date" value="{{@$start}}" >
                                    <div class="invalid-feedback">
                                        Please Select the start date.
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="end_date" class="form-label">End Date <span class="text-muted text-danger">*</span></label>
                                    <input type="text" class="form-control" name="end_date" id="end_date" value="{{@$end}}" >
                                    <div class="invalid-feedback">
                                        Please Select the end date.
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->


                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Feature Image</h5>
                            </div>
                            <div class="card-body">
                                <div>
                                    <img  id="current-img"   src="{{ ($edit->image !== null) ? asset('images/job/'.$edit->image) :  asset('images/default-image.jpg') }}" class="position-relative img-fluid img-thumbnail blog-feature-image" >
                                    <input  type="file" accept="image/png, image/jpeg" hidden
                                            id="profile-foreground-img-file-input" onchange="loadFile(event)" name="image"
                                            class="profile-foreground-img-file-input" >

                                    <figcaption class="figure-caption">*use image minimum of 1280 x 720px </figcaption>
                                    <div class="invalid-feedback" >
                                        Please select a image.
                                    </div>
                                    <label for="profile-foreground-img-file-input" class="profile-photo-edit btn btn-light feature-image-button">
                                        <i class="ri-image-edit-line align-bottom me-1"></i> Add Image
                                    </label>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                    </div>
                </div>

            </div>
        {!! Form::close() !!}

        <!-- end row -->

            <!-- container-fluid -->
        </div>
    </div>

@endsection

@section('js')
    <script src="{{asset('assets/backend/js/pages/form-validation.init.js')}}"></script>
    <!-- Sweet Alerts js -->
    <script src="{{asset('assets/backend/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js')}}"></script>

    <script src="{{asset('assets/backend/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{asset('assets/backend/custom_js/blog_credit.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script type="text/javascript">
        $(function() {
            $('#start_date').datepicker({
                autoclose: "true",
                clearBtn:"true",
                format:"dd/mm/yyyy"


            });
            $('#end_date').datepicker({
                autoclose: "true",
                clearBtn:"true",
                format:"dd/mm/yyyy"

            });
        });


    </script>
@endsection
