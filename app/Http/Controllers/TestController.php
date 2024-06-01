<?php

namespace App\Http\Controllers;

use App\Models\Banca;
use App\Models\SocietateLeasing;
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
}
