<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agri Scholarship Registration Form</title>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {

            /* background: url('{{ asset('frontend/assets/images/registration5.png') }}') no-repeat center center fixed; */

            background: url('{{ asset('frontend/assets/images/final/registrationnewFinal.jpg') }}') no-repeat center center fixed;

            /* background:  url('{{ asset('frontend/assets/images/bg.jpg') }}') no-repeat center center fixed; */
            /* padding: 0 10px; */
            /* background: url('{{ asset('frontend/assets/images/registration2.png') }}') no-repeat center center; */
            /* background-size: contain; */
            background-size: cover;
        }

        .wrapper {
            max-width: 950px;
            /* Updated width to 950px */
            width: 100%;
            /* background: transparent; */
            /* background: url('{{ asset('frontend/assets/images/REGISTRATION-FORM10.jpg') }}') */
            background-color: rgba(238, 225, 225, 0.5);
            /* Updated background color to transparent */
            margin: 50px auto;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.125);
            padding: 30px;
            font-weight: bold;
        }

        .wrapper .title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 25px;
            color: #0c03b8;
            text-transform: uppercase;
            text-align: center;
        }

        .wrapper .form {
            width: 100%;
        }

        .wrapper .form .inputfield {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .wrapper .form .inputfield label {
            width: 200px;
            color: #757575;
            margin-right: 10px;
            font-size: 14px;
        }

        .wrapper .form .inputfield .input,
        .wrapper .form .inputfield .textarea {
            width: 100%;
            outline: none;
            border: 1px solid #d5dbd9;
            font-size: 15px;
            padding: 8px 10px;
            border-radius: 3px;
            transition: all 0.3s ease;
        }

        .wrapper .form .inputfield .textarea {
            width: 100%;
            height: 125px;
            resize: none;
        }

        .wrapper .form .inputfield .custom_select {
            position: relative;
            width: 100%;
            height: 37px;
        }

        .wrapper .form .inputfield .custom_select:before {
            content: "";
            position: absolute;
            top: 12px;
            right: 10px;
            border: 8px solid;
            border-color: #d5dbd9 transparent transparent transparent;
            pointer-events: none;
        }

        .wrapper .form .inputfield .custom_select select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: none;
            width: 100%;
            height: 100%;
            border: 0px;
            padding: 8px 10px;
            font-size: 15px;
            border: 1px solid #d5dbd9;
            border-radius: 3px;
        }


        .wrapper .form .inputfield .input:focus,
        .wrapper .form .inputfield .textarea:focus,
        .wrapper .form .inputfield .custom_select select:focus {
            border: 1px solid #0c03b8;
        }

        .wrapper .form .inputfield p {
            font-size: 14px;
            color: #757575;
        }

        .wrapper .form .inputfield .check {
            width: 15px;
            height: 15px;
            position: relative;
            display: block;
            cursor: pointer;
        }

        .wrapper .form .inputfield .check input[type="checkbox"] {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
        }


        .wrapper .form .inputfield .check .checkmark {
            width: 15px;
            height: 15px;
            border: 1px solid #0c03b8;
            display: block;
            position: relative;
        }

        .wrapper .form .inputfield .check .checkmark:before {
            content: "";
            position: absolute;
            top: 1px;
            left: 2px;
            width: 5px;
            height: 2px;
            border: 2px solid;
            border-color: transparent transparent #fff #fff;
            transform: rotate(-45deg);
            display: none;
        }

        .wrapper .form .inputfield .check input[type="checkbox"]:checked~.checkmark {
            background: #0c03b8;
        }

        .wrapper .form .inputfield .check input[type="checkbox"]:checked~.checkmark:before {
            display: block;
        }

        .wrapper .form .inputfield .btn {
            width: 100%;
            padding: 8px 10px;
            font-size: 15px;
            border: 0px;
            background: #0c03b8;
            color: #fff;
            cursor: pointer;
            border-radius: 3px;
            outline: Here's the continuation of the CSS code:
 css none;
        }

        .wrapper .form .inputfield .btn:hover {
            background: #030043;
        }

        .wrapper .form .inputfield:last-child {
            margin-bottom: 0;
        }

        @media (max-width:420px) {
            .wrapper .form .inputfield {
                flex-direction: column;
                align-items: flex-start;
            }

            .wrapper .form .inputfield label {
                margin-bottom: 5px;
            }

            .wrapper .form .inputfield.terms {
                flex-direction: row;
            }
        }

        .text-danger {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">

        <div style="margin-top:10px; margin-left:300px;font-weight: bold" >
            <a href="{{ route('home') }}">Home</a>
         </div>



        <div class="wrapper">
            {{-- <div class="logo">
                <a href=""> <img src="background: url('{{ asset('frontend/assets/images/registration5.png') }}')" alt=""> </a>
    </div> --}}
            <div class="title">
                Registration Form
            </div>
            <form action="{{ route('student-registrations.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form">
                    <div class="form">
                        <div class="inputfield">
                            <label>Applicant's Name: *</label>
                            <input type="text" class="input" name="application_name"
                                value="{{ old('application_name') }}" required>
                            @error('application_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="inputfield">
                            <label>Name of the Institution: *</label>
                            <input type="text" class="input" name="institution_name"
                                value="{{ old('institution_name') }}" required>
                            @error('institution_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="inputfield">
                            <label>Department/Faculty: *</label>
                            <input type="text" class="input" name="department" value="{{ old('department') }}"
                                required>
                            @error('department')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="inputfield">
                            <label>Roll No: *</label>
                            <input type="number" class="input" name="roll_no" value="{{ old('roll_no') }}" required>
                            @error('roll_no')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="inputfield">
                            <label>Session: *</label>
                            <input type="number" class="input" name="session" value="{{ old('session') }}" required>
                            @error('session')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="inputfield">
                            <label>Semester: *</label>
                            <div class="custom_select">
                                <select name="semester" id="semester" required>
                                    <option value="">Select</option>
                                    <option value="8thsemester"
                                        {{ old('8thsemester') == '8thsemester' ? 'selected' : '' }}>8th semester
                                    </option>
                                    <option value="7thsemester"
                                        {{ old('7thsemester') == '7thsemester' ? 'selected' : '' }}>7th semester
                                    </option>
                                </select>
                                @error('semester')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="inputfield">
                            <label>Gender: *</label>
                            <div class="custom_select">
                                <select name="gender" required>
                                    <option value="">Select</option>
                                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male
                                    </option>
                                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female
                                    </option>
                                    <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other
                                    </option>
                                </select>
                                @error('gender')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="inputfield">
                            <label>Date of Birth: *</label>
                            <input type="date" class="input" name="date_of_birth"
                                value="{{ old('date_of_birth') }}" required>
                            @error('date_of_birth')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="inputfield">
                            <label>Contact Number: *</label>
                            <input type="tel" class="input" name="contact_number"
                                value="{{ old('contact_number') }}" required>
                            @error('contact_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="inputfield">
                            <label>Email: *</label>
                            <input type="email" class="input" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="inputfield">
                            <label>Mailing Address: *</label>
                            <textarea class="textarea" name="mailing_address" required>{{ old('mailing_address') }}</textarea>
                            @error('mailing_address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="inputfield">
                            <label>Bkash Number: *</label>
                            <input type="text" class="input" name="bkash_number" value="{{ old('bkash_number') }}"
                                required>
                            @error('bkash_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="inputfield">
                            <label>How do you know Syngenta? *</label>
                            <textarea id="syngentaTextarea" class="input" name="syngenta_knowledge" placeholder="250 words maximum" required>{{ old('syngenta_knowledge') }}</textarea>
                            <!-- <span id="wordCount" class="text-muted">0 words</span> -->
                            @error('syngenta_knowledge')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="inputfield">
                            <label>What is your career ambition? *</label>
                            <input id="careerAmbitionInput" type="text" class="input" name="career_ambition"
                                value="{{ old('career_ambition') }}" placeholder="250 words maximum" required>
                            @error('career_ambition')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="inputfield">
                            <label>Applicant's Photo: (300 x 300 px) *</label>
                            <input type="file" accept="image/*" name="applicant_photo" id="applicant_photo"
                                onchange="validateImage()" required>
                            @error('applicant_photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <span id="error-message"></span>
                        </div>
                        <div class="inputfield">
                            <label>Student ID: *</label>
                            <input type="file" accept="image/*" name="student_id"
                                value="{{ old('student_id') }}" required>
                            @error('student_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="inputfield">
                            <label>Applicant's NID: *</label>
                            <label for="">Front Side</label>
                            <input type="file" accept="image/*" name="applicant_nid_front_side"
                                value="{{ old('applicant_nid_front_side') }}" required>
                            @error('applicant_nid_front_side')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <label for="">Back Side</label>
                            <input type="file" accept="image/*" name="applicant_nid_back_side"
                                value="{{ old('applicant_nid_back_side') }}" required>
                            @error('applicant_nid_back_side')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <span id="inputFieldsContainer"></span> <br>
                        <!-- End of Integrated New Form Design -->

                        <div class="inputfield">
                            <input type="submit" value="Submit" class="btn">
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
    <script>
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
        // Get the textarea element by its id
        var textarea = document.getElementById('syngentaTextarea');

        // Add event listener for input events
        textarea.addEventListener('input', function() {
            // Get the current length of the textarea value
            var charCount = this.value.length;

            // Check if character limit exceeds 250
            if (charCount > 250) {
                // Trim the excess characters
                var trimmedValue = this.value.slice(0, 250);
                // Update the textarea value
                this.value = trimmedValue;
                // Disable the textarea
                this.disabled = true;
            }
        });
        // Get the input element by its id
        var inputField = document.getElementById('careerAmbitionInput');

        // Add event listener for input events
        inputField.addEventListener('input', function() {
            // Get the current length of the input value
            var charCount = this.value.length;

            // Check if character limit exceeds 250
            if (charCount > 250) {
                // Trim the excess characters
                var trimmedValue = this.value.slice(0, 250);
                // Update the input value
                this.value = trimmedValue;
                // Disable the input field
                this.disabled = true;
            }
        });

        function validateImage() {
            var input = document.getElementById('applicant_photo');
            var file = input.files[0];

            // Clear existing error message
            var errorMessage = document.getElementById('error-message');
            if (errorMessage) {
                errorMessage.remove();
            }

            if (file) {
                var img = new Image();
                img.src = window.URL.createObjectURL(file);

                img.onload = function() {
                    if (this.width !== 300 || this.height !== 300) {
                        var errorSpan = document.createElement('span');
                        errorSpan.setAttribute('id', 'error-message');
                        errorSpan.classList.add('text-danger');
                        errorSpan.textContent = 'Image must be 300x300 pixels.';
                        input.parentNode.appendChild(errorSpan);
                        input.value = ''; // Clear the file input
                    }
                };
            }
        }
    </script>

</body>

</html>
