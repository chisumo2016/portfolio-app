<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public  function  index()
    {
        $skills = Skill::with('service')->orderBy('id','DESC')->get();
        return response()->json([
            'skills' => $skills
        ],200);
    }

    public  function  create(Request $request)
    {
        $this->validate($request,[
            'name' => 'required'
        ]);

        $skill = new Skill();
        $skill->name            = $request->name;
        $skill->proficiency     = $request->proficiency;
        $skill->service_id      = $request->service_id;
        $skill->save();
    }
}
