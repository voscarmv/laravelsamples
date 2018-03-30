<?php

namespace App\Http\Controllers;

use Collective\Remote\RemoteServiceProvider;
use Illuminate\Http\Request;

class Examples extends Controller
{

	private $output;
    //

	public function unixfortune(){
		\SSH::run("/usr/games/fortune", function($line){
			$this->output=$line.PHP_EOL;
		});
		return view('unixfortune', array('fortune' => $this->output));
    }

	public function brownmadlibs(){
		\SSH::run("cd code/babacot/brown && ./generate.sh 4", function($line){
			$this->output=$line.PHP_EOL;
		});
		return view('brownmadlibs', array('madlibs' => $this->output));
    }

    public function form(){
    	return view('form', array('input' => 'henlo'));
    }

    public function response(Request $request){
    	 \App\Post::create(array('name' => $request->input('username')));
    	 $post = new \App\Post();

    	 $data = $post->all(array('name','id'));
    	 foreach ($data as $list) {
        	echo $list->id . ' ' . $list->name . '<br>';
    	}
    	 //\App\Post::create(array('name', 'heblord'));
    	return $request->input('username');
    }

}
