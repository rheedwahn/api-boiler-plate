<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete previous records
        DB::table('roles')->delete();

        //create a new role
        factory(\App\Models\Role::class)->create();
        factory(\App\Models\Role::class)->create([
            'name' => 'Doctor'
        ]);
        factory(\App\Models\Role::class)->create([
            'name' => 'Patient'
        ]);
    }
}
