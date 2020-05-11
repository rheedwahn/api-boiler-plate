<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

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
        factory(Role::class)->create();
        factory(Role::class)->create([
            'name' => 'User'
        ]);
    }
}
