<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ersonModel;

class SelectController extends Controller
{
    public function activeUser($intUserId)
    {
        $user = SelectController::find($intUserId);
        return $user;
    } 
}
