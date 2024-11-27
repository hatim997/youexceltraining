@extends('adminpanel.app')

@section('content')
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">View Registered</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">View Registered</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" style="overflow-x: scroll;">
                        <h1 class="text-center">View Registration Table</h1>
                        <table class="table table-striped table-hover" id="registrationform">
                            <thead>
                                <tr>
                                    <th scope="col">S.NO</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Choose Programe</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Father Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Employer Name</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Cell Number</th>
                                    <th scope="col">Date of Birth</th>
                                    <th scope="col">CNIC/National ID </th>
                                    <th scope="col">Qualification</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">DateTime</th>
                                    <th scope="col">Form Type</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $Register)
                                <tr>
                                  <td>{{$Register['id']}}</td>
                                  <td>{{$Register['email']}}</td>
                                  <td>{{$Register['chooseprogramme']}}</td>
                                  <td>{{$Register['name']}}</td>
                                  <td>{{$Register['fathername']}}</td>
                                  <td>{{$Register['address']}}</td>
                                  <td>{{$Register['city']}}</td>
                                  <td>{{$Register['employeename']}}</td>
                                  <td>{{$Register['designation']}}</td>
                                  <td>{{$Register['cellnumber']}}</td>
                                  <td>{{$Register['dateofbirth']}}</td>
                                  <td>{{$Register['cnic']}}</td>
                                  <td>{{$Register['qualification']}}</td>
                                    <td><a  target="_blank" href="{{url("/files")."/".$Register['Image']}}">View File</a></td>
                                  <td>{{$Register['DateTime']}}</td>
                                  <td>Registration Form</td>
                                  <td>
                                      <a class="btn btn-danger delete-confirm" href="view-registered/{{$Register['id']}}"><i class="fas fa-trash-alt"></i></a>
                                      <!-- <a href="{{url('edit').'/'.$Register['id']}}" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary"><i class="fas fa-edit"></i></a> -->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--------------- table end  --------------->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



@endsection
