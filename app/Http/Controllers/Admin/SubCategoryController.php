<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoryRequest;
use App\Models\Categories;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;

class SubCategoryController extends Controller
{
    const PATH_FOlDER = 'admin.subcategory';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Danh sách danh mục con";
        $data = SubCategory::query()->with(['categories'])->orderByDesc('id')->paginate(10);
        return view(self::PATH_FOlDER . DOT . __FUNCTION__, compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm mới danh mục con";
        $categories = Categories::query()->get();
        return view(self::PATH_FOlDER . DOT . __FUNCTION__, compact('title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubCategoryRequest $request)
    {
        if ($request->categories_id == 0) {
            return back()->withErrors(['categories_id', 'Vui lòng chọn danh mục cha.']);
        }
        try {
            $model = new SubCategory();
            $model->fill($request->all());
            $model->save();
            return redirect()->route('admin.subcategory.index')->with('status', Response::HTTP_OK)->with('msg', 'Thêm mới thành công!');
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
        $model = SubCategory::query()->findOrFail($id);
        $categories = Categories::query()->get();
        $title = "Cập nhật danh mục con";
        return view(self::PATH_FOlDER . DOT . __FUNCTION__,compact('title','model','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tableName = (new SubCategory())->getTable();
        $request->validate([
           'name' => ['required','min:2','max:256',Rule::unique($tableName)->ignore($id)],
            'categories_id' => ['required'],
        ]);
        try {
            $model = SubCategory::query()->findOrFail($id);
            $model->fill($request->all());
            $model->save();
            return back()->with('status',Response::HTTP_OK)
                ->with('msg','Cập nhật thành công!');
        }catch (\Exception $exception){
            return back()->with('status',Response::HTTP_BAD_REQUEST)->with('msg','Thao tác thất bại');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = SubCategory::query()->findOrFail($id);
        $model->delete();
        return back()->with('status',Response::HTTP_OK)
            ->with('msg','Xóa thành công!');
    }
}
