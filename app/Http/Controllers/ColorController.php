<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']  = 'Product color list';
        $data['colors'] = Color::all();

        return view('admin.business-settings.product-color.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Add product color information';

        return view('admin.business-settings.product-color.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:colors',

        ]);
        $color          = new Color();
        $color->name    = $request->name;
        $color->details = $request->details;
        $color->save();
        session()->flash('message', 'Product color information added successfully');

        return redirect()->route('product-color.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Color $color
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Color $color)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Color $color
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = 'Edit product color information';
        $data['color'] = Color::findOrFail($id);

        return view('admin.business-settings.product-color.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Color        $color
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'   => 'required|unique:colors,name,' . $id,
            'status' => 'required',
        ]);

        $color          = Color::findOrFail($id);
        $color->name    = $request->name;
        $color->details = $request->details;
        $color->status  = $request->status;
        $color->update();
        session()->flash('message', 'Product color information updated successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Color $color
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $color = Color::findOrFail($id);
        $color->delete();
        session()->flash('error', 'Product color information deleted successfully');

        return redirect()->back();
    }
}
