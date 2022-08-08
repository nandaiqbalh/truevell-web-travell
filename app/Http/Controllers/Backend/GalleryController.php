<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\GalleryRequest;
use App\Models\Gallery;
use App\Models\TravelPackage;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::with('travel_package')->paginate(10);

        return view('backend.gallery.index', [
            'items' => $gallery,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $travel_packages = TravelPackage::all();
        return view('backend.gallery.create', [
            'travel_packages' => $travel_packages,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $data = $request->all();

        $data['image'] = $request->file('image')->store(
            'assets/gallery',
            'public'
        );


        Gallery::create($data);

        $notification = array(
            'message' => 'Create Gallery Success!',
            'alert-type' => 'success'
        );

        return Redirect()->route('galleries.index')->with($notification);
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
        $item = Gallery::findOrFail($id);
        $travel_packages = TravelPackage::latest()->get();

        return view('backend.gallery.edit', compact('item', 'travel_packages'));
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
        $data = $request->all();

        $gallery = Gallery::findOrFail($id);

        $oldPath = $gallery->image;
        // apakah user memasukkan photo?
        if ($request->file('image')) {
            // delete old photo
            @unlink(public_path('storage/' . $oldPath));

            // store new photopath
            $photoPath = $request->file('image')->store('assets/gallery', 'public');
            $data['image'] = $photoPath;
        } else {
            $data['image'] = $oldPath;
        }

        $gallery->update($data);

        $notification = array(
            'message' => 'Update Gallery Success!',
            'alert-type' => 'success'
        );

        return Redirect()->route('galleries.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        $oldPath = $gallery->image;
        @unlink(public_path('storage/' . $oldPath));

        $notification = array(
            'message' => 'Delete Gallery Success!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
