<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoriesUpdateRequest;
use App\Http\Requests\StoreCategoriesRequest;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Categories::query()->orderByDesc('id')->get();
        $title = "Danh sách danh mục";
        return view(OBJECT_ADMIN . DOT . OBJECT_CATEGORY . DOT . __FUNCTION__,
            compact('data','title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm mới danh mục";
        return view(OBJECT_ADMIN . DOT . OBJECT_CATEGORY . DOT . __FUNCTION__,compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriesRequest $request)
    {
        try {
            $model = new Categories();
            $model->fill($request->all());
            $model->save();

            return redirect()->route('admin.category.index')->with('status',Response::HTTP_OK)
                ->with('msg','Thêm mới thành công!');
        }catch (\Exception $exception){
            Log::error('Exception',[$exception]);

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
        $title = "Sửa danh mục";
        $model = Categories::query()->findOrFail($id);
        return view(OBJECT_ADMIN . DOT . OBJECT_CATEGORY . DOT . __FUNCTION__,
            compact('title','model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoriesUpdateRequest $request, string $id)
    {
        try {
            $model = Categories::query()->findOrFail($id);
            $model->fill($request->except('name'));
            $model->save();

            return back()->with('status',Response::HTTP_OK)->with('msg','Cập nhật thành công!');
        }catch (\Exception $exception){
            Log::error('Exception',[$exception]);
            return back()->with('status',Response::HTTP_BAD_REQUEST)->with('msg','Thao tác thất bại!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categories = Categories::query()->findOrFail($id);
        $categories->delete();
        return back()->with('status',Response::HTTP_OK)->with('msg','Xóa thành công!');
    }
}
