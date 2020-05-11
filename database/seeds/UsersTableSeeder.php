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

        //create a new user record
        $user = factory(User::class)->create();

        //create profile for the user
        factory(Profile::class)->create([
            'user_id' => $user->id
        ]);

        //assign user with the role admin
        $user->assignRole('Admin');
    }
}
