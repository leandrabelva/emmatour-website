<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::all();
        return view('admin.packages.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validasi Data yang masuk dari formulir.
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'harga' => 'required|numeric',
            'hotel' => 'nullable|string',
            'maskapai' => 'nullable|string',
            'fasilitas' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Aturan validasi untuk gambar
        ]);

        // 2. Mengelola Unggahan Gambar.
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('packages', 'public');
        }

        // 3. Menyimpan Data ke Database.
        Package::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'harga' => $validated['harga'],
            'hotel' => $validated['hotel'],
            'maskapai' => $validated['maskapai'],
            'fasilitas' => $validated['fasilitas'],
            'image' => $imagePath, // Simpan path gambar ke kolom 'image'
        ]);

        // 4. Redirect ke halaman daftar paket dengan pesan sukses.
        return redirect()->route('admin.packages.index')->with('success', 'Paket berhasil ditambahkan!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        return view('admin.packages.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        // 1. Validasi data
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'harga' => 'required|numeric',
            'hotel' => 'nullable|string',
            'maskapai' => 'nullable|string',
            'fasilitas' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // 2. Kelola unggahan gambar jika ada yang baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($package->image) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($package->image);
            }
            $imagePath = $request->file('image')->store('packages', 'public');
            $validated['image'] = $imagePath;
        }

        // 3. Perbarui data paket
        $package->update($validated);

        // 4. Redirect dengan pesan sukses
        return redirect()->route('admin.packages.index')->with('success', 'Paket berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        // 1. Hapus file gambar jika ada
        if ($package->image) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($package->image);
        }

        // 2. Hapus data paket dari database
        $package->delete();

        // 3. Redirect kembali dengan pesan sukses
        return redirect()->route('admin.packages.index')->with('success', 'Paket berhasil dihapus!');
    }
}
