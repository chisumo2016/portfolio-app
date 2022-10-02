<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
  public  function  index()
  {
      $projects = Project::orderBy('id', 'DESC')->get();

      return response()->json([
          'projects' =>$projects
      ]);
  }
}
