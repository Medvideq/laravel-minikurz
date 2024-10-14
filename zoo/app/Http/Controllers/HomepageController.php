<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //pokud funkce vyúpisuje nejakou sablonu, tak se vetsinou nazyva index
    function index() {
        $polePromennych = array();
        $polePromennych["datum"] = date("d-m-Y");
        $polePromennych["stavNavstevnosti"] = rand(0, 100);
        $polePromennych["zvireMesice"] = "koala";
        $polePromennych["jeOtevreno"] = false;
        $polePromennych["casyKrmeni"] = array("8:00", "12:00", "15:15", "18:05");


        return view("homepage", $polePromennych);
    }
}

