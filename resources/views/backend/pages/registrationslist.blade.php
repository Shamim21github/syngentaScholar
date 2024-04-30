@extends('backend.layouts.app')
<style>
    /* CSS */
    .show-more-button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
        outline: none;
    }

    .show-more-button:hover {
        background-color: #0056b3;
    }

    /* CSS */
    .show-more-button2 {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
        outline: none;
    }

    .show-more-button2:hover {
        background-color: #0056b3;
    }

    /* CSS */
    .medium-image {
        height: 500px;
        width: auto;
        cursor: pointer;
        /* Add cursor pointer when image is clickable */
    }
</style>
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
            <th>Registration Number</th>
            <th> Application's Name </th>
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
            <td>{{$registration_list->registration_id}}</td>
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
            <!-- HTML -->
            <td id="syngenta-knowledge">
                <!-- Initially show limited words -->
                {{ Illuminate\Support\Str::limit($registration_list->syngenta_knowledge, $limit = 50, $end = '...') }}
                <!-- Hidden span to hold full text -->
                <span class="full-text" style="display: none;">
                    {{ $registration_list->syngenta_knowledge }}
                </span>
                <!-- Button to show more/less text -->
                <button class="show-more-button">More</button>
            </td>

            <!-- HTML -->
            <td id="career-ambition">
                <!-- Initially show limited words -->
                {{ Illuminate\Support\Str::limit($registration_list->career_ambition, $limit = 50, $end = '...') }}
                <!-- Hidden span to hold full text -->
                <span class="full-text2" style="display: none;">
                    {{ $registration_list->career_ambition }}
                </span>
                <!-- Button to show more/less text -->
                <button class="show-more-button2">More</button>
            </td>

            <td>
                <img class="small-image" src="{{ asset('storage/'.$registration_list->applicant_photo) }}" alt="" height="100px" width="100px">
            </td>

            <td>
                <img src="{{asset('storage/'.$registration_list->student_id)}}" alt="" height="100px" width="100px">
            </td>
            <td>
                <img src="{{asset('storage/'.$registration_list->applicant_nid_front_side)}}" alt="" height="100px" width="100px"> <br>
                <img src="{{asset('storage/'.$registration_list->applicant_nid_back_side)}}" alt="" height="100px" width="100px">
            </td>
            <td>
                @if($registration_list->academic_performance_7th_for_8th)
                <iframe src="{{ asset('storage/'.$registration_list->academic_performance_7th_for_8th) }}" width="50%" height="100px">
                </iframe>
                @endif
                @if($registration_list->academic_performance_6th_for_8th)
                <iframe src="{{ asset('storage/'.$registration_list->academic_performance_6th_for_8th) }}" width="50%" height="100px">
                </iframe>
                @endif
            </td>
            <td>
                @if($registration_list->academic_performance_6th_for_7th)
                <iframe src="{{ asset('storage/'.$registration_list->academic_performance_6th_for_7th) }}" width="50%" height="100px">
                </iframe>
                @endif
                @if($registration_list->academic_performance_5th_for_7th)
                <iframe src="{{ asset('storage/'.$registration_list->academic_performance_5th_for_7th) }}" width="50%" height="100px">
                </iframe>
                @endif
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
    document.addEventListener('DOMContentLoaded', function() {
        const showMoreButton = document.querySelector('.show-more-button');
        const fullText = document.querySelector('.full-text');

        showMoreButton.addEventListener('click', function() {
            if (showMoreButton.textContent === 'More') {
                // Show full text
                fullText.style.display = 'inline';
                showMoreButton.textContent = 'Less';
            } else {
                // Show limited text
                fullText.style.display = 'none';
                showMoreButton.textContent = 'More';
            }
        });
    });
    // JavaScript
    document.addEventListener('DOMContentLoaded', function() {
        const showMoreButton = document.querySelector('.show-more-button2');
        const fullText = document.querySelector('.full-text2');

        showMoreButton.addEventListener('click', function() {
            if (showMoreButton.textContent === 'More') {
                // Show full text
                fullText.style.display = 'inline';
                showMoreButton.textContent = 'Less';
            } else {
                // Show limited text
                fullText.style.display = 'none';
                showMoreButton.textContent = 'More';
            }
        });
    });
    // JavaScript
    document.addEventListener('DOMContentLoaded', function() {
        const smallImages = document.querySelectorAll('.small-image');

        smallImages.forEach(function(image) {
            image.addEventListener('click', function() {
                // Toggle between small and medium image sizes
                if (image.classList.contains('medium-image')) {
                    image.classList.remove('medium-image');
                    image.setAttribute('height', '100px');
                    image.removeAttribute('width');
                } else {
                    image.classList.add('medium-image');
                    image.setAttribute('height', '200px');
                    image.removeAttribute('width');
                }
            });
        });
    });

    @if(Session::has('message'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.error("{{ session('message') }}");
    @endif
</script>
@endsection