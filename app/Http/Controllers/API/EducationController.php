<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public  function  index()
    {
        $educations = Education::orderBy('id','desc')->get();

        return response()->json([
            'educations' =>$educations
        ],200);
    }
}
