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

}
