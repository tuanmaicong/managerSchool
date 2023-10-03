<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subjects;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Mockery\Exception;

class SubjectsController extends Controller
{
    const PATH_FODER = "admin.subject";
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Danh sách môn học";
        $data = Subjects::query()->get();
        return view(self::PATH_FODER . DOT .__FUNCTION__,compact('title','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm mới môn học";
        return view(self::PATH_FODER . DOT .__FUNCTION__,compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tableName = (new Subjects())->getTable();
        $this->validate(\request(),[
           'name' => ['required',Rule::unique($tableName)],
        ]);
        try {
            $model = new Subjects();
            $model->fill($request->all());
            $model->save();
            return redirect()->route('admin.subject.index')->with('status',Response::HTTP_OK)->with('msg','Thêm mới thành công!');
        }catch (Exception $exception){
            return back()->with('status',Response::HTTP_BAD_REQUEST)->with('msg','Thao tác thất bại!');
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
        $data = Subjects::query()->findOrFail($id);
        $title = "Cập nhật môn học";
        return view(self::PATH_FODER . DOT .__FUNCTION__,compact('title','data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tableName = (new Subjects())->getTable();
        $this->validate(\request(),[
            'name' => ['required',Rule::unique($tableName)->ignore($id)],
        ]);
        try {
            $model = Subjects::query()->findOrFail($id);
            $model->fill($request->all());
            $model->save();
            return back()->with('status',Response::HTTP_OK)->with('msg','Cập nhật thành công!');
        }catch (Exception $exception){
            return back()->with('status',Response::HTTP_BAD_REQUEST)->with('msg','Thao tác thất bại!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subject = Subjects::query()->findOrFail($id);
        $subject->delete();
        return redirect()->route('admin.subject.index')->with('status',Response::HTTP_OK)->with('msg','Xóa thành công!');
    }
}
