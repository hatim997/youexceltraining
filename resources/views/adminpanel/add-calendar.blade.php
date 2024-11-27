@extends('adminpanel.app')

@section('content')

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Calendar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Calendar</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @if(session('success'))
                <p style="color: green;">{{ session('success') }}</p>
            @endif

            <form method="POST" action="{{ route('store.calendar') }}" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="title" required>
                        </div>
                    </div>
                </div>

                <div id="entry-fields"> <!-- This is the new container for dynamic entries -->
                    <div class="row entry"> <!-- Default entry -->
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label for="course_name" class="form-label">Course Name</label>
                                <input type="text" class="form-control" name="course_name[]" required>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label for="d_date" class="form-label">Demo Date</label>
                                <input type="text" class="form-control" name="d_date[]" required>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label for="d_timing" class="form-label">Demo Timing</label>
                                <input type="text" class="form-control" name="d_timing[]" required>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label for="class_date" class="form-label">Class Date</label>
                                <input type="text" class="form-control" name="class_date[]" required>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label for="class_timing" class="form-label">Class Timing</label>
                                <input type="text" class="form-control" name="class_timing[]" required>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label for="duration" class="form-label">Duration</label>
                                <input type="text" class="form-control" name="duration[]" required>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label for="d_btn" class="form-label">Training Program Details</label>
                                <select class="form-control" name="d_btn[]" required>
                                    <option value="" disabled selected>Select a training program</option>
                                    <option value="https://youexceltraining.com/courses/excel-mastery">Microsoft Excel Mastery</option>
                                    <option value="https://youexceltraining.com/courses/advanced-excel">Advanced MS Excel: Business Intelligence with Data Visualization</option>
                                    <option value="https://youexceltraining.com/courses/dashboard-reporting-powerbi-analysis">Dashboard Reporting & Analysis with Power BI</option>
                                    <option value="https://youexceltraining.com/courses/sql-analytics">Data Analytics with SQL (Basic to Advanced)</option>
                                    <option value="https://youexceltraining.com/courses/python-data-analysis">Python Programming for Data Analysis</option>
                                    <option value="https://youexceltraining.com/courses/financial-modeling">Financial Modeling and Analysis (Fundamental Level)</option>
                                    <option value="https://youexceltraining.com/courses/e-dukaan-specialist">E-Dukaan Specialist</option>
                                    <option value="https://youexceltraining.com/courses/tax-management">Tax Management with Returns Filing</option>
                                    <option value="https://youexceltraining.com/courses/ai-integrated-office">MS Office Management – (MS Excel, MS Word, MS PowerPoint and MS Outlook)</option>
                                    <option value="https://youexceltraining.com/courses/cit">Certificate in Information Technology</option>
                                    <option value="https://youexceltraining.com/courses/visualizing-excel-dashboards-power-point">Visualizing Advanced MS Excel Dashboards in PowerPoint Presentation</option>
                                    <option value="https://youexceltraining.com/courses/data-science">Data Science and Analytics</option>
                                    <option value="https://youexceltraining.com/courses/ms-fabric">Data Analytics using MS Fabrics</option>
                                    <option value="https://youexceltraining.com/courses/presenting-with-impact">Presenting with Impact</option>
                                    <option value="https://youexceltraining.com/courses/computerized-accounting">Computerized Accounting</option>
                                    <option value="https://youexceltraining.com/courses/cyber-security">Cyber Security Mastery</option>

                                   
                                </select>
                            </div>
                        </div>
                        

                        <div class="col-lg-2">
                            <button type="button" class="btn btn-danger remove-entry">Remove</button>
                        </div>
                    </div>
                </div>

                <button type="button" id="add-entry" class="btn btn-secondary">Add New Entry</button>

                <div class="row mt-5">
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-primary">Submit &nbsp; <i class="fas fa-long-arrow-alt-right"></i></button>
                    </div>
                </div>

            </form>
            <!-- form End  -->



            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-center">View Table</h1>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">S.NO</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($entries as $index => $entry)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $entry->title }}</td>
                                    <td>
                                        <!-- View Button -->
                                        <a href="{{ route('view.entries', $entry->title) }}" class="btn btn-primary">
                                            View
                                        </a>
                                        
                                      
                                      
                                     <a href="{{ route('edit.entries', $entry->title) }}" class="btn btn-success">
                                            Edit
                                        </a>
                                      
                                        <form action="{{ route('delete.entries', $entry->title) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete all entries with this title?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            
                            
                        </table>
                    </div>
                </div>
            </div>
            



            @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color: red;">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Include jQuery -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <script>
                $(document).ready(function() {
                    $('#add-entry').click(function() {
                        $('#entry-fields').append(`
                            <div class="row entry">
                                <div class="col-lg-5">
                                    <div class="mb-3">
                                        <label for="course_name" class="form-label">Course Name</label>
                                        <input type="text" class="form-control" name="course_name[]" required>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mb-3">
                                        <label for="d_date" class="form-label">Demo Date</label>
                                        <input type="text" class="form-control" name="d_date[]" required>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mb-3">
                                        <label for="d_timing" class="form-label">Demo Timing</label>
                                        <input type="text" class="form-control" name="d_timing[]" required>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mb-3">
                                        <label for="class_date" class="form-label">Class Date</label>
                                        <input type="text" class="form-control" name="class_date[]" required>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mb-3">
                                        <label for="class_timing" class="form-label">Class Timing</label>
                                        <input type="text" class="form-control" name="class_timing[]" required>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mb-3">
                                        <label for="duration" class="form-label">Duration</label>
                                        <input type="text" class="form-control" name="duration[]" required>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mb-3">
                                        <label for="d_btn" class="form-label">Training Program Details</label>
                                        <select class="form-control" name="d_btn[]" required id="d_btn_new">
                                            <option value="" disabled selected>Select a training program</option>
                                            <option value="https://youexceltraining.com/courses/excel-mastery">Microsoft Excel Mastery</option>
                                            <option value="https://youexceltraining.com/courses/advanced-excel">Advanced MS Excel: Business Intelligence with Data Visualization</option>
                                            <option value="https://youexceltraining.com/courses/dashboard-reporting-powerbi-analysis">Dashboard Reporting & Analysis with Power BI</option>
                                            <option value="https://youexceltraining.com/courses/sql-analytics">Data Analytics with SQL (Basic to Advanced)</option>
                                            <option value="https://youexceltraining.com/courses/python-data-analysis">Python Programming for Data Analysis</option>
                                            <option value="https://youexceltraining.com/courses/financial-modeling">Financial Modeling and Analysis (Fundamental Level)</option>
                                            <option value="https://youexceltraining.com/courses/e-dukaan-specialist">E-Dukaan Specialist</option>
                                            <option value="https://youexceltraining.com/courses/tax-management">Tax Management with Returns Filing</option>
                                            <option value="https://youexceltraining.com/courses/ai-integrated-office">MS Office Management – (MS Excel, MS Word, MS PowerPoint and MS Outlook)</option>
                                            <option value="https://youexceltraining.com/courses/cit">Certificate in Information Technology</option>
                                            <option value="https://youexceltraining.com/courses/visualizing-excel-dashboards-power-point">Visualizing Advanced MS Excel Dashboards in PowerPoint Presentation</option>
                                            <option value="https://youexceltraining.com/courses/data-science">Data Science and Analytics</option>
                                            <option value="https://youexceltraining.com/courses/ms-fabric">Data Analytics using MS Fabrics</option>
                                            <option value="https://youexceltraining.com/courses/presenting-with-impact">Presenting with Impact</option>
                                            <option value="https://youexceltraining.com/courses/computerized-accounting">Computerized Accounting</option>
                                            <option value="https://youexceltraining.com/courses/cyber-security">Cyber Security Mastery</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <button type="button" class="btn btn-danger remove-entry">Remove</button>
                                </div>
                            </div>
                        `);
                    });
            
                    // Event delegation to handle dynamically added elements
                    $('#entry-fields').on('click', '.remove-entry', function() {
                        $(this).closest('.entry').remove();
                    });
                });
            </script>
            
        </div>
    </section>

</div>

@endsection
