<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DonorsSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 20; $i++)
        {
            $data = [
                'name'          => $this->getRandomString(4).' '.$this->getRandomString(4),
                'mobile'        => rand(10000000000, 11999999999),
                'email'         => $this->getRandomString(9).'@gmail.com',
                'district'      => rand(1,64),
                'blood_group'   => $this->getBloodGroup()
            ];
            $this->db->table('donors')->insert($data);
        }
    }

    public function getRandomString($n)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }

    public function getBloodGroup() {
        $bg=array("A+","B+","AB+","O+","A-","B-","AB-","O-","N");
        $random_keys=array_rand($bg,8);
        return $bg[$random_keys[0]];
    }
}
