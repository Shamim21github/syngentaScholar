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
            <th>How do you know Syngenta</th>
            <th>What is your career ambition</th>
            <th>Applicant's Photo</th>
            <th>Student ID</th>
            <th>Applicant's NID</th>
            <th>Academic Performance:8th Semester</th>
            <th>Academic Performance: 7th Semester</th>
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
            <td>{{$registration_list->syngenta_knowledge}}</td>
            <td>{{$registration_list->career_ambition}}</td>
            <td>
                <img src="{{asset('storage/'.$registration_list->applicant_photo)}}" alt="" height="100px" width="100px">
            </td>
            <td>
                <img src="{{asset('storage/'.$registration_list->student_id)}}" alt="" height="100px" width="100px">
            </td>
            <td>
                <img src="{{asset('storage/'.$registration_list->applicant_nid_front_side)}}" alt="" height="100px" width="100px"> <br>
                <img src="{{asset('storage/'.$registration_list->applicant_nid_back_side)}}" alt="" height="100px" width="100px">
            </td>
            <td>
                {{$registration_list->academic_performance_7th_for_8th}}
                {{$registration_list->academic_performance_6th_for_8th}}
            </td>
            <td>
                {{$registration_list->academic_performance_6th_for_7th}}
                {{$registration_list->academic_performance_5th_for_7th}}
            </td>
            <td>
                <a href="{{ route('registrations.show', ['registration' => $registration_list->id]) }}" class="btn btn-primary">Show</a>
                <a href="{{ route('registrations.edit', ['registration' => $registration_list->id]) }}" class="btn btn-secondary">Edit</a>
                <a onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this item?')) { document.getElementById('delete-form-{{$registration_list->id}}').submit(); }" class="btn btn-danger">Delete</a>
                <form id="delete-form-{{$registration_list->id}}" action="{{ route('registrations.destroy', ['registration' => $registration_list->id]) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if(Session::has('message'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.error("{{ session('message') }}");
    @endif
</script>
@endsection