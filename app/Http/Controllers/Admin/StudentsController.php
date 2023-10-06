<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    const PATH_FODER = 'admin.student';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Danh sách học sinh";
        $data = Students::query()->with(['classrooms'])->orderByDesc('id')->paginate(20);
        return view(self::PATH_FODER . DOT .__FUNCTION__,compact('title','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm mới học sinh";
        return view(self::PATH_FODER . DOT .__FUNCTION__,compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        $title = "Chi tiết học sinh";
        $data = Students::query()->findOrFail($id);
        return view(self::PATH_FODER . DOT .__FUNCTION__,compact('title','data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
