<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Property = Property::orderby('price', 'DESC')->get();
        return view('property.index', compact('Property'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('property.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate
        $this->validate($request, [
            'location' => 'required|min:3|max:40'
        ]);
        $this->validate($request, [
            'seller_name' => 'required|min:3|max:40'
        ]);
        $this->validate($request, [    
        'seller_email' => 'required|min:6|max:50|unique:properties'
        ]);
        $this->validate($request, [
        'price' => 'required|min:3|max:20'
        ]);

        $Property = new Property();
        $Property->location = $request->location;
        $Property->seller_name = $request->seller_name;
        $Property->seller_email = $request->seller_email;
        $Property->price = $request->price;
        $Property->save(); 


        return redirect(route('property.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Property = Property::findOrFail($id);
        return view('property.edit', compact('Property'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                $Property = Property::findOrFail($id);
                $Property->delete(); 
        
                return redirect()->route('property.index');
    }
}
