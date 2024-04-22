<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            background:  url('{{ asset('frontend/assets/images/bg.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            /* padding: 0 10px; */
        }

        .wrapper {
            max-width: 950px;
            /* Updated width to 950px */
            width: 100%;
            /* background: transparent; */
            background-color: rgba(227, 227, 227, 0.5);
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

                ```css none;
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
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="title">
            Registration Form
        </div>

        <div class="form">
            <div class="form">
                <div class="inputfield">
                    <label>Application's Name: *</label>
                    <input type="text" class="input" name="application_name" value="{{ old('application_name') }}"
                        required>
                </div>
                <div class="inputfield">
                    <label>Name of the Institution: *</label>
                    <input type="text" class="input" name="institution_name" value="{{ old('institution_name') }}"
                        required>
                </div>
                <div class="inputfield">
                    <label>Department/Faculty: *</label>
                    <input type="text" class="input" name="department" value="{{ old('department') }}" required>
                </div>
                <div class="inputfield">
                    <label>Roll No: *</label>
                    <input type="text" class="input" name="roll_no" value="{{ old('roll_no') }}" required>
                </div>
                <div class="inputfield">
                    <label>Session: *</label>
                    <input type="text" class="input" name="session" value="{{ old('session') }}" required>
                </div>
                <div class="inputfield">
                    <label>Semester: *</label>
                    <input type="text" class="input" name="semester" value="{{ old('semester') }}" required>
                </div>
                <div class="inputfield">
                    <label>Gender: *</label>
                    <div class="custom_select">
                        <select name="gender" required>
                            <option value="">Select</option>
                            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                            <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                        </select>
                    </div>
                </div>
                <div class="inputfield">
                    <label>Date of Birth: *</label>
                    <input type="date" class="input" name="date_of_birth" value="{{ old('date_of_birth') }}"
                        required>
                </div>
                <div class="inputfield">
                    <label>Contact Number: *</label>
                    <input type="tel" class="input" name="contact_number" value="{{ old('contact_number') }}"
                        required>
                </div>
                <div class="inputfield">
                    <label>Email: *</label>
                    <input type="email" class="input" name="email" value="{{ old('email') }}" required>
                </div>
                <div class="inputfield">
                    <label>Mailing Address: *</label>
                    <textarea class="textarea" name="mailing_address" required>{{ old('mailing_address') }}</textarea>
                </div>
                <div class="inputfield">
                    <label>Bkash Number: *</label>
                    <input type="text" class="input" name="bkash_number" value="{{ old('bkash_number') }}"
                        required>
                </div>
                <div class="inputfield">
                    <label>District: *</label>
                    <input type="text" class="input" name="district" value="{{ old('district') }}" required>
                </div>
                <div class="inputfield">
                    <label>How do you know Syngenta? *</label>
                    <input type="text" class="input" name="syngenta_knowledge"
                        value="{{ old('syngenta_knowledge') }}" required>
                </div>
                <div class="inputfield">
                    <label>What is your career ambition? *</label>
                    <input type="text" class="input" name="career_ambition" value="{{ old('career_ambition') }}"
                        required>
                </div>
                <div class="inputfield">
                    <label>Applicant's Photo: *</label>
                    <input type="file" accept="image/*" name="applicant_photo" value="{{ old('applicant_photo') }}"
                        required>
                </div>
                <div class="inputfield">
                    <label>Student ID: *</label>
                    <input type="file" accept="image/*" name="student_id" value="{{ old('student_id') }}" required>
                </div>
                <div class="inputfield">
                    <label>Applicant's NID: *</label>
                    <input type="file" accept="image/*" name="applicant_nid" value="{{ old('applicant_nid') }}"
                        required>
                </div>
                <div class="inputfield">
                    <label>Academic Performance: 5th Semester *</label>
                    <input type="file" accept="application/pdf" name="academic_performance_5th"
                        value="{{ old('academic_performance_5th') }}" required>
                </div>
                <div class="inputfield">
                    <label>Academic Performance: 6th Semester *</label>
                    <input type="file" accept="application/pdf" name="academic_performance_6th"
                        value="{{ old('academic_performance_6th') }}" required>
                </div>
                <div class="inputfield">
                    <label>Upload Docs: *</label>
                    <input type="file" multiple name="upload_docs" value="{{ old('upload_docs') }}" required>
                </div>
                <!-- End of Integrated New Form Design -->

                <div class="inputfield">
                    <input type="submit" value="Register" class="btn">
                </div>
            </div>
        </div>

    </div>


</body>

</html>
