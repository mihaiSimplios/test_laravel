<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function __construct(protected Driver $driver) {}

    public function index()
    {
        return $this->driver->all();
    }
}
