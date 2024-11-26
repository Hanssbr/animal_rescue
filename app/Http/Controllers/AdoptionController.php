<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use App\Http\Requests\StoreAdoptionRequest;
use App\Http\Requests\UpdateAdoptionRequest;
use App\Models\Animal;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.adopts.index');
    }


    public function admin()
    {   $data = Adoption::all();
        return view('pages.admins.adopt',[
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($uuid)
    {
        $data = Animal::where('uuid', $uuid)->firstOrFail();
        return view('pages.adopts.create',[
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $uuid)
    {
        $request->validate([
            'name' => 'string|max:225|required',
            'email' => 'string|max:225|required|email',
            'telp' => 'string|max:225|required',
            'address' => 'string|max:225|required',
            'image' => 'required|mimes:jpeg,gif,svg,jpg|max:2048',
            'description' => 'string|max:225|required',
        ],[
            'name.required' => 'Nama Harus Di Isi',
            'email.required' => 'Email Harus Di Isi',
            'email.email' => 'Email Tidak Valid',
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

            $animal = Animal::where('uuid', $uuid)->firstorFail();
            $animal->uuid = Str::uuid()->toString();
            $animal->status = 'Rescued';
            $animal->save();

            $data = [
                'user_id' => Auth::user()->id ?? null,
                'animal_id' => $animal->id,
                'name' => $request->name,
                'email' => $request->email,
                'telp' => $request->telp,
                'address' => $request->address,
                'image' => $path ?? null,
                'description' => $request->description,
                'status' => 'pending',
            ];

            Adoption::create($data);
            DB::commit();
            return redirect()->route('list')->with('successMessage', 'Adopsi Sedang Ditinjau');
        }
    } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('list')->with('errorMessage', 'Adopsi Gagal Dibuat');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Animal::findOrFail($id);
        return view('pages.admins.animal',[
            'data' => $data
        ]);
    }


    public function adoptionDelete($id) {
    $data = Adoption::findOrFail($id);
    $data->delete();

    return redirect()->route('admin.adopt')->with('successMessage', 'Pengajuan Adopsi Berhasil Di Hapus');
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
