<?php

namespace App\Models;

use CodeIgniter\Model;

class DistrictsModel extends Model
{
    protected $table = 'districts';
    protected $allowedFields = ['name_bn', 'name_en'];
}