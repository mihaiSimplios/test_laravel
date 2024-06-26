<?php

namespace App\Http\Controllers;

use App\Models\Banca;
use App\Models\Car;
use App\Models\Client;
use App\Models\SocietateLeasing;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testContacte()
    {
        $societateLeasing = SocietateLeasing::first();
        $contacts = $societateLeasing->contacts;

        // afisam numele contactelor asociate societatii de leasing
        echo 'Nume societate leasing: ' . $societateLeasing->name . "</br>";
        echo 'Contacte asociate societatii de leasing: </br>';
        foreach ($contacts as $contact) {
            echo $contact->name . "</br>";
        }
        echo "</br>";

        $banca = Banca::first();
        $contacts = $banca->contacts;

        // afisam numele contactelor asociate bancii
        echo 'Nume banca: ' . $banca->name . "</br>";
        echo 'Contacte asociate bancii: </br>';
        foreach ($contacts as $contact) {
            echo $contact->name . "</br>";
        }
    }

    public function testCar()
    {
        // Eager loading
        $cars = Car::with(['engine', 'drivers'])->get();

        return view('cars.index', compact('cars'));
    }

    public function testClientObserver()
    {
        // Testam inserarea unui client
        Client::create([
            'name' => 'Clientul inserat'
        ]);

        // Testam actualizarea unui client
        $client = Client::first();
        $client->name = 'Client updatad';
        $client->save();
    }
}
