<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller{

    public function index(){
    	$title = "Sanni Michael Tomiwa";
    	return view('pages.index')->with('title',$title);
    }
    
    public function about(){
    	return view('pages.about');
    }

    public function services(){
     
    	$expertise = [
	    	'AngularJS',
	    	'Node JS',
	    	'Laravel',
	    	'Git and Github Essentials',
	    	'Pouch and CouchDB'
    	 ];
        

    	return view('pages.services')->with('expertise',$expertise);
    }

}

