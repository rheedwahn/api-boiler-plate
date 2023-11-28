<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
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

        $nigeria = \App\Models\Country::firstOrCreate([
            'name' => 'Nigeria'
        ]);

        $lagos = \App\Models\State::firstOrCreate([
            'country_id' => $nigeria->id,
            'name' => 'Lagos'
        ]);

        $other_states = [
            'Abia' => [
                'Aba North', 'Aba South', 'Arochukwu', 'Bende', 'Ikwuano', 'Isiala Ngwa North', 'Isiala Ngwa South',
                'Isuikwuato', 'Obi Ngwa', 'Ohafia', 'Osisioma', 'Ugwunagbo', 'Ukwa East', 'Ukwa West', 'Umuahia North',
                'Umuahia South', 'Umu Nneochi'
            ],
            'Adamawa' => [
                'Demsa', 'Fufure', 'Ganye', 'Gayuk', 'Gombi', 'Grie', 'Hong', 'Jada', 'Larmurde', 'Madagali', 'Maiha',
                'Mayo Belwa', 'Michika', 'Mubi North', 'Mubi South', 'Numan', 'Shelleng', 'Song', 'Toungo', 'Yola North',
                'Yola South'
            ],
            'Akwa Ibom' => [
                'Abak', 'Eastern Obolo', 'Eket', 'Esit Eket', 'Essien Udim', 'Etim Ekpo', 'Etinan', 'Ibeno', 'Ibesikpo Asutan',
                'Ibiono-Ibom', 'Ika', 'Ikono', 'Ikot Abasi', 'Ikot Ekpene', 'Ini', 'Itu', 'Mbo', 'Mkpat-Enin', 'Nsit-Atai',
                'Nsit-Ibom', 'Nsit-Ubium', 'Obot Akara', 'Okobo', 'Onna', 'Oron', 'Oruk Anam', 'Udung-Uko', 'Ukanafun',
                'Uruan', 'Urue-Offong/Oruko', 'Uyo'
            ],
            'Anambra' => [
                'Aguata', 'Anambra East', 'Anambra West', 'Anaocha', 'Awka North', 'Awka South', 'Ayamelum', 'Dunukofia',
                'Ekwusigo', 'Idemili North', 'Idemili South', 'Ihiala', 'Njikoka', 'Nnewi North', 'Nnewi South', 'Ogbaru',
                'Onitsha North', 'Onitsha South', 'Orumba North', 'Orumba South', 'Oyi'
            ],
            'Bauchi' => [
                'Alkaleri', 'Bauchi', 'Bogoro', 'Damban', 'Darazo', 'Dass', 'Gamawa', 'Ganjuwa', 'Giade', 'Itas/Gadau',
                'Jama`are', 'Katagum', 'Kirfi', 'Misau', 'Ningi', 'Shira', 'Tafawa Balewa', 'Toro', 'Warji', 'Zaki'
            ],
            'Bayelsa' => [
                'Brass', 'Ekeremor', 'Kolokuma/Opokuma', 'Nembe', 'Ogbia', 'Sagbama', 'Southern Ijaw', 'Yenagoa'
            ],
            'Benue' => [
                'Agatu', 'Apa', 'Ado', 'Buruku', 'Gboko', 'Guma', 'Gwer East', 'Gwer West', 'Katsina-Ala', 'Konshisha',
                'Kwande', 'Logo', 'Makurdi', 'Obi', 'Ogbadibo', 'Ohimini', 'Oju', 'Okpokwu', 'Oturkpo', 'Tarka', 'Ukum',
                'Ushongo', 'Vandeikya'
            ],
            'Borno' => [
                'Abadam', 'Askira/Uba', 'Bama', 'Bayo', 'Biu', 'Chibok', 'Damboa', 'Dikwa', 'Gubio', 'Guzamala', 'Gwoza',
                'Hawul', 'Jere', 'Kaga', 'Kala/Balge', 'Konduga', 'Kukawa', 'Kwaya Kusar', 'Mafa', 'Magumeri', 'Maiduguri',
                'Marte', 'Mobbar', 'Monguno', 'Ngala', 'Nganzai', 'Shani'
            ],
            'Cross River' => [
                'Abi' => 'Akamkpa', 'Akpabuyo', 'Bakassi', 'Bekwarra', 'Biase', 'Boki', 'Calabar Municipal', 'Calabar South',
                'Etung', 'Ikom', 'Obanliku', 'Obubra', 'Obudu', 'Odukpani', 'Ogoja', 'Yakuur', 'Yala'
            ],
            'Delta' => [
                'Aniocha North', 'Aniocha South', 'Bomadi', 'Burutu', 'Ethiope East', 'Ethiope West', 'Ika North East',
                'Ika South', 'Isoko North', 'Isoko South', 'Ndokwa East', 'Ndokwa West', 'Okpe', 'Oshimili North',
                'Oshimili South', 'Patani', 'Sapele', 'Udu', 'Ughelli North', 'Ughelli South', 'Ukwuani', 'Uvwie', 'Warri North',
                'Warri South', 'Warri South West'
            ],
            'Ebonyi' => [
                'Abakaliki', 'Afikpo North', 'Afikpo South', 'Ebonyi', 'Ezza North', 'Ezza South', 'Ikwo', 'Ishielu',
                'Ivo', 'Izzi', 'Ohaozara', 'Ohaukwu', 'Onicha'
            ],
            'Edo' => [
                'Akoko-Edo', 'Egor', 'Esan Central', 'Esan North-East', 'Esan South-East', 'Esan West', 'Etsako Central',
                'Etsako East', 'Etsako West', 'Igueben', 'Ikpoba Okha', 'Orhionmwon', 'Oredo', 'Ovia North-East',
                'Ovia South-West', 'Owan East', 'Owan West', 'Uhunmwonde'
            ],
            'Ekiti' => [
                'Ado Ekiti', 'Efon', 'Ekiti East', 'Ekiti South-West', 'Ekiti West', 'Emure', 'Gbonyin', 'Ido Osi', 'Ijero',
                'Ikere', 'Ikole', 'Ilejemeje', 'Irepodun/Ifelodun', 'Ise/Orun', 'Moba', 'Oye'
            ],
            'Enugu' => [
                'Aninri', 'Awgu', 'Enugu East', 'Enugu North', 'Enugu South', 'Ezeagu', 'Igbo Etiti', 'Igbo Eze North',
                'Igbo Eze South', 'Isi Uzo', 'Nkanu East', 'Nkanu West', 'Nsukka', 'Oji River', 'Udenu', 'Udi', 'Uzo Uwani'
            ],
            'FCT' => [
                'Abaji', 'Bwari', 'Gwagwalada', 'Kuje', 'Kwali', 'Municipal Area Council'
            ],
            'Gombe' => [
                'Akko', 'Balanga', 'Billiri', 'Dukku', 'Funakaye', 'Gombe', 'Kaltungo', 'Kwami', 'Nafada', 'Shongom',
                'Yamaltu/Deba'
            ],
            'Imo' => [
                'Aboh Mbaise', 'Ahiazu Mbaise', 'Ehime Mbano', 'Ezinihitte', 'Ideato North', 'Ideato South', 'Ihitte/Uboma',
                'Ikeduru', 'Isiala Mbano', 'Isu', 'Mbaitoli', 'Ngor Okpala', 'Njaba', 'Nkwerre', 'Nwangele', 'Obowo',
                'Oguta', 'Ohaji/Egbema', 'Okigwe', 'Orlu', 'Orsu', 'Oru East', 'Oru West', 'Owerri Municipal',
                'Owerri North', 'Owerri West', 'Unuimo'
            ],
            'Jigawa' => [
                'Auyo', 'Babura', 'Biriniwa', 'Birnin Kudu', 'Buji', 'Dutse', 'Gagarawa', 'Garki', 'Gumel', 'Guri', 'Gwaram',
                'Gwiwa', 'Hadejia', 'Jahun', 'Kafin Hausa', 'Kazaure', 'Kiri Kasama', 'Kiyawa', 'Kaugama', 'Maigatari',
                'Malam Madori', 'Miga', 'Ringim', 'Roni', 'Sule Tankarkar', 'Taura', 'Yankwashi'
            ],
            'Kaduna' => [
                'Birnin Gwari', 'Chikun', 'Giwa', 'Igabi', 'Ikara', 'Jaba', 'Jema`a', 'Kachia', 'Kaduna North', 'Kaduna South',
                'Kagarko', 'Kajuru', 'Kaura', 'Kauru', 'Kubau', 'Kudan', 'Lere', 'Makarfi', 'Sabon Gari', 'Sanga', 'Soba',
                'Zangon Kataf', 'Zaria'
            ],
            'Kano' => [
                'Ajingi', 'Albasu', 'Bagwai', 'Bebeji', 'Bichi', 'Bunkure', 'Dala', 'Dambatta', 'Dawakin Kudu', 'Dawakin Tofa',
                'Doguwa', 'Fagge', 'Gabasawa', 'Garko', 'Garun Mallam', 'Gaya', 'Gezawa', 'Gwale', 'Gwarzo', 'Kabo', 'Kano Municipal',
                'Karaye', 'Kibiya', 'Kiru', 'Kumbotso', 'Kunchi', 'Kura', 'Madobi', 'Makoda', 'Minjibir', 'Nasarawa', 'Rano',
                'Rimin Gado', 'Rogo', 'Shanono', 'Sumaila', 'Takai', 'Tarauni', 'Tofa', 'Tsanyawa', 'Tudun Wada', 'Ungogo',
                'Warawa', 'Wudil'
            ],
            'Katsina' => [
                'Bakori', 'Batagarawa', 'Batsari', 'Baure', 'Bindawa', 'Charanchi', 'Dandume', 'Danja', 'Dan Musa', 'Daura',
                'Dutsi', 'Dutsin Ma', 'Faskari', 'Funtua', 'Ingawa', 'Jibia', 'Kafur', 'Kaita', 'Kankara', 'Kankia', 'Katsina',
                'Kurfi', 'Kusada', 'Mai`Adua', 'Malumfashi', 'Mani', 'Mashi', 'Matazu', 'Musawa', 'Rimi', 'Sabuwa', 'Safana',
                'Sandamu', 'Zango'
            ],
            'Kebbi' => [
                'Aleiro', 'Arewa Dandi', 'Argungu', 'Augie', 'Bagudo', 'Birnin Kebbi', 'Bunza', 'Dandi', 'Fakai', 'Gwandu',
                'Jega', 'Kalgo', 'Koko/Besse', 'Maiyama', 'Ngaski', 'Sakaba', 'Shanga', 'Suru', 'Wasagu/Danko', 'Yauri',
                'Zuru'
            ],
            'Kogi' => [
                'Adavi', 'Ajaokuta', 'Ankpa', 'Bassa', 'Dekina', 'Ibaji', 'Idah', 'Igalamela Odolu', 'Ijumu', 'Kabba/Bunu',
                'Kogi', 'Lokoja', 'Mopa Muro', 'Ofu', 'Ogori/Magongo', 'Okehi', 'Okene', 'Olamaboro', 'Omala', 'Yagba East',
                'Yagba West'
            ],
            'Kwara' => [
                'Asa', 'Baruten', 'Edu', 'Ekiti', 'Ifelodun', 'Ilorin East', 'Ilorin South', 'Ilorin West', 'Irepodun',
                'Isin', 'Kaiama', 'Moro', 'Offa', 'Oke Ero', 'Oyun', 'Pategi'
            ],
            'Nasarawa' => [
                'Akwanga', 'Awe', 'Doma', 'Karu', 'Keana', 'Keffi', 'Kokona', 'Lafia', 'Nasarawa', 'Nasarawa Egon', 'Obi',
                'Toto', 'Wamba'
            ],
            'Niger' => [
                'Agaie', 'Agwara', 'Bida', 'Borgu', 'Bosso', 'Chanchaga', 'Edati', 'Gbako', 'Gurara', 'Katcha', 'Kontagora',
                'Lapai', 'Lavun', 'Magama', 'Mariga', 'Mashegu', 'Mokwa', 'Moya', 'Paikoro', 'Rafi', 'Rijau', 'Shiroro',
                'Suleja', 'Tafa', 'Wushishi'
            ],
            'Ogun' => [
                'Abeokuta North', 'Abeokuta South', 'Ado-Odo/Ota', 'Egbado North', 'Egbado South', 'Ewekoro', 'Ifo',
                'Ijebu East', 'Ijebu North', 'Ijebu North East', 'Ijebu Ode', 'Ikenne', 'Imeko Afon', 'Ipokia', 'Obafemi Owode',
                'Odeda', 'Odogbolu', 'Ogun Waterside', 'Remo North', 'Shagamu'
            ],
            'Ondo' => [
                'Akoko North-East', 'Akoko North-West', 'Akoko South-West', 'Akoko South-East', 'Akure North', 'Akure South',
                'Ese Odo', 'Idanre', 'Ifedore', 'Ilaje', 'Ile Oluji/Okeigbo', 'Irele', 'Odigbo', 'Okitipupa', 'Ondo East',
                'Ondo West', 'Ose', 'Owo'
            ],
            'Osun' => [
                'Atakunmosa East', 'Atakunmosa West', 'Aiyedaade', 'Aiyedire', 'Boluwaduro', 'Boripe', 'Ede North', 'Ede South',
                'Ife Central', 'Ife East', 'Ife North', 'Ife South', 'Egbedore', 'Ejigbo', 'Ifedayo', 'Ifelodun', 'Ila',
                'Ilesa East', 'Ilesa West', 'Irepodun', 'Irewole', 'Isokan', 'Iwo', 'Obokun', 'Odo Otin', 'Ola Oluwa',
                'Olorunda', 'Oriade', 'Orolu', 'Osogbo'
            ],
            'Oyo' => [
                'Afijio', 'Akinyele', 'Atiba', 'Atisbo', 'Egbeda', 'Ibadan North', 'Ibadan North-East', 'Ibadan North-West',
                'Ibadan South-East', 'Ibadan South-West', 'Ibarapa Central', 'Ibarapa East', 'Ibarapa North', 'Ido',
                'Irepo', 'Iseyin', 'Itesiwaju', 'Iwajowa', 'Kajola', 'Lagelu', 'Ogbomosho North', 'Ogbomosho South',
                'Ogo Oluwa', 'Olorunsogo', 'Oluyole', 'Ona Ara', 'Orelope', 'Ori Ire', 'Oyo', 'Oyo East', 'Saki East',
                'Saki West', 'Surulere'
            ],
            'Plateau' => [
                'Bokkos', 'Barkin Ladi', 'Bassa', 'Jos East', 'Jos North', 'Jos South', 'Kanam', 'Kanke', 'Langtang South',
                'Langtang North', 'Mangu', 'Mikang', 'Pankshin', 'Qua`an Pan', 'Riyom', 'Shendam', 'Wase'
            ],
            'Rivers' => [
                'Abua/Odual', 'Ahoada East', 'Ahoada West', 'Akuku-Toru', 'Andoni', 'Asari-Toru', 'Bonny',
                'Eleme', 'Emuoha', 'Etche', 'Gokana', 'Ikwerre', 'Khana', 'Obio/Akpor', 'Ogba/Egbema/Ndoni', 'Ogu/Bolo',
                'Okrika', 'Omuma', 'Opobo/Nkoro', 'Oyigbo', 'Port Harcourt', 'Tai'
            ],
            'Sokoto' => [
                'Binji', 'Bodinga', 'Dange Shuni', 'Gada', 'Goronyo', 'Gudu', 'Gwadabawa', 'Illela', 'Isa', 'Kebbe',
                'Kware', 'Rabah', 'Sabon Birni', 'Shagari', 'Silame', 'Sokoto North', 'Sokoto South', 'Tambuwal',
                'Tangaza', 'Tureta', 'Wamako', 'Wurno', 'Yabo'
            ],
            'Taraba' => [
                'Ardo Kola', 'Bali', 'Donga', 'Gashaka', 'Gassol', 'Ibi', 'Jalingo', 'Karim Lamido', 'Kumi', 'Lau',
                'Sardauna', 'Takum', 'Ussa', 'Wukari', 'Yorro', 'Zing'
            ],
            'Yobe' => [
                'Bade', 'Bursari', 'Damaturu', 'Fika', 'Fune', 'Geidam', 'Gujba', 'Gulani', 'Jakusko', 'Karasuwa',
                'Machina', 'Nangere', 'Nguru', 'Potiskum', 'Tarmuwa', 'Yunusari', 'Yusufari'
            ],
            'Zamfara' => [
                'Anka', 'Bakura', 'Birnin Magaji/Kiyaw', 'Bukkuyum', 'Bungudu', 'Gummi', 'Gusau', 'Kaura Namoda', 'Maradun',
                'Maru', 'Shinkafi', 'Talata Mafara', 'Chafe', 'Zurmi'
            ]
        ];

        foreach ($other_states as $key => $other_state) {
            $state = \App\Models\State::firstOrCreate([
                'country_id' => $nigeria->id,
                'name' => $key
            ]);
            foreach ($other_state as $item) {
                \App\Models\City::firstOrCreate(
                    ['name' => $item],
                    ['state_id' => $state->id]
                );
            }
        }

        foreach ($cities as $key => $value) {
            $city = \App\Models\City::firstOrCreate(
                ['name' => $key],
                [
                    'state_id' => $lagos->id
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
