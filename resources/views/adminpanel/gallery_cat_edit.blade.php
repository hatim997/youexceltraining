@extends('adminpanel.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <form method="POST" action="{{ route('update.gallery.cat', $gallerycat->id) }}" enctype="multipart/form-data">
                    @csrf


                    <div class="row">
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Course Name</label>
                                <input type="text" class="form-control" id="cat_name" name="cat_name"
                                    value="{{ $gallerycat['cat_name'] }}">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Position</label>
                                <input type="number" class="form-control" value="{{ $gallerycat['year'] }}" id="year"
                                    name="year">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3">
                            <button type="submit" class="btn btn-primary">Submit &nbsp; <i
                                    class="fas fa-long-arrow-alt-right"></i></button>
                        </div>
                    </div>
                </form>
                <!-- Edit Form End  -->
            </div>
        </div>
    </div>
@endsection
