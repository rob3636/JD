<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Hero;

class heroController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }
  
    public function index()
    {
     $hero = Hero::all();
     return view('admin-hero', compact('hero'));
    }

   
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
   
    }

    
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $hero = Hero::find(1);
        
        if($file = $request->hasFile('hero')){
            
            $file = $request->file('hero');
            
            $fileName = date("U")."_". $file->getClientOriginalName();
            $destinationPath = public_path(). '/hero-image/';
            $file->move($destinationPath,$fileName);
            
            
            unlink(public_path() . '/hero-image/' . $hero->image);
            $hero->image = $fileName;
        }
        
        $hero->save();
        return redirect('/admin/hero')->with('success', true);
                        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}