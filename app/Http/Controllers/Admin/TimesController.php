<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Times;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;

class TimesController extends Controller
{
    const PATH_FOLDER = "admin.time";
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Times::query()->get();
        $title = "Danh sách ca học";
        return view(self::PATH_FOLDER . DOT .__FUNCTION__,compact('title','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm mới ca học";
        return view(self::PATH_FOLDER . DOT . __FUNCTION__,compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tableName = (new Times())->getTable();
        $this->validate(\request(),[
           'name' => ['required','min:1','max:256',Rule::unique($tableName)],
            'time_start' => ['required',Rule::unique($tableName)],
            'time_end' => ['required',Rule::unique($tableName)],
        ]);
        try {
            $model = new Times();
            $model->fill($request->all());
            $model->save();
            return redirect()->route('admin.times.index')->with('status',Response::HTTP_OK)
                ->with('msg','Thêm mới thành công!');
        }catch (\Exception $exception){
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
        $model = Times::query()->findOrFail($id);
        $title = "Cập nhật ca học";
        return view(self::PATH_FOLDER . DOT .__FUNCTION__,compact('title','model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tableName = (new Times())->getTable();
        $this->validate(\request(),[
            'name' => ['required','min:1','max:256',Rule::unique($tableName)->ignore($id)],
            'time_start' => ['required',Rule::unique($tableName)->ignore($id)],
            'time_end' => ['required',Rule::unique($tableName)->ignore($id)],
        ]);
        try {
            $model = Times::query()->findOrFail($id);
            $model->fill($request->all());
            $model->save();
            return redirect()->route('admin.times.index')->with('status',Response::HTTP_OK)
                ->with('msg','Cập nhật thành công!');
        }catch (\Exception $exception){
            return back()->with('status',Response::HTTP_BAD_REQUEST)->with('msg','Thao tác thất bại!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $time = Times::query()->findOrFail($id);
        $time->delete();
        return back()->with('status',Response::HTTP_OK)->with('msg','Xóa thành công!');
    }
}
