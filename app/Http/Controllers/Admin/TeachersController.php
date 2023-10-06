<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeachersFormRequest;
use App\Models\Subjects;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Mockery\Exception;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class TeachersController extends Controller
{
    const PATH_FODER = 'admin.teacher';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Danh sách giáo viên";
        $data = Teachers::query()->with(['subjects'])->paginate(20);
        return view(self::PATH_FODER . DOT .__FUNCTION__,compact('title','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm mới giáo viên";
        $subjects = Subjects::query()->get();
        return view(self::PATH_FODER . DOT . __FUNCTION__,compact('title','subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeachersFormRequest $request)
    {
        try {
            $model = new Teachers();
            $model->fill($request->all());
            $model->save();
            return redirect()->route('admin.teacher.index')->with('status',Response::HTTP_OK)
                ->with('msg','Thêm mới thành công!');
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
        $title = "Cập nhật giáo viên";
        $model = Teachers::query()->findOrFail($id);
        $subjects = Subjects::query()->get();
        return view(self::PATH_FODER . DOT .__FUNCTION__,compact('title','model','subjects'));
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
        //
    }
}
