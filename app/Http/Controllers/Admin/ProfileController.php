<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    public function index(string $id)
    {
        $data = User::query()->findOrFail($id);
        return view('admin.profile.index', compact('data'));
    }

    public function update(ProfileUpdateRequest $request, string $id)
    {
        //lấy ra đối tượng user có id = id trên url
        $model = User::query()->findOrFail($id);
        try {
            //except bỏ qua trường avatar
            $model->fill($request->except('avatar'));
            //lấy ra file avatar cũ
            $oldAvt = $model->avatar;
            //kiểm tra dữ liệu gửi lên có tồn tại trường avatar hay không
            if ($request->hasFile('avatar')) {
                //nếu có thì thực hiện update file và xóa file cũ
                $model->avatar = upload_file(OBJECT_USER, $request->file('avatar'));
                $model->save();
                //xóa file cũ
                delete_file($oldAvt);
            } else {
                //nếu không có thì cập nhật những dữ liệu có thay đổi và bỏ qua cập nhật trường avt
                $model->save();
            }
            return back()->with('status',Response::HTTP_OK)
                ->with('msg','Thao tác thành công');
        } catch (\Exception $exception) {
            Log::error('Exception', [$exception]);
            return back()->with('status',Response::HTTP_BAD_REQUEST)
                ->with('msg','Thao tác thất bại');
        }
    }
}
