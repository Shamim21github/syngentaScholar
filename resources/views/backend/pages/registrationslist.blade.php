@extends('backend.layouts.app')
@section('content')
<h1>Dashboard</h1>
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
</nav>
</div><!-- End Page Title -->
<!-- Table with stripped rows -->
<table class="table datatable">
    <thead>
        <tr>
            <th>SL</th>
            <th>
                Application's Name
            </th>
            <th>Name of the Institution</th>
            <th>Department/Faculty</th>
            <th>Roll No</th>
            <th>Session</th>
            <th>Semester</th>
            <th>Gender</th>
            <th data-type="date" data-format="YYYY/DD/MM">Date of Birth</th>
            <th>Contact Number</th>
            <th>Email</th>
            <th>Mailing Address</th>
            <th>Bkash Number</th>
            <th>District</th>
            <th>How do you know Syngenta</th>
            <th>What is your career ambition</th>
            <th>Applicant's Photo</th>
            <th>Student ID</th>
            <th>Applicant's NID</th>
            <th>Academic Performance: 5th Semester</th>
            <th>Academic Performance: 6th Semester</th>
            <th>Upload Docs</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($registration_lists as $registration_list)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$registration_list->application_name}}</td>
            <td>{{$registration_list->institution_name}}</td>
            <td>{{$registration_list->department}}</td>
            <td>{{$registration_list->roll_no}}</td>
            <td>{{$registration_list->session}}</td>
            <td>{{$registration_list->semester}}</td>
            <td>{{$registration_list->gender}}</td>
            <td>{{$registration_list->date_of_birth}}</td>
            <td>{{$registration_list->contact_number}}</td>
            <td>{{$registration_list->email}}</td>
            <td>{{$registration_list->mailing_address}}</td>
            <td>{{$registration_list->bkash_number}}</td>
            <td>{{$registration_list->district}}</td>
            <td>{{$registration_list->syngenta_knowledge}}</td>
            <td>{{$registration_list->career_ambition}}</td>
            <td>
                <img src="{{asset($registration_list->applicant_photo)}}" alt="" height="100px" width="100px">
            </td>
            <td>
                <img src="{{asset($registration_list->student_id)}}" alt="" height="100px" width="100px">
            </td>
            <td>
                <img src="{{asset($registration_list->applicant_nid)}}" alt="" height="100px" width="100px">
            </td>
            <td>
                <img src="{{asset($registration_list->academic_performance_5th)}}" alt="" height="100px" width="100px">
            </td>
            <td>
                <img src="{{asset($registration_list->academic_performance_6th)}}" alt="" height="100px" width="100px">
            </td>
            <td>
                {{$registration_list->upload_docs}}
            </td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- End Table with stripped rows -->
@endsection