<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Group;

class GroupController extends Controller
{
    //

	public function create(Request $request) {
		$this->validate($request, [
    		'name' => 'required'
    	]);

    	/*$group = new Group();
    	$group->name = $request->input('name');
    	$group->description = $request->input('description');
    	$group->options = $request->input('options');
    	$group->save();*/

    	return response()->success($request->input('name'));
	}

}
