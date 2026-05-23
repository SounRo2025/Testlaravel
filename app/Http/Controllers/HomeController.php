<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index()
{
$viewData = [];
$viewData["title"] = "Home Page - Online Store";
return view('home.index')->with("viewData", $viewData);
}
public function about()
{
$viewData = [];
$viewData["title"] = "About us - Online Store";
$viewData["subtitle"] =  "About us";
$viewData["description"] =  "Is this the place we used to love is this the place that we called home? This is the place we used to love Is this the place that we called home?  If I had to go back, this is the place I would go. If I had to go back, this is the place I would go.  Back to the place that I love, I was born and raised in South Detroit. I lived a few blocks from where the river meets the sky.  If I had to go back, this is the place I would go. If I had to go back, this is the place I would go.";
$viewData["author"] = "Developed by: Team Me";
return view('home.about')->with("viewData", $viewData);

}

}
