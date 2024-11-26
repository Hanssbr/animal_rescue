<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Report;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('pages.admins.admin');
    }



    public function view() {
    $data = Report::all();
        return view('pages.admins.report',[
            'data' => $data
        ]);
    }

    public function review() {
    $data = Animal::where('status', 'Pending')->get();
        return view('pages.admins.review',[
            'data' => $data
        ]);
    }


    public function addStatus($id) {
    $data = Animal::findOrFail($id);
    $data->status = 'Rescued';
    $data->save();

    return redirect()->route('animal.review')->with('successMessage', 'Laporan Berhasil Di Tambahkan');
    }

    public function delete($id) {
    $data = Animal::findOrFail($id);
    $data->delete();

    return redirect()->route('animal.review')->with('dangerMessage', 'Laporan Berhasil Di Hapus');
    }


    public function animalStatus($id) {
    $data = Animal::findOrFail($id);
    $data->status = 'Adopted';
    $data->save();

    return redirect()->route('admin.adopt')->with('successMessage', 'Adopsi Berhasil Di Setujui');
    }


}
