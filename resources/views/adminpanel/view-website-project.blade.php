@extends('adminpanel.app')

@section('content')
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1 class="m-0">View Registered</h1> -->
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">View Project Table</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

{{-- error message fire --}}
@if(session('success'))
<div class="alert alert-success justify-content-center" style="width: 50%">
    {{ session('success') }}
</div>
@endif

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif 

    <section class="content">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" style="overflow-x: scroll;">
                        <h1 class="text-center">View Project Table</h1>
                        {{-- <form action="{{ route('lead.multiDelete') }}" method="POST">
                        @csrf --}}
                            <table class="table table-striped table-hover" id="registrationform">
                                <thead>
                                    <tr>
                                        {{-- <th scope="col">Select</th> --}}
                                        <th scope="col">S.NO</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">city</th>
                                        <th scope="col">Whatsapp no</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Project Intrested</th>
                                        <th scope="col">Comments</th>
                                        <th scope="col">Form Type</th>
                                        <th scope="col">Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $item)
                                    <tr>
                                        {{-- <td>
                                            <input type="checkbox" name="items[]" value="{{ $item->id }}">
                                        </td> --}}
                                    <td>{{$item['id']}}</td>
                                    <td>{{$item['name']}}</td>
                                        <td>{{$item['city']}}</td>
                                    <td>{{$item['whatsapp']}}</td>
                                    <td>{{$item['email']}}</td>
                                    <td>{{$item['project_name']}}</td>
                                    <td>{{$item['comments']}}</td>
                                    <td>Project Form</td>
                                    <td>
                                        <a class="btn btn-danger delete-confirm" href="{{ route('project.form.delete', $item->id) }}"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- <button type="submit" class="btn btn-danger">Delete Selected</button> --}}
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
            <!--------------- table end  --------------->         
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



@endsection    