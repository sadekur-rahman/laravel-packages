<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SadekurRahman\LaravelInstaller\Testing;

class PackageCheckingController extends Controller
{
    public function installer()
    {
        $testing = new Testing();
        return $testing->test();
    }
}
