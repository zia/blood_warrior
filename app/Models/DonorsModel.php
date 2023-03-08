<?php

namespace App\Models;

use CodeIgniter\Model;

class DonorsModel extends Model
{
    protected $table = 'donors';
    protected $allowedFields = ['name', 'mobile', 'email', 'district', 'blood_group', 'address'];
}