<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Http\Requests\StoreReportRequest;
use App\Http\Requests\UpdateReportRequest;
use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.reports.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'rescuer' => 'string|max:225|required',
            'image' => 'required|mimes:jpeg,gif,svg,jpg|max:2048',
            'name' => 'string|max:225|required',
            'gender' => 'string|max:225|required',
            'age' => 'string|max:225|required',
            'description' => 'string|max:225|required',
        ],[
            'rescuer.required' => 'Nama Harus Di Isi',
            'image.required' => 'Harus Memasukkan Gambar',
            'image.max' => 'Gambar tidak boleh lebih dari 2MB',
            'image.mimes' => 'Image Harus Dengan Format jpeg, gif, svg, jpg',
            'name.required' => 'Nama Hewan Harus Di Isi',
            'gender.required' => 'Jenis Hewan Harus Di Isi',
            'age.required' => 'Umur Hewan Harus Di Isi',
            'description.required' => 'Deskripsi Hewan Harus Di Isi',
        ]);


        try {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public'); // Simpan di folder 'images' dalam storage/app/public

            // Simpan path ke database jika perlu
            // Model::create(['image_path' => $path]);

            $data = [
                'user_id' => Auth::user()->id ?? null,
                'status' => 'Pending',
                'rescuer' => $request->rescuer,
                'image' => $path ?? null,
                'name' => $request->name,
                'gender' => $request->gender,
                'age' => $request->age,
                'description' => $request->description,
            ];

            Animal::create($data);
            Report::create($data);

            return redirect()->route('list')->with('successMessage', 'Laporan Berhasil Dibuat');
        }
    } catch (\Throwable $th) {
            return redirect()->route('list')->with('errorMessage', 'Laporan Gagal Dibuat'());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReportRequest $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        //
    }
}
