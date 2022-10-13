<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class HomepageController extends Controller
{
    public function index()
    {
        return view("homepage.index");
        // return(route("homepage"));
    }

    public function services()
    {
        return view("services.services");
    }

    public function contact()
    {
        return view("contacts.contact");
    }

    public function about()
    {
        return view("about.about");
    }
}
