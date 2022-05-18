<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class members extends Controller
{
   public function index()
   {
      $input = new member;
      $input->name = "jay";
      $input->address = "jos";
      $input->save();
       
   }
}
