<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactsController extends Controller
{
    const PATH_FOLDER = "admin.contact";
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Danh sách liên hệ";
        $data = Contacts::query()->orderByDesc('id')->get();
        return view(self::PATH_FOLDER . DOT .__FUNCTION__,compact('title','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function detail(string $id){
        $title = "Chi tiết liên hệ";
        $model = Contacts::query()->findOrFail($id);
        return view(self::PATH_FOLDER . DOT .__FUNCTION__,compact('title','model'));
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
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
        $contact = Contacts::query()->findOrFail($id);
        $contact->delete();
        return redirect()->route('admin.contact.index')->with('status',Response::HTTP_OK)->with('msg','Xóa thành công!');
    }
}
