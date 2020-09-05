<?php

use Illuminate\Database\Seeder;

class DiseaseConditionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $disease_conditions = [
            'Abdominal Cramps', 'Abdominal Pain', 'Absence of Menstruation / Amenorrhea', 'Achilles Tendinitis',
            'Achilles Tendon Rupture', 'Acid Reflux / Heartburn', 'Acromegaly', 'Adenomyosis', 'Age Spots',
            'Allergic Arthritis', 'Allergic Eye Problems', 'Ambulatory Dysfunction', 'Amyotrophic Lateral Sclerosis (ALS)',
            'Anal Itching', 'Anaphylaxis / AllergyAngina', 'Ankle Fracture', 'Ankle Impingement', 'Ankle Infection',
            'Ankle Injuries / Sprain', 'Ankle Problems', 'Annual Check Up', 'Annual Pap Smear / GYN Exam',
            'Annual Physical', 'Anterior Cruciate Ligament (ACL) Injury', 'AnxietyAphasia', 'Arm Injuries', 'Atelectasis / Collapse of Lung',
            'Atherosclerosis', 'Athlete`s Foot', 'Atrial Fibrillation', 'Autoimmune Liver Disease', 'Back Pain', 'Back Problems',
            'Behavioral Problems', 'Bicep Injury', 'Bicep Tendonitis', 'Bladder Pain / Interstitial Cystitis',
            'Bladder and Bowel Management', 'Bleeding', 'Blisters', 'Blocked Tear Duct', 'Blood Clot', 'Blood Pressure Testing',
            'Blood Vessel Inflammation / Vasculitis', 'Blood WorkBlood in Urine / Hematuria', 'Bowel and Bladder Management',
            'Bradycardia', 'Breath Holding Spells', 'Breathing Problems', 'Broken Arm / Leg / RibBronchitis', 'Bruise / Contusion',
            'Burn Blisters', 'Burn Injuries', 'Burning Mouth Syndrome', 'Burning Sensation in Urine', 'Bursitis', 'Calf Strain',
            'Cancer Screening', 'Cardiology Follow Up', 'Cardiomyopathy', 'Cardiovascular Screening Visit', 'CellulitisCerebral Palsy / Other Motor Disabilities',
            'Cerumen Impaction', 'Chicken Pox', 'Chickenpox (Varicella) Vaccine', 'Chlamydia', 'Cholecystitis', 'Chronic Cough',
            'Chronic Fatigue Syndrome', 'Chronic Neck Pain', 'Chronic Pain', 'Cognitive or Memory Impairment / Dementia',
            'Cold', 'Concussion', 'Congenital Heart Disease', 'Congenital Kidney Disease', 'Constipation', 'Continuous Glucose Meters (CGM)',
            'Corns / Calluses', 'Coronary Artery Disease', 'Cortisone Shots', 'Cough', 'Cyst(s)', 'Cystocele', 'Deep Vein Thrombosis',
            'Degenerative Disc Disease', 'Degenerative Disease', 'Dementia', 'Developmental Delay', 'Diabetic Neuropathy',
            'Diarrhea', 'Difficulty Urinating', 'Diplopia', 'Disc Disease of Neck and Back', 'Disturbance of Skin Sensation',
            'Dizziness', 'Dressing', 'Dystonia', 'Ear Drainage / Discharge', 'Ear Fullness / Popping', 'Ear, Nose, or Throat Problem',
            'Ectopic / Tubal Pregnancy', 'Edema', 'Elbow Problems', 'Electrocardiogram', 'Emotional Abuse', 'Endocrinology Consultation',
            'Endocrinology Follow Up', 'Endoscopy / Endoscopic Ultrasound', 'Enlarged Lymph Nodes', 'Enlarged Prostate / Benign Prostatic Hyperplasia (BPH)',
            'Cyst', 'Kidney Mass', 'Excessive Sweating / Hyperhidrosis', 'Eye Inflammation', 'Facial Cosmetic Surgery Consultation',
            'Facial Pain', 'Fatty Liver Disease', 'Fecal Occult Blood Test (FOBT)', 'Female Infertility', 'Fertility Counseling',
            'Fetal Alcohol Syndrome', 'Fever', 'Fibroids', 'Fibromyalgia', 'Flat Feet', 'Flat Head Syndrome / Plagiocephaly',
            'FluFlu Shot', 'Fluid in Middle Ear / Otitis Media', 'Food Intolerance', 'Foot Consultation', 'Foot Follow Up',
            'Foot Fracture', 'Foot Infection', 'Foot Injuries', 'Foot Problems', 'Foot Ulcers', 'Foot and Ankle Arthritis',
            'Foot and Ankle Tendonitis', 'Forearm Injury', 'Fracture', 'Freezing of Gynecologic Warts', 'Fungal Infection',
            'Gastritis', 'Gastroenteritis / Stomach Flu', 'General Consultation', 'General Follow Up', 'Genetic Counseling / Pregnancy Screening',
            'Geriatric Medicine Consultation', 'Geriatric Medicine Follow Up', 'Gestational Diabetes / Diabetes during Pregnancy',
            'Gluten Sensitivity', 'Glycosylated Hemoglobin Test', 'Goiter', 'Gout', 'Growth Problems', 'Gynecologic Biopsy',
            'Gynecology Problem', 'Hammer', 'Toes', 'Hamstring Strain / Pulled Hamstring', 'Hand Fracture', 'Hand Problems',
            'Hand Skin Problem / Warts', 'Hanging Eyelid / Ptosis', 'Hashimoto`s Disease', 'Hashimoto`s Thyroiditis',
            'Hay Fever / Seasonal Allergies', 'Head Surgery Consultation', 'Headache', 'Hearing Loss', 'Heat Illness/ Heat Stroke',
            'Hemangioma', 'Hematospermia', 'Hemoptysis', 'Hemorrhoids', 'Hepatitis A Vaccine', 'Hepatology Follow Up',
            'Hernia', 'Herniated Disk', 'High Blood Sugar / Hyperglycemia', 'High Cholesterol / Lipid Problem', 'Hip Fracture(s)Hip Impingement',
            'Hip Problems', 'Hirsutism', 'Home Safety Evaluation', 'Hospital Discharge/Follow UpHydrocele / Spermatocele',
            'Hydronephrosis', 'Hyperlipidemia', 'Hyperparathyroidism Hyperthyroidism / Overactive Thyroid', 'Hypogonadism',
            'Hypopituitarism', 'Hypothyroidism / Underactive Thyroid', 'IV Therapy', 'Iliotibial Band Syndrome (ITBS)Illness',
            'Immobility', 'Immunization', 'Increased Salivation', 'Indigestion / Dyspepsia', 'Infection Follow Up', 'Infertility Consultation',
            'Ingrown Toenail', 'Injury / Laceration', 'Insomnia', 'Iron Deficiency', 'Irrational Fears / Phobias', 'Jaundice',
            'Joint Inflammation / Septic Arthritis', 'Joint Pain', 'Joint Problem', 'Keloids', 'Kidney Stones', 'Knee Dislocation',
            'Knee Fracture(s)', 'Knee Injury', 'Knee Problems', 'Kyphosis', 'Laceration', 'Lactational Problems', 'Lactose Intolerance',
            'Laparoscopic Surgery Consultation', 'Leg Fracture', 'Leg Injuries', 'Ligament Sprain', 'Limb Pain', 'Liver Transplant Consultation',
            'Liver Transplant Follow Up', 'Low Blood Sugar / Hypoglycemia', 'Low Libido', 'Lower Back Pain / Lumbago',
            'Lower Extremity Pain', 'Lower Extremity Swelling', 'Lyme Disease', 'Male Infertility', 'Malaria', 'Mastitis / Painful Nipples with Breastfeeding',
            'Measles / Rubeola', 'Medical Clearance', 'Medical Clearance for Hearing Aids', 'Memory Loss', 'Meniscus Tear',
            'Menopause', 'Menopause Consultation', 'Menstrual Migraine', 'Mental Development Evaluation', 'Metabolic Imbalance',
            'Metabolic Liver Disease', 'Metabolic Syndrome', 'Microdermabrasion', 'Midwifery Consultation', 'Mini-Stroke / Transient Ischemic Attack',
            'Miscarriage', 'Movement Disorder / Tremor', 'Movement Issues', 'Muscle Cramps', 'Muscle Disorders / Myopathy',
            'Muscle Pain', 'Muscle Strain', 'Muscle Twitch / Fasciculation', 'Muscle Weakness / PalsyMuscular Dystrophy',
            'Nail Problems', 'Nasal Allergies', 'Nasal Congestion', 'Nasal Polyps', 'Nausea and Vomiting', 'Neck Mass',
            'Neck Problems', 'Neck Strain', 'Neck Surgery Follow Up', 'Necrotizing Enterocolitis', 'Nerve Inflammation / Neuritis',
            'Neurological (Botox, IFN, Trigger Point) Injection', 'Neurology Consultation', 'Neurology Follow Up', 'Neurology Problem',
            'Neuropathic Pain', 'Neurosurgery Consultation', 'New Patient Visit', 'Nightmares', 'Nose Bleed / Epistaxis',
            'Nose Problems', 'Nutrition Consultation', 'Obesity Hypoventilation Syndrome', 'Obsessive Compulsive Disorder (OCD)',
            'Occupational Medicine Consultation', 'Occupational Medicine Follow Up', 'Oncology Follow Up', 'Orchitis / Epididymitis',
            'Orthopedic Brace', 'Orthopedic Consultation (Foot and Ankle)', 'Orthopedic Consultation (Hand)', 'Orthopedic Consultation (Spine)',
            'Orthopedic Follow Up', 'Orthopedic Follow Up (Foot and Ankle)', 'Orthopedic Follow Up (Hand)', 'Orthopedic Follow Up (Spine)',
            'Osteochondritis Dissecans (OCD)', 'Osteoporosis Evaluation', 'Overactive Bladder (OAB)', 'Pain Medicine Follow Up',
            'Pain in Extremities', 'Painful Erection / Priapism', 'Painful Menstruation / Dysmenorrhea', 'Palliative Care',
            'Pancreatitis', 'Patellofemoral Instability', 'Patient History', 'Pediatric Acne', 'Pediatric Dentist Consultation',
            'Pediatric Freezing of Warts', 'Pediatric Fungal Infection', 'Pediatric Headache', 'Pediatric Obesity / Weight Loss Consultation',
            'Pediatric Rash', 'Pediatric Second Opinion', 'Pediatric Sports Physical', 'Pediatric Vaccine(s)', 'Pelvic Inflammatory Disease / Endometritis',
            'Pelvic Pain', 'Periodic Limb Movement Disorder (PLMD)', 'Periods', 'Peripheral Neuropathy', 'Physical Abuse',
            'Pigmentation', 'Piriformis Syndrome', 'Platelet Rich Plasma Facial Treatment', 'Platelet Rich Plasma Filler Treatment',
            'Pneumococcal Vaccine', 'Poison Ivy or Poison Oak', 'Polycystic Ovary Syndrome / Metabolic Syndrome', 'Polymyalgia Rheumatica',
            'Post-Nasal Drip', 'Posterior Cruciate Ligament Consultation', 'Postpartum Depression', 'Pre-Sports Physical',
            'Pre-Travel Checkup', 'Pregnancy Nutrition Checkup', 'Pregnancy Test', 'Premature Ejaculation', 'Premenstrual Syndrome (PMS) / Premenstrual Dysphoric Disorder (PMDD)',
            'Prescription / Refill', 'Prevention of Cancer', 'Preventive Medicine Consultation', 'Psoriatic Arthritis',
            'Pulmonary Fibrosis', 'Radiculitis', 'Rash', 'Rectocele', 'Removal of Cyst', 'Renal Mass', 'Repetitive Motion Injury',
            'Respiratory Distress', 'Restrictive Lung Disease', 'Retractile Testis', 'Rheumatoid Arthritis', 'Rhinorrhea', 'Rosacea',
            'Rotator Cuff Injury', 'Running Injury', 'School Phobia', 'Sclerotherapy', 'Severe Infection', 'Sexually Transmitted Disease (STD)',
            'Sexually Transmitted Infection', 'Shin Splints', 'Shortness of Breath / Difficulty in Breathing', 'Shoulder Dislocation',
            'Shoulder Injury', 'Shoulder Problem', 'Skin Allergy', 'Skin Cancer Screening', 'Skin Lesions', 'Skin Problem',
            'Sleep Apnea', 'Sleep Disorder', 'Snoring', 'Spinal Muscular Atrophy (SMA)', 'Spinal Stenosis', 'Splinter / Foreign Body Removal',
            'Sports Injury', 'Sports Medicine Consultation', 'Sports Medicine Follow Up', 'Steroid Dependence', 'Steroid-Induced Osteoporosis (SIOP)',
            'Stiffness', 'Stomach Pain', 'Stomach Ulcer', 'Stress Fracture', 'Stye / Hordeolum', 'Surgery Consultation',
            'Surgery Second Opinion', 'Suture Removal', 'Swelling in Legs', 'Tendonitis', 'Tennis Elbow', 'Testicular Abnormality (Congenital or Mass)',
            'Tetanus Shot', 'Throwing Injuries', 'Thumb / Pacifier Habit Counseling', 'Thyroid Disease Thyroid Evaluation',
            'Thyroid Function Tests', 'Thyroiditis', 'Tic Douloureux / Trigeminal Neuralgia', 'Tiredness / Fatigue', 'Tobacco Use Disorder',
            'Toenail Problem', 'Toenail Removal', 'Tonsil Stones / Tonsilloliths', 'Tonsillectomy Follow Up', 'Torn Tendons / Ligaments',
            'Torn Tendons / Ligaments (Foot and Ankle)', 'Torn Tendons / Ligaments (Hand)', 'Tracheal Stenosis', 'Transgender Care',
            'Transgender Medical Consultation', 'Transgender Medical Follow Up', 'Typhoid', 'Unwanted Pregnancy', 'Ureteral Stone',
            'Urinary Urgency / Urge Incontinence', 'Urology Follow Up', 'Urology Problem', 'Uterine Fibroids', 'Vaginal Bleeding',
            'Vaginal Itching', 'Varicocele', 'Viscosupplement Injections', 'Vitamin B12 Deficiency', 'Vulvar Biopsy', 'Walking Problems',
            'Welcome to Medicare Physical', 'Well Women`s Exam', 'Wellness Care', 'Wheezing', 'Wrist Problems'
        ];

        foreach ($disease_conditions as $disease_condition) {
            \App\Models\DiseaseCondition::firstOrCreate([
                'name' => $disease_condition
            ]);
        }
    }
}
