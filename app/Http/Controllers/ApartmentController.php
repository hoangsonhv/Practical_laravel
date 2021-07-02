<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function list(){
        $apartments = Apartment::all()->paginate(6);
        return view("list_apartment",[
            "apartments"=>$apartments
        ]);
    }
}
