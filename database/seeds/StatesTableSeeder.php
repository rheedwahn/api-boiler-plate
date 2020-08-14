<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            'Ikeja' => [
                'GRA', 'Ogba', 'Allen Avenue', 'Alausa', 'Maryland', 'Toyin', 'Obafemi Awolowo way', 'Oregun', 'Opebi',
                'Adeniyi Jones', 'Agidingbi', 'Ajao Estate', 'Mobolaji Bank Anthony', 'Airport Road', 'Oba Akran'
            ],
            'Lekki' => [
                'Lekki Phase 1', 'Lekki Epe Expressway', 'Chevron drive', 'Admiralty Way', 'Ajah', 'Ikate', 'Lekki Free Trade Zone',
                'Marwa Gardens', 'VGC', 'Osapa', 'Ibeju Lekki', 'Lekki Phase 2', 'Oniru'
            ],
            'Victoria Island' => [
                'Ahmadu Bello', 'Oniru', 'Adeola Odeku', 'Ozumba Mbadiwe', 'Adeola Hopewell', 'Adetokunbo Ademola',
                'Kofo Abayomi', 'Sandfill'
            ],
            'Ikorodu' => [
                'Igbogbo', 'Agric', 'Ijede Road', 'Ebute Ipakodo Road', 'Odogunyan', 'Odogunyan Road', 'Ikorodu Sagamu Road',
                'Ijede', 'Owotu Isawo Road', 'Haruna', 'Ikorodu Ijebu Ode Road', 'Baiyekun Igbogbo', 'Irawo', 'Ota Ona',
                'Sabo Itamaga Road', 'Aga', 'Ebute', 'Owode ibese road', 'Ita Elewa', 'Itamaga', 'Agbede', 'Asolo',
                'Ebute Ibeshe Road', 'Ikorodu Epe Road', 'Parafa', 'Sawmill'
            ],
            'Oshodi' => [
                'Isolo', 'Okota', 'Ajao Estate', 'Mafoluku', 'Apapa Oshodi Expressway', 'Ilasamaja', 'Shogunle',
                'Cement', 'Jakande'
            ],
            'Ikotun' => [
                'Igando', 'Egbe Road', 'Ijegun', 'Alimosho', 'Isheri Road', 'Ejigbo', 'LASU Road', 'Akesan Road', 'Isolo Road'
            ],
            'Festac' => [
                'Amuwo Odofin', 'Satellite Town', 'Festac Town', '1st Avenue', '4th Avenue', '6th Avenue', '2nd Avenue',
                '5th Avenue', '7th Avenue', 'Dubar Road', '3rd Avenue', 'Maza Maza'
            ],
            'Ikoyi' => [
                'Ikoyi Road', 'Awolowo Road', 'Parkview', 'Dolphin Estate', 'Bourdillon', 'Osbourne Road', 'Glover', 'Oniru Road'
            ],
            'Surulere' => [
                'Masha', 'Aguda', 'Ojuelegba', 'Itire', 'Lawanson', 'Western Avenue', 'Bode Thomas', 'Eric Moore', 'Ogunlana drive',
                'Adeniran Ogunsanya', 'Stadium', 'Adelabu'
            ],
            'Iyana Ipaja' => [
                'Ipaja', 'Gowon Estate', 'Ayobo'
            ],
            'Yaba' => [
                'Jibowu', 'Sabo', 'Ebute Metta', 'Alagomeji', 'Herbert Macaulay Way', 'Murtala Mohammed Way', 'Onike',
                'YabaTech', 'Ojuelegba Road'
            ],
            'Ketu' => [
                'Magodo', 'Ogudu', 'Ojota', 'Ketu', 'Alapere', 'Ikosi Ketu', 'CMD', 'Mile 12'
            ],
            'Ojo' => [
                'Lagos Badagry Exp Way', 'Okokomaiko', 'Iyana Iba Road', 'Alaba Market', 'Ojo Igbede', 'Iyana Era road',
                'Ilogbo Road', 'Igbo Elerin Road', 'Lasu Gate', 'Muwo Tedi Road'
            ],
            'Egbeda' => [
                'Idimu', 'Akowonjo', 'Shasha Road', 'Egbeda', 'Isheri olofin'
            ],
            'Agege' => [
                'Ijaiye Road', 'Iju Ishaga', 'Old Abeokuta Road', 'Fagba Road', 'Iju Road', 'Old Oko Oba Road',
                'Orile Agege', 'Dopemu', 'Papa Ashafa', 'Pen Cinema'
            ],
            'Ajah' => [
                'Lekki Epe Expressway', 'Addo Road', 'Sangotedo', 'Abraham Adesanya', 'Badore', 'Ikota', 'Langbasa Road'
            ],
            'Abule Egba' => [
                'Oko Oba', 'Ekoro Road', 'Meiran', 'UTurn', 'Ilepo', 'Abule Egba Bus stop', 'Abule Taylor', 'Fagba',
                'Old Otta Road'
            ],
            'Badagry' => [
                'Lagos Badagry Exp Way', 'Agbara', 'Ajara', 'Mowo', 'Oko Afo Road', 'Hospital Road', 'Joseph Dosu Way',
                'Seje Road', 'Toga Road', 'Zone 2'
            ],
            'Ojodu' => [
                'Ojodu Berger', 'Omole Phase 1', 'Isheri', 'Lateef Jakande Road'
            ],
            'Bariga' => [
                'Gbagada', 'Akoka', 'Fola Agoro', 'Abule Ijesha', 'Abule Okuta', 'Ilaje'
            ],
            'Lagos Island' => [
                'Lagos Island', 'Marina', 'Onikan', 'Broad Street', 'Obalende', 'Tafawa Balewa Square'
            ],
            'Alagbado' => [
                'AIT Road', 'Meiran Road', 'Amikanle Road', 'Oke Aro Road'
            ],
            'Apapa' => [
                'Apapa Quays', 'Ajegunle'
            ],
            'Ifako Ijaiye' => [
                'Agbado', 'Alakuko Road', 'Fagba', 'Iju', 'Ojokoro', 'Ijaiye Bus Stop', 'Jankara'
            ],
            'Obanikoro' => [
                'Ilupeju', 'Anthony', 'Obanikoro'
            ],
            'Palmgroove' => [
                'Shomolu', 'Palmgroove', 'Fadeyi', 'Onipanu'
            ],
            'Mushin' => [
                'Ilasamaja', 'Isolo Road', 'Olorunsongo', 'Ladipo', 'Idiaraba', 'Mosholashi'
            ],
            'Anthony' => [
                'Anthony Village', 'Idiroko'
            ],
            'Epe' => [
                'Ikorodu Epe Expressway', 'Noforije', 'Epetu', 'G R A Road', 'Lagos Epe Road', 'Lekki Epe Expressway'
            ],
            'Orile Iganmu' => [
                'Coker Road', 'Orile'
            ],
            'Akowonjo' => [
                'Akowonjo', 'Shasha'
            ],
            'Alakuko' => [
                'Amje', 'Ahmadiyya', 'Ibari Road', 'Old Ota Road'
            ],
            'Akute' => [
                'Alagbole Road', 'Ifo'
            ],
            'Igando' => [
                'Iron Market'
            ],
            'Omole Phase 1' => [
                'Omole Phase 1'
            ]
        ];

        $state = \App\Models\State::firstOrCreate([
            'name' => 'Lagos'
        ]);

        foreach ($cities as $key => $value) {
            $city = \App\Models\City::firstOrCreate(
                ['name' => $key],
                [
                    'state_id' => $state->id
                ]
            );
            foreach ($value as $item) {
                \App\Models\Locality::firstOrCreate(
                    ['name' => $item],
                    [
                        'city_id' => $city->id
                    ]
                );
            }
        }

    }
}
