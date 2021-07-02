<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function listApartment(){
        $apartments = Apartment::paginate(6);
        return view("pages.list_apartment",[
            "apartments"=>$apartments
        ]);
    }
}
