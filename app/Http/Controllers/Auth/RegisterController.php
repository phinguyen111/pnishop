<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/register'; // Chuyển hướng về trang đăng ký sau khi đăng ký thành công

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => '', // hoặc giá trị mặc định khác mà bạn muốn đặt
        ]);
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Ghi đè phương thức register để xử lý sau khi đăng ký thành công
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        // Chuyển hướng lại trang đăng ký với thông báo đăng ký thành công
        return redirect($this->redirectTo)->with('success', 'Registration successful. Please log in.');
    }
}
