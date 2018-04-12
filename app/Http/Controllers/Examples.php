<?php

namespace App\Http\Controllers;

use Collective\Remote\RemoteServiceProvider;
use Illuminate\Http\Request;

class Examples extends Controller
{

	private $output;
    private $test;
    //

	public function unixfortune(){
$this->output="";
		\SSH::run("cd bogambo.net/laravel/fortunes && ./fortune.sh", function($line){
			$this->output=$this->output.$line." ";
		});
		return view('unixfortune', array('fortune' => $this->output));
    }

	public function brownmadlibs(){
$this->line="";
		\SSH::run("cd bogambo.net/laravel/brown && sh generate.sh 4", function($line){
$this->output=$this->output.$line." ";
		});
		return view('brownmadlibs', array('madlibs' => $this->output));
    }

    public function form(){
        $post = new \App\Post();
        $data = $post->all();
    	return view('form', array('input' => $data));
    }

    public function response(Request $request){
        $chars = 256;
        $inputx = $request->input('username');
        if (strlen($inputx) > $chars){
            $inputx = substr($inputx, 0, $chars);
        }

    	 \App\Post::create(array('name' => $inputx));
    	 $post = new \App\Post();
         $howmany = 20;

         if (\App\Post::count() > $howmany){
            $lastfive = $post->orderBy('post.created_at', 'desc')->skip($howmany)->first();
            $post->where('created_at', '<=', $lastfive->created_at)->delete();
         }


    	 $data = $post->all();
//         $html = "";
//    	 foreach ($data as $list) {
//        	$html = $html . $list->created_at . ' ' . $list->name . '<br> ';
//    	}
    	 //\App\Post::create(array('name', 'heblord'));
    	return view('form', array('input' => $data));
    }

}
