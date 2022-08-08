<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\TravelPackageRequest;
use App\Models\TravelPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TravelPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travel_packages = TravelPackage::paginate(10);

        return view('backend.travel-package.index', [
            'travel_packages' => $travel_packages,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.travel-package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TravelPackageRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        TravelPackage::create($data);

        $notification = array(
            'message' => 'Create Travel Package Success!',
            'alert-type' => 'success'
        );

        return Redirect()->route('travel-packages.index')->with($notification);
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
        $item = TravelPackage::findOrFail($id);

        return view('backend.travel-package.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TravelPackageRequest $request, TravelPackage $travelPackage)
    {

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $travelPackage->update($data);

        $notification = array(
            'message' => 'Update Travel Package Success!',
            'alert-type' => 'success'
        );
        return Redirect()->route('travel-packages.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TravelPackage $travelPackage)
    {

        $travelPackage->delete();

        $notification = array(
            'message' => 'Delete Travel Package Success!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
