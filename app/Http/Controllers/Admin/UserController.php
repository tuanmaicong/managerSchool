<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    const PATH_FOLDER = 'admin.user.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::query()->with(['role'])->paginate(5);
        $title = 'Danh sách người dùng';
        return view(self::PATH_FOLDER . __FUNCTION__,compact('data','title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = 'Thêm mới người dùng';
        return view(self::PATH_FOLDER . __FUNCTION__,compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        User::query()->create($request->all());

        return redirect()->route('admin.users.index');
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
        //
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
        $user = User::query()->findOrFail($id);
        $user->delete();
        return back()->with('status',Response::HTTP_OK)->with('msg','Xóa thành công!');
    }
}
