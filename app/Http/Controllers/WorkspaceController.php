<?php

namespace App\Http\Controllers;

use App\Models\Workspace;

use Illuminate\Http\Request;

use Auth;

class WorkspaceController extends Controller
{
    //
    public function create(){
        $workspace = new Workspace();
        $workspace->name = "workspace";
        $workspace->discription = "test";
        $workspace->owner_id = Auth::user()->id;
        $workspace->save();
        
        return redirect()->back();
    }
}
