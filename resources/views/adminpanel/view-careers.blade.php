

@extends('adminpanel.app')

@section('content')

<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">View Careers</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">View Careers</li>
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
                        <h1 class="text-center">View Careers Table</h1>
                        <table class="table table-striped table-hover" id="careerform">
                            <thead>
                                <tr>
                                    <th scope="col">S.NO</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Cell No</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Position Applying For</th>
                                    <th scope="col">Cover Letter</th>
                                    <th scope="col">File</th>
                                    <th scope="col">DateTime</th>
                                    <th scope="col">Form Type</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $careerform)
                                <tr>
                                  <td>{{$careerform['id']}}</td>
                                  <td>{{$careerform['Fullname']}}</td>
                                  <td>{{$careerform['Cellno']}}</td>
                                  <td>{{$careerform['Email']}}</td>
                                  <td>{{$careerform['PositionApplyingFor']}}</td>
                                  <td>{{$careerform['Coverletter']}}</td>
                                  <td><a target="_blank" href="{{url("/files")."/".$careerform['Image']}}">View File</a></td>
                                  <td>{{$careerform['DateTime']}}</td>
                                  <td>Careers Form</td>
                                  <td>
                                      <a class="btn btn-danger delete-confirm" href="view-careers/{{$careerform['id']}}"><i class="fas fa-trash-alt"></i></a>
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
<body>
<script>
    $(document).ready(function() {
        $('a[href="view-careers"]').addClass("active");
    });
    </script>
</body>

@endsection
