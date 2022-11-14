<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return response()->json(Address::with('user:id,name')->latest()->get(), 200);
        return Address::with('user:id')->whereBelongsTo($request->user())->get();
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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'line1' => 'required|string|max:255',
            'line2' => 'nullable|string|max:255',
            'line3' => 'nullable|string|max:255',
            'line4' => 'nullable|string|max:255',
            'city' => 'string|max:255',
            'postal_code' => 'string|max:255',
            'country_code' => 'string|max:255',
            'state_code' => 'string|max:255',
            'state_name' => 'string|max:255',
        ]);

        $request->user()->addresses()->create($validated);

        return response("", 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        $this->authorize('update', $address);

        $validated = $request->validate([
            'line1' => 'required|string|max:255',
            'line2' => 'nullable|string|max:255',
            'line3' => 'nullable|string|max:255',
            'line4' => 'nullable|string|max:255',
            'city' => 'string|max:255',
            'postal_code' => 'string|max:255',
            'country_code' => 'string|max:255',
            'state_code' => 'string|max:255',
            'state_name' => 'string|max:255',
        ]);

        $address->update($validated);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        $this->authorize('delete', $address);
 
        $address->delete();
 
        return response("", 200);
    }
}
