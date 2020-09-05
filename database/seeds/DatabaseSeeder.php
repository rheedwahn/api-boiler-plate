<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        //$this->call(UsersTableSeeder::class);
        $this->call(SpecialitiesTableSeeder::class);
        $this->call(DiseaseConditionTableSeeder::class);
        $this->call(MedicalInsuranceTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(ProceduresTableSeeder::class);
    }
}
