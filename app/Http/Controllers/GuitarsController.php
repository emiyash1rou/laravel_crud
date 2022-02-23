<?php

namespace App\Http\Controllers;
use App\Models\Guitar;
use Illuminate\Http\Request;
use App\Http\Requests\GuitarFormRequest;

class GuitarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private static function getData(){
        return [
            ['id' =>1, 'name' =>'American Standard Strat', 'brand' => 'Fender','year_made'=>"2022" ],
          ['id' =>2, 'name' =>'Starla', 'brand' => 'PRS','year_made'=>"2011" ],
          ['id' =>3, 'name' =>'Mer', 'brand' => 'kun','year_made'=>"2012" ],
          ['id' =>4, 'name' =>'Merhamdin', 'brand' => 'kon','year_made'=>"2020" ]
        ];
    }
    public function index()
    {
        return view('admin_dashboard',[
            'guitars' => Guitar::all() ]   );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuitarFormRequest $request)
    {
        $data = $request->validated();
        // POST
     
        $guitar=new Guitar();
        $guitar->name= $data['guitar-name'];
        $guitar->brand= $data['brand'];
        $guitar->year_made= $data['year-made'];
        $guitar->save();
        return redirect()->route('guitars.index');
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
    public function edit(Guitar $guitar)
    {
        //
        return view('guitars.guitar_edit',[
            'guitars' =>  $guitar,
            'userInput' => '<script>alert("hello")</script>' ]   );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GuitarFormRequest $request, Guitar $guitar)
    {
        // POST, PUT OR PATCH
        
        
        
        $data = $request->validated();

    
        $guitar->name= $data['guitar-name'];
        $guitar->brand= $data['brand'];
        $guitar->year_made= $data['year-made'];
        $guitar->save();
        return redirect()->route('guitars.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guitar $guitar)
    {
        echo "heello";
        $guitar->delete();
        return redirect()->route('guitars.index');
        //
    }
}
