<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'Daftar Foto';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'Form Tambah Foto';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'Proses Simpan Foto';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'Detail Foto dengan ID: ' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'Form Edit Foto ID: ' . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return 'Proses Update Foto ID: ' . $id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'Hapus Foto ID: ' . $id;
    }
}