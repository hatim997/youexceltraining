@extends('adminpanel.app')

@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Entries for Title: {{ $title }}</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">S.NO</th>
                        <th scope="col">Course Name</th>
                        <th scope="col">Demo Date</th>
                        <th scope="col">Demo Timing</th>
                        <th scope="col">Class Date</th>
                        <th scope="col">Class Timing</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Training Program Details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($entries as $index => $entry)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $entry->course_name }}</td>
                        <td>{{ $entry->d_date }}</td>
                        <td>{{ $entry->d_timing }}</td>
                        <td>{{ $entry->class_date }}</td>
                        <td>{{ $entry->class_timing }}</td>
                        <td>{{ $entry->duration }}</td>
                        <td>{{ $entry->d_btn }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>

@endsection
