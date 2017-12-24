<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SectionOne;
use App\SectionTwo;
use App\SectionThree;

class AdminController extends Controller
{
    public function index(){
      return view('admin.index');
    }
}
