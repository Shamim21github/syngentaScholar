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
            'bkash_number' => $this->faker->phoneNumber,
            'syngenta_knowledge' => $this->faker->boolean,
            'career_ambition' => $this->faker->sentence,
            'applicant_photo' => $this->faker->imageUrl(),
            'student_id' => $this->faker->imageUrl(),
            'applicant_nid_front_side' => $this->faker->imageUrl(),
            'applicant_nid_back_side' => $this->faker->imageUrl(),
            'academic_performance_7th_for_8th' => $this->faker->imageUrl(),
            'academic_performance_6th_for_8th' => $this->faker->imageUrl(),
            'academic_performance_6th_for_7th' => $this->faker->imageUrl(),
            'academic_performance_5th_for_7th' => $this->faker->imageUrl(),
        ];
    }
}
