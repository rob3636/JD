<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Gallery;

class galleryController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
        
    }
  
    public function index()
    {
       $pictures = Gallery::all();
      
        
        return view('admin-gallery', compact('pictures'));
    }

   
    public function create()
    {
      
    }

   
    public function store(Request $request)
    {

        $gallery = new Gallery();
            
        $image = $request->file('file');
        $imageName = time().$image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);
        $gallery->image = $imageName;
        $gallery->save();
        return response()->json(['success'=>200]);
        
    }

   
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
unlink(public_path() . '/images/' . $gallery->image);
        
        $gallery->delete();
        
        return redirect('admin/gallery');
    }
}