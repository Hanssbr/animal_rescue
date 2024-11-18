<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use App\Http\Requests\StoreAdoptionRequest;
use App\Http\Requests\UpdateAdoptionRequest;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.adopts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $data = Report::findOrFail($id);
        return view('pages.adopts.create',[
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'name' => 'string|max:225|required',
            'email' => 'string|max:225|required',
            'telp' => 'string|max:225|required',
            'address' => 'string|max:225|required',
            'image' => 'required|mimes:jpeg,gif,svg,jpg|max:2048',
            'description' => 'string|max:225|required',
        ],[
            'name.required' => 'Nama Harus Di Isi',
            'email.required' => 'Email Harus Di Isi',
            'telp.required' => 'Nomer Telepon Harus Di Isi',
            'address.required' => 'Alamat Harus Di Isi',
            'image.required' => 'Harus Memasukkan Gambar',
            'image.max' => 'Gambar tidak boleh lebih dari 2MB',
            'image.mimes' => 'Image Harus Dengan Format jpeg, gif, svg, jpg',
            'description.required' => 'Deskripsi Hewan Harus Di Isi',
        ]);



        try {
            DB::beginTransaction();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public'); // Simpan di folder 'images' dalam storage/app/public

            // Simpan path ke database jika perlu
            // Model::create(['image_path' => $path]);

            $report = Report::where('id', $id)->first();
            $report->status = 'Adopted';
            $report->save();

            $data = [
                'user_id' => Auth::user()->id ?? null,
                'name' => $request->name,
                'email' => $request->telp,
                'telp' => $request->telp,
                'address' => $request->address,
                'image' => $path ?? null,
                'description' => $request->description,
            ];

            Adoption::create($data);
            DB::commit();
            return redirect()->route('list')->with('successMessage', 'Laporan Berhasil Dibuat');
        }
    } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('list')->with('errorMessage', 'Laporan Gagal Dibuat |' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Adoption $adoption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Adoption $adoption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdoptionRequest $request, Adoption $adoption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adoption $adoption)
    {
        //
    }
}
