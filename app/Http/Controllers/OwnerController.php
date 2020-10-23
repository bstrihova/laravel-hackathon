<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Owner;
use Illuminate\Database\Eloquent\Builder;


class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $surname = $request->input('surname');
        $name = $request->input('name');
        $query = Owner::with("animals")->orderBy("surname");

        if ($surname) {
            $query->where('surname', 'like','%' . $surname . '%'); 
        } 

        if ($name) {
            $query->whereHas('animals', function (Builder $query) use ($name){
                $query->where('animals.name', 'like', '%' . $name . '%' );
            });  
        }

        $owners = $query->get();
        
        return view("owners/index", compact("owners"));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('owners/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $owner = new Owner;

        $owner->first_name = $request->input('first_name');
        $owner->surname = $request->input('surname');
        $owner->address = $request->input('address');
        $owner->email = $request->input('email');
        $owner->phone_number = $request->input('phone_number');

        $owner->save();

        return redirect()->action('OwnerController@show', $owner->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $owner = Owner::with("animals")->findOrFail($id);
        return view("owners/show", compact("owner"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($owner_id)
    {
        $owner = Owner::findOrFail($owner_id);
        return view('owners/edit', compact('owner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $owner_id)
    {
        $owner = Owner::findOrFail($owner_id);

        $owner->first_name = $request->input('first_name');
        $owner->surname = $request->input('surname');
        $owner->address = $request->input('address');
        $owner->email = $request->input('email');
        $owner->phone_number = $request->input('phone_number');

        $owner->save();

        return redirect()->action('OwnerController@edit', $id);
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
