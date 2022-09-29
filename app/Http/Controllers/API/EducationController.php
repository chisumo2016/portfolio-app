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

    public  function  create(Request $request)
    {
        $this->validate($request, [
            'institution' => 'required'
        ]);

        $education = new Education();
        $education->institution = $request->institution;
        $education->period      = $request->period;
        $education->degree      = $request->degree;
        $education->department  = $request->department;
        $education->save();
    }
}
