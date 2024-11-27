@extends('adminpanel.app')

@section('content')
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">View Contact us</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">View Contact us</li>
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
                        <h1 class="text-center">View Contact us Table</h1>
                        <table class="table table-striped table-hover" id="contactform">
                            <thead>
                                <tr>
                                    <th scope="col">S.NO</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone no</th>
                                    <th scope="col">Availability</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">DateTime</th>
                                    <th scope="col">Form Type</th>
                                    <th scope="col">Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $contactus)
                                <tr>
                                  <td>{{$contactus['id']}}</td>
                                  <td>{{$contactus['Fullname']}}</td>
                                  <td>{{$contactus['Email']}}</td>
                                  <td>{{$contactus['Phoneno']}}</td>
                                  <td>{{$contactus['DateTimeform']}}</td>
                                  <td>{{$contactus['Subject']}}</td>
                                  <td>{{$contactus['Message']}}</td>
                                  <td>{{$contactus['DateTime']}}</td>
                                  <td>Contactus Form</td>
                                  <td>
                                      <a class="btn btn-danger delete-confirm" href="view-Contactus/{{$contactus['id']}}"><i class="fas fa-trash-alt"></i></a>
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