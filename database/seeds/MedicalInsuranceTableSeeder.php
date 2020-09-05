<?php

use Illuminate\Database\Seeder;

class MedicalInsuranceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medical_insurances = [
            'I’m paying by myself', 'I don’t have an insurance', 'Avon HMO', 'Hygeia HMO', 'Axa Mansard', 'Redcare HMO',
            'Reliance HMO', 'Bupa', 'Allianz', 'Healthcare international', 'Metrohealth HMO', 'Venus Medicare Ltd',
            'Pro-Health HMO', 'Novo Health Africa HMO', 'Swift HMO', 'Leadway insurance', 'Clearline International Limited (HMO)',
            'Mediplan Healthcare Limited', 'Defence Health Maintenance', 'Princeton Health Limited', 'AIICO Multi-Shield',
            'Integrated Healthcare Limited', 'Total Health Trust', 'United Healthcare International', 'Premium Private Health Trust',
            'Ronsberger Nigeria', 'International Health Management Service', 'Expatcare Health International',
            'Songhai Health Trust', 'Premier Medical', 'Zenith Medicare', 'Wise Health Services', 'Fortecare',
            'Oceanic Health Management', 'Sterling health'
        ];

        foreach ($medical_insurances as $medical_insurance) {
            \App\Models\MedicalInsurance::firstOrCreate([
                'name' => $medical_insurance
            ]);
        }
    }
}
