@extends('backend.layouts.app')
@section('content')
<div class="col-lg-12">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">General Form Elements</h5>

            <!-- General Form Elements -->
            <form>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Applicant Nmae</label>
                    <div class="col-sm-10">
                        <input type="text" name="application_name" class="form-control" value="{{$registration->application_name}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Name of the Institution</label>
                    <div class="col-sm-10">
                        <input type="text" name="institution_name" class="form-control" value="{{$registration->institution_name}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Department/Faculty</label>
                    <div class="col-sm-10">
                        <input type="text" name="department" class="form-control" value="{{$registration->department}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Roll No</label>
                    <div class="col-sm-10">
                        <input type="text" name="roll_no" class="form-control" value="{{$registration->roll_no}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Session</label>
                    <div class="col-sm-10">
                        <input type="text" name="session" class="form-control" value="{{$registration->session}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Semester</label>
                    <div class="col-sm-10">
                        <select name="semester" id="semester" class="form-control">
                            <option value="7thsemester" {{ $registration->semester == '7thsemester' ? 'selected': ''}}>7th Semester</option>
                            <option value="8thsemester" {{ $registration->semester == '8thsemester' ? 'selected': ''}}>8th Semester</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-10">
                        <select name="gender" id="" class="form-control">
                            <option value="male" {{ $registration->gender == 'male' ? 'selected': ''}}>Male</option>
                            <option value="female" {{ $registration->gender == 'female' ? 'selected': ''}}>Female</option>
                            <option value="other" {{ $registration->gender == 'other' ? 'selected': ''}}>Other</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Date of Birth</label>
                    <div class="col-sm-10">
                        <input type="date" name="date_of_birth" class="form-control" value="{{$registration->date_of_birth}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Contact Number</label>
                    <div class="col-sm-10">
                        <input type="text" name="contact_number" class="form-control" value="{{$registration->contact_number}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" value="{{$registration->email}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Mailing Address</label>
                    <div class="col-sm-10">
                        <input type="text" name="mailing_address" class="form-control" value="{{$registration->mailing_address}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Bkash Number</label>
                    <div class="col-sm-10">
                        <input type="text" name="bkash_number" class="form-control" value="{{$registration->bkash_number}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">How do you know Syngenta?</label>
                    <div class="col-sm-10">
                        <textarea name="syngenta_knowledge" class="form-control" id="" cols="30" rows="10">{{$registration->syngenta_knowledge}}</textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">What is your career ambition? </label>
                    <div class="col-sm-10">
                        <textarea name="career_ambition" class="form-control" id="" cols="30" rows="10">{{$registration->career_ambition}}</textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Applicant's Photo: </label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="applicant_photo" value="{{$registration->applicant_photo}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Student ID: </label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="student_id" value="{{$registration->student_id}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Applicant's NID: </label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="applicant_nid_front_side" value="{{$registration->applicant_nid_front_side}}">
                        <input type="file" class="form-control" name="applicant_nid_back_side" value="{{$registration->applicant_nid_back_side}}">
                    </div>
                </div>
                <span id="inputFieldsContainer"></span> <br>
                <div class="row mb-3" id="oldValue">
                    <label for="inputText" class="col-sm-2 col-form-label">
                        @if($registration->semester == '8thsemester')
                        {{'8th Semester Student'}}
                        @else
                        {{'7th Semester Student'}}
                        @endif
                    </label>
                    <div class="col-sm-10">
                        @if($registration->semester == '8thsemester')
                        <input type="file" class="form-control" name="applicant_nid_front_side" value="{{$registration->academic_performance_7th_for_8th}}">
                        <input type="file" class="form-control" name="applicant_nid_back_side" value="{{$registration->academic_performance_6th_for_8th}}">
                        @else
                        <input type="file" class="form-control" name="applicant_nid_front_side" value="{{$registration->academic_performance_6th_for_7th}}">
                        <input type="file" class="form-control" name="applicant_nid_back_side" value="{{$registration->academic_performance_5th_for_7th}}">
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Submit Button</label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit Form</button>
                    </div>
                </div>

            </form><!-- End General Form Elements -->

        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var semesterSelect = document.getElementById("semester");
        var oldValueDiv = document.getElementById("oldValue");

        semesterSelect.addEventListener("change", function() {
            var selectedSemester = semesterSelect.value;
            if (selectedSemester !== "") {
                oldValueDiv.style.display = "none";
            } else {
                oldValueDiv.style.display = "block";
            }
        });
    });

    document.getElementById("semester").addEventListener("change", function() {
        var selectedSemester = this.value;
        var inputFieldsContainer = document.getElementById("inputFieldsContainer");
        inputFieldsContainer.innerHTML = ""; // Clear previous content

        if (selectedSemester === "8thsemester") {
            inputFieldsContainer.innerHTML = `
                <div class="inputfield">
                    <label> 8th Semester Student : *</label>
                    <label> 7th semester marksheet</label>
                    <input type="file" accept="application/pdf" name="academic_performance_7th_for_8th" value="{{ old('academic_performance_7th_for_8th') }}" required>
                    @error('academic_performance_7th_for_8th')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <label> 6th semester marksheet</label>
                    <input type="file" accept="application/pdf" name="academic_performance_6th_for_8th" value="{{ old('academic_performance_6th_for_8th') }}" required>
                    @error('academic_performance_6th_for_8th')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>`;
        } else if (selectedSemester === "7thsemester") {
            inputFieldsContainer.innerHTML = `
                <div class="inputfield">
                    <label> 7th Semester Student : *</label>
                    <label for=""> 6th semester marksheet</label>
                    <input type="file" accept="application/pdf" name="academic_performance_6th_for_7th" value="{{ old('academic_performance_6th_for_7th') }}" required>
                    @error('academic_performance_6th_for_7th')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <label for=""> 5th semester marksheet</label>
                    <input type="file" accept="application/pdf" name="academic_performance_5th_for_7th" value="{{ old('academic_performance_5th_for_7th') }}" required>
                    @error('academic_performance_5th_for_7th')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>`;
        }
    });
</script>
@endsection