<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Mockery\Exception;

class UserController extends Controller
{
    const PATH_FOLDER = 'admin.user.';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::query()->with(['role'])->orderByDesc('id')->paginate(5);
        $title = 'Danh sách người dùng';
        return view(self::PATH_FOLDER . __FUNCTION__, compact('data', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = 'Thêm mới người dùng';
        $roles = Role::query()->get();
        return view(self::PATH_FOLDER . __FUNCTION__, compact('title', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tableName = (new User())->getTable();
//        User::query()->create($request->all());
        $this->validate(\request(), [
            'email' => ['required', 'email', Rule::unique($tableName)],
            'name' => ['required', 'min:2', 'max:50'],
            'password' => ['required', 'min:8', 'max:50'],
            'role_id' => ['required'],
        ]);
        try {
            $model = new User();
            $model->fill(\request()->all());
            $model->save();

            return redirect()->route('admin.users.index')->with('status', Response::HTTP_OK)->with('msg', 'Thêm mới thành công!');
        } catch (\Exception $exception) {
            return back()->with('status', Response::HTTP_BAD_REQUEST)->with('msg', 'Thao tác thất bại!');
        }
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
        $title = "Cập nhật tài khoản";
        $model = User::query()->findOrFail($id);
        return view(self::PATH_FOLDER . DOT . __FUNCTION__, compact('title', 'model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
//        dd($request->all());
        $model = User::query()->findOrFail($id);
        try {
            $model->fill($request->all());
            $model->save();
            return back()->with('status', Response::HTTP_OK)->with('msg', 'Cập nhật thành công!');
        } catch (\Exception $exception) {
            return back()->with('status', Response::HTTP_BAD_REQUEST)->with('msg', 'Thao tác thất bại!');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::query()->findOrFail($id);
        $user->delete();
        return back()->with('status', Response::HTTP_OK)->with('msg', 'Xóa thành công!');
    }
}
