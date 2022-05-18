<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class commentscontroller extends Controller
{
    public function store(request $req)
    {
 
 $req->validate([
 'body'=>'required' 
]);  
$input = $req->all();
$input['user_id']= auth()->user()->id();
comment::create($input);
return back();
 }//
}
