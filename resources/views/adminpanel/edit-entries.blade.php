@extends('adminpanel.app')

@section('content')

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Entries for "{{ $title }}"</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Entries</li>
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

            <form action="{{ route('update.entries', $title) }}" method="POST">
                @csrf
                @method('PUT')

                <div id="entry-fields"> <!-- This is the container for dynamic entries -->
                    @foreach ($entries as $index => $entry)
                        <div class="row entry mb-3"> <!-- Each entry in a row -->
                            <div class="col-lg-5">
                                <div class="mb-3">
                                    <label for="course_name_{{ $index }}" class="form-label">Course Name</label>
                                    <input type="text" name="course_name[]" class="form-control" id="course_name_{{ $index }}" value="{{ $entry->course_name }}" required>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="mb-3">
                                    <label for="d_date_{{ $index }}" class="form-label">Date</label>
                                    <input type="text" name="d_date[]" class="form-control" id="d_date_{{ $index }}" value="{{ $entry->d_date }}" required>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="mb-3">
                                    <label for="d_timing_{{ $index }}" class="form-label">Timing</label>
                                    <input type="text" name="d_timing[]" class="form-control" id="d_timing_{{ $index }}" value="{{ $entry->d_timing }}" required>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="mb-3">
                                    <label for="class_date_{{ $index }}" class="form-label">Class Date</label>
                                    <input type="text" name="class_date[]" class="form-control" id="class_date_{{ $index }}" value="{{ $entry->class_date }}" required>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="mb-3">
                                    <label for="class_timing_{{ $index }}" class="form-label">Class Timing</label>
                                    <input type="text" name="class_timing[]" class="form-control" id="class_timing_{{ $index }}" value="{{ $entry->class_timing }}" required>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="mb-3">
                                    <label for="duration_{{ $index }}" class="form-label">Duration</label>
                                    <input type="text" name="duration[]" class="form-control" id="duration_{{ $index }}" value="{{ $entry->duration }}" required>
                                </div>
                            </div>

                     
                            <div class="col-lg-5">
                                <div class="mb-3">
                                    <label for="d_btn_{{ $index }}" class="form-label">Training Program Details</label>
                                    <select class="form-control" name="d_btn[]" required id="d_btn_{{ $index }}">
                                        <option value="" disabled>Select a training program</option>
                                        <option value="https://youexceltraining.com/courses/excel-mastery" {{ $entry->d_btn === 'https://youexceltraining.com/courses/excel-mastery' ? 'selected' : '' }}>Microsoft Excel Mastery</option>
                                        <option value="https://youexceltraining.com/courses/advanced-excel" {{ $entry->d_btn === 'https://youexceltraining.com/courses/advanced-excel' ? 'selected' : '' }}>Advanced MS Excel: Business Intelligence with Data Visualization</option>
                                        <option value="https://youexceltraining.com/courses/dashboard-reporting-powerbi-analysis" {{ $entry->d_btn === 'https://youexceltraining.com/courses/dashboard-reporting-powerbi-analysis' ? 'selected' : '' }}>Dashboard Reporting & Analysis with Power BI</option>
                                        <option value="https://youexceltraining.com/courses/sql-analytics" {{ $entry->d_btn === 'https://youexceltraining.com/courses/sql-analytics' ? 'selected' : '' }}>Data Analytics with SQL (Basic to Advanced)</option>
                                        <option value="https://youexceltraining.com/courses/python-data-analysis" {{ $entry->d_btn === 'https://youexceltraining.com/courses/python-data-analysis' ? 'selected' : '' }}>Python Programming for Data Analysis</option>
                                        <option value="https://youexceltraining.com/courses/financial-modeling" {{ $entry->d_btn === 'https://youexceltraining.com/courses/financial-modeling' ? 'selected' : '' }}>Financial Modeling and Analysis (Fundamental Level)</option>
                                        <option value="https://youexceltraining.com/courses/e-dukaan-specialist" {{ $entry->d_btn === 'https://youexceltraining.com/courses/e-dukaan-specialist' ? 'selected' : '' }}>E-Dukaan Specialist</option>
                                        <option value="https://youexceltraining.com/courses/tax-management" {{ $entry->d_btn === 'https://youexceltraining.com/courses/tax-management' ? 'selected' : '' }}>Tax Management with Returns Filing</option>
                                        <option value="https://youexceltraining.com/courses/ai-integrated-office" {{ $entry->d_btn === 'https://youexceltraining.com/courses/ai-integrated-office' ? 'selected' : '' }}>MS Office Management – (MS Excel, MS Word, MS PowerPoint and MS Outlook)</option>
                                        <option value="https://youexceltraining.com/courses/cit" {{ $entry->d_btn === 'https://youexceltraining.com/courses/cit' ? 'selected' : '' }}>Certificate in Information Technology</option>
                                        <option value="https://youexceltraining.com/courses/visualizing-excel-dashboards-power-point" {{ $entry->d_btn === 'https://youexceltraining.com/courses/visualizing-excel-dashboards-power-point' ? 'selected' : '' }}>Visualizing Advanced MS Excel Dashboards in PowerPoint Presentation</option>
                                        <option value="https://youexceltraining.com/courses/data-science" {{ $entry->d_btn === 'https://youexceltraining.com/courses/data-science' ? 'selected' : '' }}>Data Science and Analytics</option>
                                        <option value="https://youexceltraining.com/courses/ms-fabric" {{ $entry->d_btn === 'https://youexceltraining.com/courses/ms-fabric' ? 'selected' : '' }}>Data Analytics using MS Fabrics</option>
                                        <option value="https://youexceltraining.com/courses/presenting-with-impact" {{ $entry->d_btn === 'https://youexceltraining.com/courses/presenting-with-impact' ? 'selected' : '' }}>Presenting with Impact</option>
                                        <option value="https://youexceltraining.com/courses/computerized-accounting" {{ $entry->d_btn === 'https://youexceltraining.com/courses/computerized-accounting' ? 'selected' : '' }}>Computerized Accounting</option>
                                        <option value="https://youexceltraining.com/courses/cyber-security" {{ $entry->d_btn === 'https://youexceltraining.com/courses/cyber-security' ? 'selected' : '' }}>Cyber Security Mastery</option>
                                    </select>
                                </div>
                            </div>
                            
             
                        </div>
                    @endforeach
                </div>

               
                <div class="row mt-5">
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-primary">Update Entries</button>
                    </div>
                </div>
            </form>

            <!-- Include jQuery -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        </div>
    </section>

</div>

@endsection
