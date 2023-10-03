<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Classrooms;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Mockery\Exception;

class ClassroomsController extends Controller
{
    const PATH_FODER = "admin.classroom";
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Classrooms::query()->get();
        $title = "Danh sách lớp học";
        return view(self::PATH_FODER . DOT .__FUNCTION__,compact('data','title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm mới lớp học";
        return view(self::PATH_FODER . DOT . __FUNCTION__,compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tableName = (new Classrooms())->getTable();
        $this->validate(\request(), [
            'name' => ['required', Rule::unique($tableName)],
            'total_student' => ['null'],
        ]);
        try {
            $model = new Classrooms();
            $model->fill($request->all());
            $model->save();
            return redirect()->route('admin.classroom.index')->with('status',Response::HTTP_OK)
                ->with('msg','Thao tác thành công');
        }catch (Exception $exception){
            return back()->with('status',Response::HTTP_BAD_REQUEST)->with('msg','Thao tác thất bại');
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
        $data = Classrooms::query()->findOrFail($id);
        $title = "Cập nhật lớp học";
        return view(self::PATH_FODER . DOT . __FUNCTION__,compact('data','title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tableName = (new Classrooms())->getTable();
        $this->validate(\request(),[
           'name' => ['required',Rule::unique($tableName)->ignore($id)],
            'total' => ['null'],
        ]);
        try {
            $model = Classrooms::query()->findOrFail($id);
            $model->fill($request->all());
            $model->save();
            return back()->with('status',Response::HTTP_OK)->with('msg','Cập nhật thành công!');
        }catch (Exception $exception){
            return back()->with('status',Response::HTTP_BAD_REQUEST)->with('msg','Lỗi cập nhật!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $classroom = Classrooms::query()->findOrFail($id);
        $classroom->delete();
        return back()->with('status',Response::HTTP_OK)->with('msg','Xóa thành công');
    }
}
