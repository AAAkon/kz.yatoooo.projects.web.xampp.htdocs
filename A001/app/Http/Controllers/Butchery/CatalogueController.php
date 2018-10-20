<?php

namespace App\Http\Controllers\Butchery;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatalogueController extends Controller
{
    
    public function index(){
    	return view('visitor.butchery.catalogue');
    }

    public function beef(){
    	return view('visitor.butchery.catalogue');
    }

    public function lamb(){
    	return view('visitor.butchery.catalogue');
    }

    public function pork(){
    	return view('visitor.butchery.catalogue');
    }

    public function poultry(){
    	return view('visitor.butchery.catalogue');
    }
}
