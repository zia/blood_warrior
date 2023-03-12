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
                'mobile'        => $this->getRandomString(11),
                'email'         => $this->getRandomString(20),
                'district'      => rand(1,64),
                'blood_group'   => $this->getRandomString(3)
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
}
