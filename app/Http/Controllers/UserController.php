<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('account');
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $id],
            'address' => ['required', 'string', 'max:255'],
        ]);

        $user->name = $request->input('fullname');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->save();
        return redirect()->back()->with('status', 'Cập nhật thông tin thành công!');
    }
    

    public function updateAD(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
        ]);
    
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();
    
        return redirect()->route('Admin.User')->with('status', 'Cập nhật thông tin user thành công!');
    }
    
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    
        return redirect()->back()->with('status', 'Xóa người dùng thành công!');
    }


}
