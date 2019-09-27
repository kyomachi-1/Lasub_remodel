<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ring;  

class RingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (\Auth::check()) {
            $user = \Auth::user();
            $id = \Auth::id();
            $rings = $user->rings->where('user_id', $id);
            $num_rings = $rings->count();
            $customer_id = $user->customer_id;

            return view('rings.index',[
                'rings' => $rings,
                'num_rings' => $num_rings,
                'customer_id' => $customer_id
                ]);

        } else {
            return view('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ring = new Ring;
        
        return view('rings.create',[
            'ring' => $ring,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (\Auth::check()) {
            $user = \Auth::user();
            $id = \Auth::id();
            $ring = new Ring;
            $ring->user_id = $id;
            $ring->ring_name = $request->ring_name;
            $ring->save();
    
            return redirect('/rings');
        } else {
            return view('/');
        }
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
        $ring = Ring::find($id);
        
        return view('rings.edit',[
            'ring' => $ring,
            ]);
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
        $ring = Ring::find($id);
        $ring->ring_name = $request->ring_name;
        $ring->save();
        return redirect('rings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ring = Ring::find($id);
        $ring->delete();
        return redirect('rings');
    }
}
