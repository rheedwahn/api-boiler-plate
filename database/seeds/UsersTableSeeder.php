<?php
namespace Database\Seeders;

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
    public function run(): void
    {
        //delete previous user records
        DB::table('users')->delete();

        //create a new admin user record
        $user = User::factory()->create();

        //create profile for the admin user
        Profile::factory()->create([
            'user_id' => $user->first()->id
        ]);

        //assign user with the role admin
        $user->first()->assignRole('Admin');
    }
}
