<?php

use Illuminate\Database\Seeder;

class SpecialitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialities = [
            'Obstetrician & Gynaecologist', 'General Practice', 'Dermatologist', 'General surgeon', 'Nephrologist',
            'Physiotherapist', 'Orthopaedic Surgeon', 'Cardiologist', 'Ophthalmologist', 'Family Medicine',
            'Radiologist', 'Internal Medicine', 'Paediatrician', 'Psychiatrist', 'IVF And Fertility Specialists',
            'Public Health Physician', 'Haematologist', 'Community Medicine', 'Anaesthesiologist', 'Dentist',
            'Histopathologist', 'Haemato-Pathologist', 'Dental Surgeon', 'Medical Microbiologist', 'Chemical Pathologist',
            'Medical Officer', 'Ear, Nose & Throat Doctor (ENT)', 'Neurologist', 'Neurosurgeon', 'Urologist',
            'General Medical Practice', 'Paediatric Surgeon', 'Oral and Maxillofacial Surgeon', 'Pathologist',
            'Plastic Surgeon', 'Gastroenterologist', 'Dental Surgeon', 'Endocrinologist', 'Oncologist',
            'Community Medicine', 'Orthodontist', 'Orthopaedic Surgeon', 'Homoeopath', 'Yoga', 'Acupuncturist',
            'Psychologist', 'Audiologist', 'Speech therapists', 'Dietitian/Nutritionist'
        ];

        foreach ($specialities as $speciality) {
            \App\Models\Speciality::firstOrCreate([
                'name' => $speciality
            ]);
        }
    }
}
