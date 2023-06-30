<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller{

//Controller for the index route
 public function index(){
   $viewData = [];
   $viewData['title'] = "SoundWave - Home";
   return view("home.index")->with("viewData", $viewData);

 }

//controller for the about route
 public function about(){
   $data1 = "About Us - SoundWave";
   $data2 = "About us";
   $description = "We are a dedicated to bring you all the best in audio tech";
   $author = "Creation of Moe Designs";
   return view("home.about")->with("title", $data1)
   ->with("subtitle", $data2)
   ->with("description", $description)
   ->with("author",$author);
 }

}
