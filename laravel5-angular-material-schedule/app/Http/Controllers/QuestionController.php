<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Question;

class QuestionController extends Controller
{
    //
    public function create(Request $request) {
    	$this->validate([
    		'problem' => 'required|string',
    		'true_answer' => 'required|integer'
    	]);

    	$question = new Question();
    	$question->problem = $request->input('problem');
    	$question->true_answer = $request->input('true_answer');
    	$question->options = $request->input('options');
    	$question->save();

    	return response()->success(compact('queston'));
    }

    public function index(Request $request) {   	

    	$question = Question::where('id','=','1')
    		->get();

    	return response()->json($question);
    }
}
