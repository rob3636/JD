<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Menu;
class menuController extends Controller
{
    
     public function __construct(){
        $this->middleware('auth');
        
    }
  
    public function index()
    {
         $menues = Menu::all();
        
     return view('admin-menu', compact('menues'));
    }

   
    public function create()
    {
       return view('new-item');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newitem = new Menu($request->input());
        
        $newitem->title = $request->title;
        $newitem->price = $request->price;
        $newitem->description = $request->description;
        
        
       if($file = $request->hasFile('file')){
            
            $file = $request->file('file');
            
            $fileName = date("U")."_". $file->getClientOriginalName();
            $destinationPath = public_path(). '/menu/';
            $file->move($destinationPath,$fileName);
            
            $newitem->image = $fileName;
        }
        
        $newitem->save();
         return redirect('/admin/menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $single = Menu::find($id);
        return view('single-menu' , compact('single'));
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
    public function update(Request $request, $id)
    {
        $editSingle = Menu::find($id);
        
        $editSingle->title = $request['dish-name'];
        $editSingle->price = $request['price'];
        $editSingle->description = $request['description'];
//        $editSingle->image = $request['image'];
        
        
           
        if($file = $request->hasFile('file')){
            
            $file = $request->file('file');
            
            $fileName = date("U")."_". $file->getClientOriginalName();
            $destinationPath = public_path(). '/menu/';
            $file->move($destinationPath,$fileName);
            
            
            unlink(public_path() . '/menu/' . $editSingle->image);
            $editSingle->image = $fileName;
        
        
     
        }
           $editSingle->save();
        return redirect('admin/menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $deleteSingle = Menu::find($id);
        
unlink(public_path() . '/menu/' . $deleteSingle->image);
        
    $deleteSingle->delete();
        return redirect('/admin/menu');
    }
}