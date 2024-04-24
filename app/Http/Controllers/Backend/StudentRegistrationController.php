<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;

class StudentRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // Validate incoming request data
        $validatedData = $request->validate([
            'application_name' => 'required|string',
            'institution_name' => 'required|string',
            'department' => 'required|string',
            'roll_no' => 'required|string',
            'session' => 'required|string',
            'semester' => 'required|string',
            'gender' => 'required|string',
            'date_of_birth' => 'required|date',
            'contact_number' => 'required|string',
            'email' => 'required|email|unique:registrations,email',
            'mailing_address' => 'required|string',
            'bkash_number' => 'required|string',
            'syngenta_knowledge' => 'required|string|max:250',
            'career_ambition' => 'required|string|max:250',
            'applicant_photo' => 'required|image',
            'student_id' => 'required|image',
            'applicant_nid_front_side' => 'required|image',
            'applicant_nid_back_side' => 'required|image',
        ] + ($request->has('academic_performance_7th_for_8th') ? [
            'academic_performance_7th_for_8th' => 'required|mimes:pdf',
            'academic_performance_6th_for_8th' => 'required|mimes:pdf',
        ] : [
            'academic_performance_6th_for_7th' => 'required|mimes:pdf',
            'academic_performance_5th_for_7th' => 'required|mimes:pdf'
        ]));

        // Upload applicant_photo
        if ($request->hasFile('applicant_photo')) {
            // Upload the image to the 'public' disk under the 'images' directory
            $imagePath = $request->file('applicant_photo')->store('images', 'public');

            // Save the relative path of the image in the database
            $validatedData['applicant_photo'] = $imagePath;
        }
        // Upload student_id
        if ($request->hasFile('student_id')) {
            // Upload the image to the 'public' disk under the 'images' directory
            $imagePath = $request->file('student_id')->store('images', 'public');

            // Save the relative path of the image in the database
            $validatedData['student_id'] = $imagePath;
        }
        // Upload applicant_nid_front_side
        if ($request->hasFile('applicant_nid_front_side')) {
            // Upload the image to the 'public' disk under the 'images' directory
            $imagePath = $request->file('applicant_nid_front_side')->store('images', 'public');

            // Save the relative path of the image in the database
            $validatedData['applicant_nid_front_side'] = $imagePath;
        }
        // Upload applicant_nid_back_side
        if ($request->hasFile('applicant_nid_back_side')) {
            // Upload the image to the 'public' disk under the 'images' directory
            $imagePath = $request->file('applicant_nid_back_side')->store('images', 'public');

            // Save the relative path of the image in the database
            $validatedData['applicant_nid_back_side'] = $imagePath;
        }
        // Upload academic_performance_7th_for_8th
        if ($request->hasFile('academic_performance_7th_for_8th')) {
            // Upload the image to the 'public' disk under the 'images' directory
            $imagePath = $request->file('academic_performance_7th_for_8th')->store('images', 'public');

            // Save the relative path of the image in the database
            $validatedData['academic_performance_7th_for_8th'] = $imagePath;
        }
        // Upload academic_performance_6th_for_8th
        if ($request->hasFile('academic_performance_6th_for_8th')) {
            // Upload the image to the 'public' disk under the 'images' directory
            $imagePath = $request->file('academic_performance_6th_for_8th')->store('images', 'public');

            // Save the relative path of the image in the database
            $validatedData['academic_performance_6th_for_8th'] = $imagePath;
        }
        // Upload academic_performance_6th_for_7th
        if ($request->hasFile('academic_performance_6th_for_7th')) {
            // Upload the image to the 'public' disk under the 'images' directory
            $imagePath = $request->file('academic_performance_6th_for_7th')->store('images', 'public');

            // Save the relative path of the image in the database
            $validatedData['academic_performance_6th_for_7th'] = $imagePath;
        }
        // Upload academic_performance_5th_for_7th
        if ($request->hasFile('academic_performance_5th_for_7th')) {
            // Upload the image to the 'public' disk under the 'images' directory
            $imagePath = $request->file('academic_performance_5th_for_7th')->store('images', 'public');

            // Save the relative path of the image in the database
            $validatedData['academic_performance_5th_for_7th'] = $imagePath;
        }
        // Create a new instance of YourModel
        $model = new Registration();

        // Fill the instance with the validated data
        $model->fill($validatedData);

        // Save the record
        $model->save();
        return redirect('result')->with('message', 'Congratulations your application is accepted');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
