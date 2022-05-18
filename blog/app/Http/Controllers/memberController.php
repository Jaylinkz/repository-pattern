<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
use App\Repository\iMemberRepo;

class memberController extends Controller

{
  public iMemberRepo $members;
  public function __construct(iMemberRepo $members )
  {
      $this->members = $members;

  }
  public function index()
  {
     $this->members->getAll(); 
 }
}
