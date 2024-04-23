<?php

namespace Database\Factories;

use App\Models\Registration;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'application_name' => $this->faker->sentence,
            'institution_name' => $this->faker->company,
            'department' => $this->faker->jobTitle,
            'roll_no' => $this->faker->unique()->randomNumber(5),
            'session' => $this->faker->randomElement(['2023-2024', '2024-2025', '2025-2026']),
            'semester' => $this->faker->randomElement(['Spring', 'Summer', 'Fall']),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'date_of_birth' => $this->faker->date(),
            'contact_number' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'mailing_address' => $this->faker->address,
            'bkash_number' => $this->faker->phoneNumber, // Assuming bKash number can be a phone number
            'district' => $this->faker->city,
            'syngenta_knowledge' => $this->faker->boolean,
            'career_ambition' => $this->faker->sentence,
            'applicant_photo' => $this->faker->imageUrl(), // Generating a fake image URL
            'student_id' => $this->faker->imageUrl(),
            'applicant_nid' => $this->faker->imageUrl(),
            'academic_performance_5th' => $this->faker->imageUrl(), // Assuming GPA format
            'academic_performance_6th' => $this->faker->imageUrl(), // Assuming GPA format
            'upload_docs' => $this->faker->url // Generating a fake URL for uploaded documents
        ];
    }
}
