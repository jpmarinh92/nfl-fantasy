<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function store() {
      
      request()->validate([
        "name"=> 'required',
        "location"=> 'required',
        "stadium"=> 'required'
      ]); 

      return request('Sent');
    }
}
