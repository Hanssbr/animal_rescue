<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Http\Requests\StoreAnimalRequest;
use App\Http\Requests\UpdateAnimalRequest;
use App\Models\Report;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $data = Animal::whereIn('status', ['Rescued', 'Adopted'])->get();
        return view('pages.animals.index',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function search(Request $request)
    {
        $query = $request->input('query');

        $data = Animal::when($query, function ($queryBuilder) use ($query) {
            $queryBuilder->where('status', '!=', 'Pending') // Filter status
                ->where(function ($subQuery) use ($query) {
                    $subQuery->where('name', 'like', "%$query%")
                        ->orWhere('description', 'like', "%$query%")
                        ->orWhere('gender', 'like', "%$query%")
                        ->orWhere('species', 'like', "%$query%");
                });
        })->get();


        return view('pages.animals.index', compact('data', 'query'));
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnimalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnimalRequest $request, Animal $animal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        //
    }
}
