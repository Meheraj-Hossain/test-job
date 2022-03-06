<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Product size list';
        $data['sizes'] = Size::all();

        return view('admin.business-settings.product-size.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Add product size information';

        return view('admin.business-settings.product-size.create', $data);
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
            'name' => 'required|unique:sizes',

        ]);
        $size          = new Size();
        $size->name    = $request->name;
        $size->details = $request->details;
        $size->save();
        session()->flash('message', 'Product size information added successfully');

        return redirect()->route('product-size.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Size $size
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Size $size)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Size $size
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = 'Edit product size information';
        $data['size']  = Size::findOrFail($id);

        return view('admin.business-settings.product-size.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Size         $size
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'   => 'required|unique:sizes,name,' . $id,
            'status' => 'required',
        ]);

        $size          = Size::findOrFail($id);
        $size->name    = $request->name;
        $size->details = $request->details;
        $size->status  = $request->status;
        $size->update();
        session()->flash('message', 'Product size information updated successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Size $size
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $size = Size::findOrFail($id);
        $size->delete();
        session()->flash('error', 'Product size information deleted successfully');

        return redirect()->back();
    }
}
