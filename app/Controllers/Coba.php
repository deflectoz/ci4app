<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo 'Coba';
    }

    public function about($nama = ' ', $umur = 0)
    {
        echo "Hello, My Name Is $nama. Saya Berumur $umur Tahun";
    }
}
