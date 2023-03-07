<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 20; $i++)
        {
            $data = [
                'name'          => $this->getRandomString(4).' '.$this->getRandomString(4),
                'mobile'        => $this->getRandomString(11),
                'blood_group'   => $this->getRandomString(3),
                'email'         => $this->getRandomString(20),
                'password'      => hash("sha256",$this->getRandomString(8)),
                'role'          => 2,
            ];
            $this->db->table('users')->insert($data);
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
