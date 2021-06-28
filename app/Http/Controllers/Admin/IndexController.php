<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    /**
     * IndexController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * 'admin'  show user list
     */
    public function showUserList()
    {
        $users = User::paginate(8);
        return view('admin/user_list',compact('users'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteUser($id)
    {
        $user  = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('massage','user has been deleted successfully!');
    }

    public function blockUser($id)
    {
        $user = User::findOrFail($id);
        $user->status = 'block';
        $user->save();
        return redirect()->back()->with('massage','user has been blocked successfully!');
    }
}
