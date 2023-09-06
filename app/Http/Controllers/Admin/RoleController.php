<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Mockery\Exception;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Role::query()->get();
        $title = "Danh sách quyền";
        return view(OBJECT_ADMIN . DOT . OBJECT_ROLE . DOT . __FUNCTION__, compact('data', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm mới quyền";
        return view(OBJECT_ADMIN . DOT . OBJECT_ROLE . DOT . __FUNCTION__, compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tableName = (new Role())->getTable();
        $this->validate(\request(), [
            'name' => ['required', 'min:3', 'max:50', Rule::unique($tableName)],
            'describe' => ['nullable', 'max:256'],
        ]);
        try {
            $model = new Role();
            $model->fill(\request()->all());
            $model->save();
            return redirect()->route('admin.role.index')->with('status', Response::HTTP_OK)->with('msg', 'Thêm mới thành công!');
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
        $title = "Sửa quyền";
        $model = Role::query()->findOrFail($id);
        return view(OBJECT_ADMIN . DOT . OBJECT_ROLE . DOT . __FUNCTION__, compact('title', 'model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Role $model, string $id)
    {
        $tableName = $model->getTable();
        $role = Role::query()->findOrFail($id);
        $this->validate(\request(), [
            'name' => ['required', 'min:3', 'max:50', Rule::unique($tableName)->ignore($role->id)],
            'describe' => ['nullable', 'max:256'],
        ]);
        try {
            $role->fill(\request()->all());
            $role->save();

            return back()->with('status', Response::HTTP_OK)->with('msg', 'Sửa thành công!');
        } catch (Exception $exception) {
            return back()->with('status', Response::HTTP_BAD_REQUEST)->with('msg', 'Thao tác thất bại!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::query()->findOrFail($id);
        try {
            $role->delete();
            return back()
                ->with('status', Response::HTTP_OK)
                ->with('msg', 'Thao tác thành công!');
        } catch (\Exception $exception) {
            Log::error('Exception', [$exception]);
            return back()
                ->with('status', Response::HTTP_BAD_REQUEST)
                ->with('msg', 'Thao tác thất bại!');
        }
    }
}
