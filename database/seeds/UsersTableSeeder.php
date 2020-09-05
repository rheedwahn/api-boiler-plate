<?php

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete previous user records
        DB::table('users')->delete();

        //create a new admin user record
        $user = factory(User::class)->create();

        //create profile for the admin user
        factory(Profile::class)->create([
            'user_id' => $user->id
        ]);

        //assign user with the role admin
        $user->assignRole('Admin');

        //create a new doctor user record
        $doctor = factory(User::class)->create([
            'email' => 'doctor@doctor.com'
        ]);

        //create profile for the doctor
        factory(Profile::class)->create([
            'user_id' => $doctor->id
        ]);

        //assign user with the role doctor
        $doctor->assignRole('Doctor');

        //create a new patient user record
        $patient = factory(User::class)->create([
            'email' => 'patient@patient.com'
        ]);

        //create profile for the patient
        factory(Profile::class)->create([
            'user_id' => $patient->id
        ]);

        //assign user with the role patient
        $patient->assignRole('Patient');
    }
}
