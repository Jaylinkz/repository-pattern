<?php
namespace App\Repository;
use App\Models\member;
// use App\Repository\iMemberRepo;

class QuoteRepo implements iMemberRepo{


public function getAll(){
        dd(member::all());
    }
}