<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Days;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;

class DaysController extends Controller
{
    const PATH_FOLDER = 'admin.day';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Danh sách buổi học";
        $data = Days::query()->get();
        return view(self::PATH_FOLDER . DOT . __FUNCTION__,compact('data','title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm mới buổi học";
        return view(self::PATH_FOLDER . DOT .__FUNCTION__,compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tableName = (new Days())->getTable();
        $this->validate(\request(),[
           'name' => ['required','min:2','max:256',Rule::unique($tableName)],
        ]);
        try {
            $model = new Days();
            $model->fill($request->all());
            $model->save();
            return redirect()->route('admin.days.index')->with('status',Response::HTTP_OK)
                ->with('msg','Thêm mới thành công!');
        }catch (\Exception $exception){
            return back()->with('status',Response::HTTP_BAD_REQUEST)
                ->with('msg','Thao tác thất bại!');
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
        $title = "Cập nhật buổi học";
        $model = Days::query()->findOrFail($id);
        return view(self::PATH_FOLDER . DOT .__FUNCTION__,compact('title','model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tableName = (new Days())->getTable();
        $this->validate(\request(),[
           'name' => ['required','min:2','max:256',Rule::unique($tableName)->ignore($id)],
        ]);
        try {
            $model = Days::query()->findOrFail($id);
            $model->fill($request->all());
            $model->save();
            return back()->with('status',Response::HTTP_OK)
                ->with('msg','Cập nhật thành công!');
        }catch (\Exception $exception){
            return back()->with('status',Response::HTTP_BAD_REQUEST)
                ->with('msg','Thao tác thất bại!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $day = Days::query()->findOrFail($id);
        $day->delete();
        return back()->with('status',Response::HTTP_OK)
            ->with('msg','Xóa thành công!');
    }
}
