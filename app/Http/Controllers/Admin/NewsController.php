<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\Categories;
use App\Models\News;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mockery\Exception;

class NewsController extends Controller
{
    const PATH_FOLDER = 'admin.new';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Danh sách tin tức";
        $data = News::query()->with('categories')->with('sub_categories')
            ->orderByDesc('id')->paginate(10);
        return view(self::PATH_FOLDER . DOT . __FUNCTION__, compact('data', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm mới bài viết";
        $categories = Categories::query()->get();
        $sub_categories = SubCategory::query()->get();
        return view(self::PATH_FOLDER . DOT . __FUNCTION__, compact('title', 'categories', 'sub_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsRequest $request)
    {
        try {
            $model = new News();
            $model->fill($request->except('image'));
            if($request->hasFile('image')){
                $model->image = upload_file(OBJECT_NEWS,$request->file('image'));
            }
            $model->save();
            Session::flash('success','Thêm mới thành công!');
            return redirect()->route('admin.news.index');
        }catch (\Exception $exception){
            Session::flash('error','Thao tác thất bại!');
            return back();
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
        $title = "Chi tiết bài viết";
        $model = News::query()->findOrFail($id);
        $categories = Categories::query()->get();
        $sub_categories = SubCategory::query()->get();
        return view(self::PATH_FOLDER . DOT .__FUNCTION__,compact('title','model','sub_categories','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate(\request(),[
            'subject' => 'required',
            'content' => 'required',
            'categories_id' => 'required',
            'sub_categories_id' => 'required',
        ]);
        try {
            $model = News::query()->findOrFail($id);
            $model->fill($request->except('image'));
            $oldImage = $model->image;
            if($request->hasFile('image')){
                $model->image = upload_file(OBJECT_NEWS,$request->file('image'));
                $model->save();
                delete_file($oldImage);
                $model->save();
            }else{
                $model->save();
            }
            Session::flash('success','Cập nhật thành công!');
            return back();
        }catch (\Exception $exception){
            Session::flash('error','Thao tác thất bại!');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = News::query()->findOrFail($id);
        $model->delete();
        Session::flash('success','Xóa thành công!');
        return back();
    }
}
