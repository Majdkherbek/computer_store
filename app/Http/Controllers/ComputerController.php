<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('com-docs.index' , [
            'com_docs'=>computer::all()
        ]);
    }
   /* private static function getData(){
        return [
            ['id'=>'1' , 'origin'=>'usa' , 'name'=>'hp' , 'price'=>'800$'] ,
            ['id'=>'2' , 'origin'=>'canda' , 'name'=>'dell' , 'price'=>'950$'] ,
            ['id'=>'3' , 'origin'=>'china' , 'name'=>'lenovo' , 'price'=>'1100$'] ,
            ['id'=>'4' , 'origin'=>'taiwan' , 'name'=>'asus' , 'price'=>'1500$']
        ];
    }*/

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('com-docs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $computer=new computer();
        $computer->name = $request->input('computer-name') ;
        $computer->origin = $request->input('computer-origin') ;
        $computer->price = $request->input('computer-price') ;

        $computer->save();
        return redirect()->route('computers');   
    }

    /**
     * Display the specified resource.
     */
   /* public function show(string $id)
    {
        $com_docs = self::getData();

        $index = array_search($id, array_column($com_docs, 'id'));

        if ($index === false) {
            abort(404);
        }

        return view('com-docs.show', [
            'com_data' => $com_docs[$index]
        ]);
    }8*/

     public function show(string $id)
    {
        $com_data = Computer::findOrFail($id);

        return view('com-docs.show', [
            'com_data' => $com_data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
