<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

//Controller for the index route
    public function index()
    {
        $viewData = [];
        $viewData['title'] = "SoundWave - Home";
        return view("home.index")->with("viewData", $viewData);
    }

//controller for the about route
    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About Us - SoundWave";
        $viewData["subtitle"]  = "About Us";
        $viewData["description"] = "Welcome To SoundWave";
        $viewData["author"] = "Creation of Moe Designs";
        return view("home.about")->with("viewData", $viewData);
    }
}
