<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Candidates;
use App\Models\Skill_sets;
use App\Models\Skills;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
        // dd($request);

        $validator = Validator::make($request->all(), [
            'job_id'     => 'required',
            'name'   => 'required',
            'email'   => 'required|email|unique:candidates',
            'phone'   => 'required',
            'year'   => 'required',
            'skill'  => 'required'
        ]);

        //check if validation fails
        if ($validator->fails()) {
            Alert::error('Gagal', 'Terjadi kesalahan!');
            return response()->json($validator->errors(), 422);
        }
        $candidate_id = Candidates::all();
        $jumlah_candidate = $candidate_id->count();
        $skill_id = $request->skill;
        $skillsets_data = [];
        // $data_skill = [];
        for ($i=0; $i < count($skill_id); $i++) {
            array_push($skillsets_data,['candidate_id' => $jumlah_candidate,'skill_id' => $skill_id[$i]]);
        }

        Skill_sets::InsertOrIgnore($skillsets_data);
        $candidates = Candidates::create($request->all());
        Alert::success('Sukses', 'Operasi berhasil dilakukan!');


        return response()->json([$candidates,$skillsets_data], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Candidates $candidates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidates $candidates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Candidates $candidates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidates $candidates)
    {
        //
    }
}
