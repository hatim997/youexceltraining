@extends('adminpanel.app')

@section('content')
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Gallery Image</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Gallery Image</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!---------------- form start  -------------------->

            <form method="POST" action="{{ route('store.gallery.img') }}" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-lg-5">
                        <div class="mb-3">
                            <label for="d_btn" class="form-label">Select Gallery Category</label>
                            <select class="form-control" name="gallery_cat_id" required>
                                <option value="" disabled selected>Select a Gallery Category</option>
                                @foreach ($galleryCat as $item)
                                <option value="{{ $item->id }}">{{ $item->cat_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Gallery Image</label>
                            <input type="file" class="form-control" id="image" name="image[]" required multiple>
                        </div>
                    </div>
                    {{-- <div class="col-lg-5">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Year</label>
                            <input type="number" class="form-control" id="year" name="year" required>
                        </div>
                    </div> --}}

                    
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-primary">Submit &nbsp; <i
                                class="fas fa-long-arrow-alt-right"></i></button>
                    </div>
                </div>

            </form>
            <!-- form End  -->

            <!---------------- table start  -------------------->

            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-center">View Table</h1>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">S.NO</th>
                                    <th scope="col">Gallery Category</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                {{-- dd($data); --}}
                                @foreach($data as $Course)
                                <tr>
                                    <td>{{ $Course->id }}</td>
                                    <td>{{ $Course->category->cat_name ?? 'N/A' }}</td> <!-- Display the category name -->
                                    <td>
                                        <img src="../storage/app/public/{{ $Course->image }}" alt="Course Image" style="width: 100px; height: auto;" />
                                    </td>
                                    <td>
                                        <a class="btn btn-danger" href="{{ route('delete_gallery_img', $Course->id) }}">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                        {{-- <a href="{{ route('edit_gallery_cat', $Course->id) }}" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">
                                            <i class="fas fa-edit"></i>
                                        </a> --}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--------------- table end  --------------->

            <!---------- Edit Form start  ---------------->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



@endsection
