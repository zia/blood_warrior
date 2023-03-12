<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AlarmsSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 20; $i++)
        {
            $data = [
                'name'              => $this->getRandomString(4).' '.$this->getRandomString(4),
                'mobile'            => rand(10000000000, 11999999999),
                'district'          => rand(1,64),
                'blood_group'       => $this->getBloodGroup(),
                'address'           => $this->getRandomString(80),
                'reason'            => $this->getRandomString(50)
            ];
            $this->db->table('alarms')->insert($data);
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
