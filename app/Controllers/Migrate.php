<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Throwable;

class Migrate extends Controller
{
    public function index()
    {
        $forge = \Config\Database::forge();

        try {
            $forge->createDatabase('blood_warriors_db', true);
            echo 'Databe Created Successfully.';
        } catch (Throwable $e) {
            echo '<pre>';
            print_r($e);
        }

        $migrate = \Config\Services::migrations();

        try {
            $migrate->latest();
            echo 'Migrated to the latest succefully.';
        } catch (Throwable $e) {
            echo '<pre>';
            print_r($e);
        }
    }
}