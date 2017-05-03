<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Menu;
use App\Gallery;
use App\Hero;
class mainController extends Controller
{
   
    public function index()
    {
        $menues = Menu::all();
        $hero = Hero::all();
        
        return view('welcome', compact('menues' , 'hero'));
    }
    
 public function gallery()
    {
         $hero = Hero::all();
         $gallery = Gallery::all();
     
        return view('gallery', compact('hero' , 'gallery'));
    }
    
   
}