<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawans = Karyawan::orderBy('id', 'asc')->paginate(10);
        return view('admin.karyawan.index', [
            'karyawans' => $karyawans
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.karyawan.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nik' => 'required|unique:karyawans|max:15',
            'name' => 'required',
        ]);

        $karyawans = new Karyawan;
        $karyawans->nik = $request->nik;
        $karyawans->name = $request->name;
        $karyawans->gender = $request->gender;
        $karyawans->religion = $request->religion;
        $karyawans->address = $request->address;
        $karyawans->phone_number = $request->phone_number;
        $karyawans->status = $request->status;
        $karyawans->birthday = $request->birthday;
        $karyawans->dateIn = $request->dateIn;
        $karyawans->dateOut = $request->dateOut;

        DB::transaction(function () use ($karyawans) {
            $karyawans->save();
        });
        return redirect()
            ->route('admin.karyawan.index')
            ->with([
                'success_message', 'Successfully Created Karyawan! '
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan, $karyawanId)
    {
        $karyawan = Karyawan::where('id', $karyawanId)->first();
        return view('admin.karyawan.show', [
            'karyawan' => $karyawan
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
        abort(404);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            // 'nik' => 'required',
            'name' => 'required',
        ]);
        $karyawans = Karyawan::find($id);
        $karyawans->name = $request->name;
        $karyawans->gender = $request->gender;
        $karyawans->religion = $request->religion;
        $karyawans->address = $request->address;
        $karyawans->phone_number = $request->phone_number;
        $karyawans->status = $request->status;
        $karyawans->birthday = $request->birthday;
        $karyawans->dateIn = $request->dateIn;
        $karyawans->dateOut = $request->dateOut;
        DB::transaction(function () use ($karyawans) {
            $karyawans->save();
        });
        return redirect()
            ->route('admin.karyawan.index')
            ->with([
                'success_message', 'Successfully Upadated Karyawan! '
            ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan, Request $request)
    {
        $karyawan = Karyawan::find($request->id);
        DB::transaction(function () use ($karyawan) {
            $karyawan->delete();
        }, 5);

        return redirect()
            ->route('admin.karyawan.index')
            ->with('success_message', 'Successfully Delete Karyawan! ');
    }
}
