<?php

use Illuminate\Database\Seeder;

class ProceduresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $procedures = [
            'Hematology' => [
                'Allogenic Bone Marrow Transplant', 'Aplastic Anemia', 'Autologous Bone Marrow Transplant', 'Blood Cancer Treatment',
                'Bone Marrow Transplant (BMT)', 'Fanconi Anemia', 'Leukemia Treatment', 'Lymphoma Treatment', 'Multiple Sclerosis',
                'Myeloma Treatment', 'Pediatric Bone Marrow Transplant', 'Sickle Cell Disease', 'Thalassemia Transplant'
            ],
            'Orthopedics' => [
                'ACL Reconstruction Surgery', 'Abscess Debridement', 'Acromioclavicular Joint Repair', 'Ankle Arthroscopy',
                'Ankle Replacement', 'Ankle Surgery', 'Arthroscopic Removal of Calcium Deposits', 'Bone Fracture Surgery',
                'Bone Tumor Removal', 'Bunion Surgery', 'Carpel Tunnel Release Surgery', 'Club Foot Treatment', 'De Quervain Syndrome',
                'Dislocated Shoulder', 'Double Knee Replacement', 'Dynamic hip screw', 'Elbow Arthroscopy', 'Elbow Replacement',
                'Elbow Surgery', 'Exostosis', 'External Fracture Fixation', 'Foot Surgery', 'Fracture', 'Ganglion Cyst Removal',
                'Hammer, Claw, or Mallet Toe', 'Hand Joints Synovectomy', 'Hand Surgery', 'Hip Arthroplasty', 'Hip Arthroscopy',
                'Hip Replacement', 'Hip Replacement Revision', 'Hip Resurfacing', 'Knee Arthroplasty', 'Knee Arthroscopy',
                'Knee Cartilage Surgery', 'Knee Ligament Surgery', 'Knee Replacement', 'Knee Replacement Revision',
                'Lateral Release of the Patella', 'MPFL Ligament Surgery', 'Meniscus Surgery', 'Menisectomy', 'Metal Implant Removal',
                'Open Reduction Internal Fixation (ORIF)', 'Osteotomy', 'Partial Hip Replacement', 'Revision Joint Surgery',
                'Rotator Cuff Surgery (Arthroscopic /Mini open)', 'SLAP Tear Repair', 'Scaphoid Fracture', 'Shoulder Arthroplasty',
                'Shoulder Arthroscopy', 'Shoulder Capsular Release', 'Shoulder Impingement Syndrome', 'Shoulder Labrum Surgery',
                'Shoulder Replacement', 'Shoulder Stabilization', 'Shoulder Surgery', 'Shoulder Tendon Reconstruction',
                'Single Knee Replacement', 'Synovium Removal', 'Tendon Repair', 'Torn Meniscus Repair', 'Total Hip Replacement',
                'Trigger Finger', 'Wrist Arthroscopy', 'Wrist Instability'
            ],
            'Obstetrics & Gynecology' => [
                'Abdominal Hysterectomy', 'Breast Biopsy', 'Breast Exam', 'Cervical Cautery', 'Cervical Conization', 'Cervical Polyp Removal',
                'Colposcopy', 'Contraceptive Implant', 'Core Needle Breast Biopsy', 'Cystocele Repair', 'Dilation and Curettage',
                'Ectopic Pregnancy Surgery', 'Endometrial Ablation', 'Endometriosis', 'Female Sterilization', 'Focal Adenomyosis',
                'Four Dimensional (4D) Ultrasound', 'Gynecologic Laparoscopy', 'Hormone Replacement Therapy', 'Hysterectomy',
                'Hysteroscopy', 'Intrauterine Device Placement', 'Intrauterine Device Removal', 'Laparoscopic Hysterectomy',
                'Laparoscopic Ovarian Cystectomy', 'Loop Electrosurgical Excision Procedure (LEEP)', 'Manchester Operation (Fothergill Repair)',
                'Myomectomy', 'Oophorectomy', 'Ovarian Cyst Removal', 'Ovarian Tumor Removal', 'Pelvic Adhesiolysis',
                'Pelvic Exam', 'Pelvic Floor Repair', 'Pessary Placement', 'Presacral Neurectomy', 'Tubal Ligation Reversal',
                'Uterine Fibroid Embolization', 'Uterine Prolapse Surgery', 'Uterine artery embolization', 'Uterosacral Nerve Ablation',
                'Vaginal Hysterectomy', 'Vaginal Rejuvenation - Laser', 'Vaginal Vault Prolapse Surgery', 'Vaginoplasty'
            ],
            'General Medicine' => [
                'Cryosurgery', 'Extracorporeal Shockwave Therapy', 'Female Health Checkup', 'Hyperbaric Medicine', 'Male Health Check Up',
                'Stem Cell Therapy', 'Stem Cell Therapy after Trauma or Surgery', 'Stem Cell Therapy for Joint Problems',
                'Stem Cell Therapy for Wounds', 'Stem Cell Transplant for scleroderma treatment', 'Stem cell therapy for Autism Treatment'
            ],
            'Pediatric Cardiology' => [
                'Arterial switch operation/ Truncus arteriosis', 'Atrial Septal Defect Closure (ASD)', 'Atrioventricular Canal Defect',
                'Balloon Atrial Septostomy', 'Double Outlet Right Ventricle', 'Fontan', 'Glenn Procedure', 'Patent Ductus Arteriosus Device Closure Catheterization',
                'Tetralogy of Fallot', 'Total Anomalous Pulmonary Venous Connection', 'Transposition of the Great Arteries (TGA)',
                'Valvuplasty'
            ],
            'Bariatric Surgery' => [
                'Biliopancreatic Diversion', 'Gastric Ballooning', 'Gastric Band Surgery', 'Gastric Bypass Surgery', 'Gastric Plication',
                'Revision Gastric Bypass Surgery', 'Roux-en-Y Gastric Bypass', 'Sleeve Gastrectomy'
            ],
            'Urology' => [
                'Benign Prostatic Hyperplasia (BPH)', 'Bladder Neck Incision', 'Bladder Stone Removal', 'Cystolithotripsy (Laser)',
                'Cystoscopy', 'Epididymal Cyst Removal', 'Erectile Dysfunction', 'Extracorporeal Shock Wave Lithotripsy',
                'HoLEP', 'Hydrocele Testis', 'Hypospadias', 'Inguinal Orchiectomy', 'Kidney Stones Removal', 'Laparoscopic Radical Cystectomy',
                'Laser Prostatectomy', 'Litholapaxy', 'Meatotomy', 'Optical Internal Urethrotomy', 'Optical Urethrotomy (Laser)',
                'Penile Enlargement', 'Penile Implant', 'Percutaneous Nephrolithotomy', 'Pneumatic Kidney Stones Removal',
                'Prostate - Green Light Laser Surgery', 'Prostate Biopsy', 'Prostate Biopsy with Transrectal Ultrasound',
                'Prostate Surgery', 'Radical Prostatectomy', 'Reverse Vasectomy', 'Robotic Radical Prostatectomy',
                'Surgery for Female Urinary Incontinence', 'TURP (Transurethral Resection of the Prostate)', 'Testicular Biopsy',
                'Trans Urethral Electrovaporization of the Prostate (TUEVP)', 'Trans Urethral Resection of Bladder Tumor',
                'Ureteral Stone Removal', 'Ureteropelvic junction (UPJ) obstruction', 'Urethral Surgery', 'Urethroplasty',
                'Uretoscopic Removal of Stone (Bladder)', 'Uretric Reimplantation', 'Urinary Incontinence', 'Varicocelectomy',
                'Vasectomy'
            ],
            'Hair restoration' => [
                'Beard Transplant', 'Follicular Unit Extraction (FUE)', 'Follicular Unit Transplantation (FUT)', 'Hair Transplant'
            ],
            'Neurosurgery' => [
                'BT Shunt', 'Brachial Plexus Injuries / Stereotactic Procedures', 'Brain Aneurysm Repair', 'Brain Tumor Surgery',
                'Burr-Hole Aspiration for Abscess', 'Carpal Tunnel Release Surgery', 'Cerebral Aneurysm', 'Cerebral Spinal Fluid Shunt Procedures',
                'Chronic Sub-dural Haematoma', 'Cranioplasty', 'Craniotomy', 'Gamma Knife', 'Glial Tumor Removal', 'Hydrocephalus',
                'Peripheral Nerve Surgery', 'Trans sphenoid operations', 'VP Shunt Surgery'
            ],
            'Nephrology' => [
                'Endopyelotomy', 'Haemodialysis', 'Kidney Transplant', 'Kidney Tumor', 'Nephrectomy', 'Pyeloplasty', 'RIRS Surgery',
                'Renal Angiography', 'Renal Angioplasty'
            ],
            'Neurology' => [
                'Chronic Cerebrospinal Venous Insufficiency', 'Deep Brain Stimulation', 'Epilepsy Surgery', 'Epilepsy Treatment',
                'Multiple Sclerosis Rehabilitation', 'Neurological Rehabilitation', 'Vagus nerve stimulation (VNS) therapy'
            ],
            'Ophthalmology' => [
                '23 Gauge Vitrectomy', 'Amniotic Membrane Transplant', 'Anti VEGF Therapy', 'Artificial Iris Implantation',
                'Astigmatism Correction', 'Atheroma Removal', 'Band Keratopathy', 'Benign Essential Blepharospasm', 'Blowout Fracture',
                'Canthoplasty', 'Capsulotomy', 'Cataract + Glaucome', 'Cataract Surgery', 'Cornea Transplant', 'Corneal Crosslinking',
                'Detached Retina', 'Epi LASIK (Both Eyes)', 'Exophthalmos', 'Eye Cancer', 'Eye Muscle Repair', 'Eye Surgery',
                'Eyelid Surgery', 'Femto Laser Cataract Surgery', 'Fluorescein Angiogram', 'Glaucoma', 'Implantable Contact Lens',
                'Intracorneal Ring Segment Implantation', 'Intraocular Lens Implant', 'Intravitreal Injection', 'Iridectomy',
                'Iridodialysis', 'Laser Cataract Surgery with Monofocal Lens Implant', 'Laser Cataract Surgery with Multifocal Lens Implant',
                'Laser Coagulation', 'Laser Eye Surgery', 'Lower Eyelid Surgery with Local Anesthetic', 'Optic Neuropathy',
                'Optical Coherence Tomography', 'Phacoemulsification; IQ Intraocular Lens (Both Eyes)', 'Photorefractive Keratectomy',
                'Phototherapeutic Keratectomy', 'Posterior Vitrectomy', 'Presbyopia', 'Pterygium Surgery', 'Recurrent Corneal Erosion',
                'Refractive Eye Surgery', 'Refractive Lens Exchange', 'Retinal Detachment', 'Small Incision Lenticule Extraction',
                'Staphyloma', 'Tear Duct Surgery', 'Trabeculectomy', 'Traditional (Ultrasound) Cataract Surgery with Monofocal Lens Implant',
                'Traditional (Ultrasound) Cataract Surgery with Multifocal Lens Implant', 'Upper Eyelid Surgery with Local Anesthetic',
                'Upper and Lower Eyelid Surgery with General Anesthetic', 'Upper and Lower Eyelid Surgery with Local Anesthetic',
                'Upper or Lower Eyelid Surgery with General Anesthetic', 'Upper or Lower Eyelid Surgery with Local Anesthetic',
                'Vision Spherical ICL', 'Vision Toric ICL', 'Vitrectomy', 'Vitrectomy + Retinal Detachment', 'Wet Macular Degeneration'
            ],
            'Oncology' => [
                'Bladder Cancer Treatment', 'Bone Cancer Treatment', 'Brachytherapy for prostate cancer', 'Brain Cancer Treatment',
                'Breast Cancer Treatment', 'Cervical Cancer Treatment', 'Chemoembolization', 'Chemotherapy', 'Colon Cancer (CRC) Treatment',
                'Colorectal Cancer Treatment', 'CyberKnife', 'Cyberknife for Prostate Cancer', 'Esophagus Cancer Treatment',
                'Fractionated Stereotactic Radiation Therapy', 'Green Light Laser PVP Surgery', 'HIFU', 'HIFU (High Intensity Focused Ultrasound) for prostate cancer',
                'Head & Neck Oncology', 'Image-guided radiation therapy (IGRT)', 'Intensity modulated radiation therapy (IMRT)',
                'Kidney Cancer Treatment', 'Liver Cancer Treatment', 'Lung Cancer Treatment', 'Malignancy Surgery', 'Medical Oncology',
                'Oral Cancer Treatment', 'Ovarian Cancer Treatment', 'Pancreatic Cancer Treatment', 'Prostate Cancer Treatment',
                'Radiation Oncology', 'Rapid Arc with IGRT', 'Rapid Arc with IGRT for prostate cancer', 'Rapid Arc with IMRT',
                'Rapid Arc with IMRT for prostate cancer', 'Skull Base Surgery', 'Stereotactic Radiosurgery (SRS) Novalis Tx Frameless',
                'Stereotactic Radiotherapy (SRS) Novalis Tx with Frame', 'Stomach Cancer Treatment', 'Surgical Oncology',
                'Uterine Cancer Treatment', 'Whipples Procedure'
            ],
            'Dentistry' => [
                '3M Clarity™ SL Self Ligating Braces', 'Abutment', 'Abutment and Crown for Dental Implant', 'Amalgam Removal',
                'Ankylos Dental Implant', 'Axiom Dental Implant', 'BioHorizons Dental Implant', 'Braces', 'Cleft lip and cleft palate repair',
                'Complete Denture', 'Composite Tooth Filling', 'Composite Veneers', 'Cortex Dental Implant', 'Crowning',
                'Crowns', 'Crystal Braces', 'Damon Clear Braces', 'Dental Implant', 'Dental Implant Crown', 'Dental Implant, Abutment and Crown',
                'Dentis Dental Implant', 'Dentistry Package', 'Dentium Dental Implant with Abutment and Crown', 'Dentsply Osseospeed Instant Load Dental Implant with Crown',
                'Denture', 'Duo:PCH Porcelain Composite Hybrid Veneers', 'Facial Injury Repair', 'Fixed Braces', 'Full Arch Dental Implants',
                'Healing Abutment', 'IPS Empress Esthetics Veneers', 'Implantology', 'Invisalign', 'Invisalign Partial', 'Invisible Braces',
                'Lumineers®', 'Nobel Biocare Branemark System Dental Implant', 'Nobel Biocare Conical Connection Immediate Load Dental Implant',
                'Nobel Biocare Dental Implant', 'Nobel Biocare Immediate Load Dental Implant with Porcelain Crown',
                'Nobel Biocare NobelActive™ Immediate Load Dental Implant', 'Nobel Biocare NobelPerfect® Dental Implant',
                'Nobel Biocare NobelReplace Dental Implant', 'Nobel Biocare NobelReplace Tapered Implant',
                'Nobel Biocare NobelReplace™ Select Dental Implant', 'Nobel Biocare NobelShorty™ Dental Implant',
                'Nobel Biocare NobelSpeedy™ Dental Implant', 'Nobel Biocare Tapered Immediate Load Dental Implant',
                'Orthodontics', 'Pediatric Dentistry', 'Porcelain Veneers', 'Removable Appliance', 'Renew Biocare Dental Implant',
                'Root Canal', 'Root Canal Treatment', 'Scaling and Root Planing', 'Scaling and Root Planing (Full Mouth)',
                'SimPlant® Computer Guided Surgery', 'Simple Tooth Extraction', 'Six Month Smiles Braces', 'Snap on Smile',
                'Straumann ITI TE® Dental Implant', 'Straumann ITI® Dental Implant', 'Straumann SLActive Instant Load Dental Implant with Crown',
                'Straumann® Bone Level Dental Implant', 'Straumann® Bone Level SLActive® Dental Implant', 'Surgical Tooth Extraction',
                'Temporary Dentistry', 'Temporary Denture', 'Temporary Filling', 'Temporary Veneer', 'Tooth Extraction',
                'Veneers', 'Zimmer Dental Implant', 'Zirconia Crown on Implant', 'Zirconia Veneers'
            ],
            'Ear Nose & Throat' => [
                'Adenoidectomy', 'Audiometry', 'Cochlear Implant', 'Dacryocystorhinostomy', 'Decortication of Vocal Cords',
                'ENT Consultation', 'Endolymphatic Sac', 'Endoscopic Ear Surgery', 'FESS Surgery', 'Flexible Rhino Laryngoscopy',
                'Hearing Aids', 'Hearing Assesment', 'Laryngectomy', 'Laryngoscopy', 'Mastoidectomy', 'Micro Laryngeal Surgery',
                'Middle Ear Analysis', 'Myringoplasty', 'Myringotomy', 'Nasal Endoscopy', 'Nasal Obstruction', 'Nasopharyngolaryngoscopy',
                'Newborn Hearing Screening', 'Ossiculoplasty', 'Septoplasty', 'Sinus Surgery', 'Stapedectomy', 'Thyroid Scan',
                'Tonsillectomy', 'Tonsillectomy and Adenoidectomy', 'Turbinate Surgery', 'Tympanoplasty', 'Uvulopalatopharyngoplasty'
            ],
            'Gastroenterology' => [
                'Capsule Endoscopy', 'Colonoscopy', 'Colonoscopy with Biopsy', 'Endoscopy', 'GERD Acid Reflux Surgery',
                'Gall Bladder Surgery', 'Gallbladder Removal', 'GastroIntestinal Bleeding', 'Gastroscopy',
                'Irritable Bowel Syndrome', 'Laparoscopic Anti Reflux Surgery', 'Liver Disease Consultation',
                'Liver Disease Evaluation', 'Polypectomy', 'Total Pancreatectomy'
            ],
            'Cardiology' => [
                'AICD', 'ASD Closure', 'Aortic Valve Replacement', 'Aortic valve stenosis', 'Aortopulmonary window',
                'Balloon Valvotomy', 'Bentall Procedure', 'Biventricular Pacemaker Implantation', 'CABG', 'CABG (High Risk)',
                'CABG (Low Risk)', 'CABG (Redo)', 'CRT-D', 'Cabrol Procedure', 'Cardiac Assessment', 'Cardiac Electrophysiology Study',
                'Cardiothoracic Surgery', 'Coronary Angiogram with Percutaneous Coronary Intervention', 'Coronary Angiography',
                'Coronary Angioplasty', 'Double Chamber Pacemaker Implantation', 'Double Valve Replacement', 'Electrophysiology Study & Radio Frequency Ablation',
                'Heart Port Surgery', 'Heart Transplant', 'Heart Valve Replacement', 'MVR (Mitral Valve Replacement)',
                'Minimally Invasive Direct Coronary Artery Bypass', 'Pacemaker Implantation', 'Patent Ductus Arteriosus device closure (PDA)',
                'Right Heart Catheterization', 'Single Chamber Pacemaker Implantation', 'Tricuspid valve replacement surgery',
                'Ventricular Septal Defect Closure (VSD)'
            ],
            'Vascular surgery' => [
                'Abdominal Aortic Aneurysm (AAA) Repair', 'Abdominal aortic aneurysm', 'Aneurysm Surgery', 'Angiography',
                'Angioplasty', 'Carotid stenting', 'Stent Insertion', 'Varicose Vein Removal'
            ],
            'Plastic Surgery' => [
                'Alarplasty and Tippoplasty', 'Arm Lift', 'BodyTite Liposuction 1 Area', 'BodyTite Liposuction 2 to 3 Areas',
                'BodyTite Liposuction 4 Areas', 'Breast Augmentation', 'Breast Augmentation With Fat Transfer', 'Breast Lift',
                'Breast Lift 1st Degree Ptosis', 'Breast Lift 2nd Degree Ptosis', 'Breast Lift 3rd Degree Ptosis',
                'Breast Lift Donut Nipple Lift', 'Breast Lift with Implants Round', 'Breast Lift with Implants Tear Drop',
                'Cleft Lip or Palate Repair', 'Facelift', 'Facelift with Eyelid Surgery', 'Facelift with Eyelid Surgery and Neck Correction',
                'Facelift with Neck Lift and Neck Muscle Tightening', 'Liposuction', 'Liposuction Lower Abdomen', 'Liposuction More Than 4 Areas',
                'Liposuction Per Additional Area', 'Liposuction Tummy, Thighs and Buttocks', 'Liposuction Up to 4 Areas',
                'Mid Face Lift with Lower Eyelid Surgery', 'Mid Face Lift with Upper Eyelid Surgery', 'Rhinoplasty',
                'Smart Lipo Liposuction', 'Vaser Liposelection Circumferential Body Contouring', 'Vaser Liposelection Circumferential Thigh Contouring',
                'Vaser Liposelection Male Chest and Abdomen', 'Vaser Liposelection Per Additional Area', 'Vaser Liposuction',
                'Vaser Liposuction 1 Area', 'Vaser Liposuction 1 Area with General Anesthetic', 'Vaser Liposuction 2 to 3 Areas',
                'Vaser Liposuction 4 Areas', 'Vaser Liposuction Arms', 'Vaser Liposuction Buttocks', 'Vaser Liposuction Chin',
                'Vaser Liposuction Per Additional Area', 'Vaser Liposuction Thighs', 'Vaser Liposuction Tummy', 'Vaser Liposuction Tummy, Thighs and Buttocks',
                'Vaser Liposuction Upper and Lower Abdomen'
            ],
            'Colorectal medicine' => [
                'Abdominoperineal', 'Anal Abscess Drainage', 'Anal Cyst Removal', 'Anal Fissure', 'Anal Fistula Surgery',
                'Anal Sphincter Repair', 'Hemorrhoidectomy', 'Lower anterior resection', 'Rectoscopy', 'Rubber Band Ligation for Hemorrhoids',
                'Small Bowel Resection', 'Stapled Hemorrhoidectomy'
            ],
            'General Surgery' => [
                'Adrenalectomy', 'Breast Lumpectomy', 'Breast Tumor Removal', 'Diagnostic Laparoscopy', 'Esophagectomy',
                'Gastrectomy', 'General Surgery Consultation', 'Hepatectomy', 'Hernia Bilateral', 'Hernia Repair', 'Hernia Unilateral',
                'Hiatal Hernia Surgery', 'Incisional Hernia Repair', 'Inguinal Hernia Repair Surgery', 'Laparoscopic Hernia Repair',
                'Laparoscopy', 'Laparotomy', 'Laproscopic Cholestectomy', 'Liver Transplant', 'Lymph Nodes Removal',
                'Mastectomy', 'Orchidopexy', 'Snoring Surgery', 'Splenectomy', 'Thoracoscopic Sympathectomy', 'Thymectomy',
                'Thyroidectomy', 'Umbilical Hernia Repair', 'Varicocele Surgery Open Bilateral', 'Varicocele Surgery Open Unilateral'
            ],
            'Spinal Surgery' => [
                'Cervical Disc Replacement', 'Cervical Discectomy', 'Comprehensive Myelopathy (Spinal Cord Surgery)', 'Corpectomy',
                'Corpectomy with Spinal Column Reconstruction', 'Discectomy', 'Dynamic Spinal Stabilization', 'Foraminotomy',
                'Kyphoplasty', 'Laminectomy', 'Laminoplasty', 'Lumbar Disc Replacement', 'Lumbar Discopathy', 'Microdiscectomy',
                'Minimal Invasive Spine Surgery', 'Nucleoplasty', 'Nucleotomy', 'Scoliosis', 'Scoliosis Surgery', 'Spinal Decompression Surgery L1',
                'Spinal Decompression Surgery L2', 'Spinal Disc Herniation', 'Spinal Fusion Surgery', 'Spinal Stabilization',
                'Spinal Stabilization of Frontal and Dorsal Cervical Column', 'Spine Tumor Removal', 'SpineCor Bracing',
                'Spondylolisthesis Stabilisation', 'Vagal Nerve Stimulator'
            ],
            'Reproductive medicine' => [
                'Blocked Fallopian Tubes Treatment', 'Cesarean Section', 'IVF- In Vitro Fertilization',
                'In Vitro Fertilization + Intracytoplasmic Sperm Injection with Optical Spindle View', 'In Vitro Fertilization + Testiculor Biopsy',
                'In Vitro Fertilization / ICSI + Donor Sperms', 'In Vitro Fertilization with Egg Donation', 'In Vitro Fertilization with ICSI',
                'In Vitro Fertilization with IMSI', 'In Vitro Fertilization with Laser Assisted Hatching', 'Oocyte Pick up and Intracytoplasmic Sperm Injection'
            ],
            'Maxillofacial Surgery' => [
                'Facial Paralysis Treatment', 'Facial Tumor Removal', 'Orthognathic Surgery'
            ],
            'Respiratory medicine' => [
                'Pulmonary Rehabilitation'
            ],
            'Endocrinology' => [
                'Diabetes Consultation', 'Endocrinology Consultation', 'Thyroid Biopsy'
            ],
            'Radiology' => [
                'Interventional Radiology'
            ],
            'Pulmonology' => [
                'Bronchoscopic Lung Volume Reduction', 'Bronchoscopy', 'Bronchoscopy with Transbronchial Needle Aspiration',
                'CT Guided Percutaneous Lung Biopsy', 'Lobectomy', 'Lung Biopsy', 'Pleural Biopsy', 'Thoracentesis', 'Thoracoscopy / Pleuroscopy'
            ],
            'Radiation Therapy' => [
                'Brachytherapy', 'Endocavity and Interstitial Brachytherapy', 'Intraoperative Brachytherapy', 'Radiosurgery'
            ]
        ];

        foreach ($procedures as $key => $value) {
            $procedure = \App\Models\Procedure::firstOrCreate([
                'name' => $key
            ]);
            foreach ($value as $details) {
                \App\Models\ProcedureDetail::firstOrCreate(
                    [
                        'name' => $details
                    ],[
                        'procedure_id' => $procedure->id
                    ]
                );
            }
        }
    }
}
