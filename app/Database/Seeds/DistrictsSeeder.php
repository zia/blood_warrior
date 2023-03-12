<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DistrictsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name_bn' => 'গাজীপুর',
                'name_en' => 'Gazipur',
            ],
            [
                'name_bn' => 'গোপালগঞ্জ',
                'name_en' => 'Gopalganj',
            ],
            [
                'name_bn' => 'টাঙ্গাইল',
                'name_en' => 'Tangail',
            ],
            [
                'name_bn' => 'ঢাকা',
                'name_en' => 'Dhaka',
            ],
            [
                'name_bn' => 'নরসিংদী',
                'name_en' => 'Narsingdi',
            ],
            [
                'name_bn' => 'নারায়ণগঞ্জ',
                'name_en' => 'Narayanganj',
            ],
            [
                'name_bn' => 'ফরিদপুর',
                'name_en' => 'Faridupur',
            ],
            [
                'name_bn' => 'মাদারীপুর',
                'name_en' => 'Madaripur',
            ],
            [
                'name_bn' => 'মানিকগঞ্জ',
                'name_en' => 'Manikganj',
            ],
            [
                'name_bn' => 'মুন্সিগঞ্জ',
                'name_en' => 'Munshiganj',
            ],
            [
                'name_bn' => 'রাজবাড়ী',
                'name_en' => 'Rajbari',
            ],
            [
                'name_bn' => 'শরিয়তপুর',
                'name_en' => 'Shariatpur',
            ],
            [
                'name_bn' => 'কিশোরগঞ্জ',
                'name_en' => 'Kishoreganj',
            ],
            [
                'name_bn' => 'কুমিল্লা',
                'name_en' => 'Cumilla',
            ],
            [
                'name_bn' => 'ব্রাক্ষনবাড়িয়া',
                'name_en' => 'Brahmanbaria',
            ],
            [
                'name_bn' => 'চাঁদপুর',
                'name_en' => 'Chandpur',
            ],
            [
                'name_bn' => 'নোয়াখালী',
                'name_en' => 'Noakhali',
            ],
            [
                'name_bn' => 'লক্ষীপুর',
                'name_en' => 'Lakshmipur',
            ],
            [
                'name_bn' => 'ফেনী',
                'name_en' => 'Feni',
            ],
            [
                'name_bn' => 'খাগড়াছড়ি',
                'name_en' => 'Khagrachhari',
            ],
            [
                'name_bn' => 'রাঙ্গামাটি',
                'name_en' => 'Rangamati',
            ],
            [
                'name_bn' => 'বান্দরবন',
                'name_en' => 'Bandarban',
            ],
            [
                'name_bn' => 'চট্টগ্রাম',
                'name_en' => 'Chattogram',
            ],
            [
                'name_bn' => 'কক্সবাজার',
                'name_en' => 'Cox`s Bazar',
            ],
            [
                'name_bn' => 'চাঁপাইনবাবগঞ্জ',
                'name_en' => 'Chapai Nwabganj',
            ],
            [
                'name_bn' => 'জয়পুরহাট',
                'name_en' => 'Joypurhat',
            ],
            [
                'name_bn' => 'নওগাঁ',
                'name_en' => 'Naogaon',
            ],
            [
                'name_bn' => 'নাটোর',
                'name_en' => 'Natore',
            ],
            [
                'name_bn' => 'পাবনা',
                'name_en' => 'Pabna',
            ],
            [
                'name_bn' => 'বগুড়া',
                'name_en' => 'Bogura',
            ],
            [
                'name_bn' => 'রাজশাহী',
                'name_en' => 'Rajshahi',
            ],
            [
                'name_bn' => 'সিরাজগঞ্জ',
                'name_en' => 'Sirajganj',
            ],
            [
                'name_bn' => 'খুলনা',
                'name_en' => 'Khulna',
            ],
            [
                'name_bn' => 'চুয়াডাঙ্গা',
                'name_en' => 'Chuadanga',
            ],
            [
                'name_bn' => 'ঝিনাইদহ',
                'name_en' => 'Jhenaidah',
            ],
            [
                'name_bn' => 'নড়াইল',
                'name_en' => 'Narail',
            ],
            [
                'name_bn' => 'বাগেরহাট',
                'name_en' => 'Bagerhat',
            ],
            [
                'name_bn' => 'সাতক্ষীরা',
                'name_en' => 'Satkhira',
            ],
            [
                'name_bn' => 'কুষ্টিয়া',
                'name_en' => 'Kushtia',
            ],
            [
                'name_bn' => 'মাগুরা',
                'name_en' => 'Magura',
            ],
            [
                'name_bn' => 'মেহেরপুর',
                'name_en' => 'Meherpur',
            ],
            [
                'name_bn' => 'যশোর',
                'name_en' => 'Jashore',
            ],
            [
                'name_bn' => 'বরিশাল',
                'name_en' => 'Barishal',
            ],
            [
                'name_bn' => 'পটুয়াখালী',
                'name_en' => 'Patuakhali',
            ],
            [
                'name_bn' => 'ভোলা',
                'name_en' => 'Bhola',
            ],
            [
                'name_bn' => 'পিরোজপুর',
                'name_en' => 'Pirojpur',
            ],
            [
                'name_bn' => 'বরগুনা',
                'name_en' => 'Barguna',
            ],
            [
                'name_bn' => 'ঝালকাঠি',
                'name_en' => 'Jhalokathi',
            ],
            [
                'name_bn' => 'সিলেট',
                'name_en' => 'Sylhet',
            ],
            [
                'name_bn' => 'মৌলভীবাজার',
                'name_en' => 'Moulvibazar',
            ],
            [
                'name_bn' => 'হবিগঞ্জ',
                'name_en' => 'Habiganj',
            ],
            [
                'name_bn' => 'সুনামগঞ্জ',
                'name_en' => 'Sunamganj',
            ],
            [
                'name_bn' => 'কুড়িগ্রাম',
                'name_en' => 'Kurigram',
            ],
            [
                'name_bn' => 'গাইবান্ধা',
                'name_en' => 'Gaibandha',
            ],
            [
                'name_bn' => 'ঠাকুরগাঁও',
                'name_en' => 'Thakurgaon',
            ],
            [
                'name_bn' => 'দিনাজপুর',
                'name_en' => 'Dinajpur',
            ],
            [
                'name_bn' => 'নীলফামারী',
                'name_en' => 'Nilphamary',
            ],
            [
                'name_bn' => 'পঞ্চগড়',
                'name_en' => 'Panchagarh',
            ],
            [
                'name_bn' => 'রংপুর',
                'name_en' => 'Rangpur',
            ],
            [
                'name_bn' => 'লালমনিরহাট',
                'name_en' => 'Lalmonirhat',
            ],
            [
                'name_bn' => 'ময়মনসিংহ',
                'name_en' => 'Mymensingh',
            ],
            [
                'name_bn' => 'জামালপুর',
                'name_en' => 'Jamalpur',
            ],
            [
                'name_bn' => 'নেত্রকোণা',
                'name_en' => 'Netrokona',
            ],
            [
                'name_bn' => 'শেরপুর',
                'name_en' => 'Sherpur',
            ],
        ];
        $this->db->table('districts')->insertBatch($data);
    }
}
