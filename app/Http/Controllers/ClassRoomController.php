<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classRooms = ClassRoom::all();

        return view('class-rooms.index', compact('classRooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('class-rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string'
        ]);

        ClassRoom::create($request->all());

        return to_route('class-rooms.index')->with('success', 'Data Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ClassRoom $classRoom)
    {
        return view('class-rooms.show', compact('classRoom'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClassRoom $classRoom)
    {
        return view('class-rooms.edit', compact('classRoom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClassRoom $classRoom)
    {
        $request->validate([
            'name' => 'required|string'
        ]);

        $classRoom->update($request->all());

        return to_route('class-rooms.index')->with('success', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClassRoom $classRoom)
    {
        $classRoom->delete();

        return to_route('class-rooms.index')->with('success', 'Data Berhasil dihapus!');
    }
}
