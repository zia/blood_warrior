<?php

namespace App\Models;

use CodeIgniter\Model;

class AlarmsModel extends Model
{
    protected $table = 'alarms';
    protected $allowedFields = ['name', 'mobile', 'district', 'blood_group', 'address', 'reason'];
}