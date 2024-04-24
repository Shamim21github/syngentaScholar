<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registration_lists = Registration::orderBy('id', 'DESC')->get();
        return view('backend.pages.registrationslist', get_defined_vars());
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
            'district' => 'required|string',
            'syngenta_knowledge' => 'required|string',
            'career_ambition' => 'required|string',
            'applicant_photo' => 'required|image', // For image upload
            'student_id' => 'required|image',
            'applicant_nid' => 'required|image',
            'academic_performance_5th' => 'required|mimes:pdf',
            'academic_performance_6th' => 'required|mimes:pdf',
            'upload_docs' => 'required',
        ]);
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
        // Upload applicant_nid
        if ($request->hasFile('applicant_nid')) {
            // Upload the image to the 'public' disk under the 'images' directory
            $imagePath = $request->file('applicant_nid')->store('images', 'public');

            // Save the relative path of the image in the database
            $validatedData['applicant_nid'] = $imagePath;
        }
        // Upload academic_performance_5th
        if ($request->hasFile('academic_performance_5th')) {
            // Upload the image to the 'public' disk under the 'images' directory
            $imagePath = $request->file('academic_performance_5th')->store('images', 'public');

            // Save the relative path of the image in the database
            $validatedData['academic_performance_5th'] = $imagePath;
        }
        // Upload academic_performance_6th
        if ($request->hasFile('academic_performance_6th')) {
            // Upload the image to the 'public' disk under the 'images' directory
            $imagePath = $request->file('academic_performance_6th')->store('images', 'public');

            // Save the relative path of the image in the database
            $validatedData['academic_performance_6th'] = $imagePath;
        }
        // Upload upload_docs
        if ($request->hasFile('upload_docs')) {
            // Upload the image to the 'public' disk under the 'images' directory
            $imagePath = $request->file('upload_docs')->store('images', 'public');

            // Save the relative path of the image in the database
            $validatedData['upload_docs'] = $imagePath;
        }
        // Create a new instance of YourModel
        $model = new Registration();

        // Fill the instance with the validated data
        $model->fill($validatedData);

        // Save the record
        $model->save();

        // Optionally, you can return a response
        // return response()->json(['message' => 'Data stored successfully'], 201);
        return redirect('result');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $registration = Registration::find($id);
        return view('backend.pages.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $registration = Registration::find($id);
        return view('backend.pages.edit', get_defined_vars());
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
