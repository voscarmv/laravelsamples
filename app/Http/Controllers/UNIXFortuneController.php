<?php

namespace App\Http\Controllers;

use Collective\Remote\RemoteServiceProvider;
use Illuminate\Http\Request;

class UNIXFortuneController extends Controller
{

private $output;
    //
    public function index(){
		\SSH::run("/usr/games/fortune", function($line){
			$this->output=$line.PHP_EOL;
		});

    	return $this->output;; // re learn views blade
    }
}
