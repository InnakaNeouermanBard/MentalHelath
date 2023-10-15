<?php

namespace App\Http\Controllers;

use App\Models\edukasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EdukasiController extends Controller
{
    //
    public function index()
    {
        $edukasi = edukasi::all();
        return view('edukasi.index', compact('edukasi'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'isi_edukasi' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $edukasi = new edukasi();
        $edukasi->name = $request->name;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('edukasi', 'public');
            $edukasi->image = $imagePath;
        }

        $edukasi->save();

        return redirect()->route('edukasi.index')->with('success', 'edukasi created successfully');
    }

    public function edit($id)
    {
        $edukasi = edukasi::find($id);
        return view('edukasi.edit', compact('edukasi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'isi_edukasi' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $edukasi = edukasi::find($id);
        $edukasi->name = $request->name;

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($edukasi->image) {
                Storage::disk('public')->delete($edukasi->image);
            }

            $imagePath = $request->file('image')->store('edukasi', 'public');
            $edukasi->image = $imagePath;
        }

        $edukasi->save();

        return redirect()->route('edukasi.index')->with('success', 'edukasi updated successfully');
    }

    public function destroy($id)
    {
        $edukasi = edukasi::find($id);
        if ($edukasi->image) {
            Storage::disk('public')->delete($edukasi->image);
        }
        $edukasi->delete();

        return redirect()->route('edukasi.index')->with('success', 'edukasi deleted successfully');
    }
}
