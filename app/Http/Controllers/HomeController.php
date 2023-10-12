<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index(Request $request)
    {
        $category = Category::where('is_active', 1)->orderBy('name', 'ASC')->get();
        $top_product = Product::orderBy('id', 'DESC')->search()->paginate(6);
        return view('index', compact('category', 'top_product'));
    }
    public function product()
    {
        $category = Category::where('is_active', 1)->orderBy('name', 'ASC')->get();
        $product = Product::orderBy('id', 'DESC')->search()->paginate(10);
        return view('product', compact('category', 'product'));
    }

    public function view($id)
    {
        $top_product = Product::orderBy('id', 'DESC')->search()->paginate(6);
        $model = Category::where('id', $id)->first();
        $product = Product::where('id', $id)->first();
        $category = Category::where('is_active', 1)->orderBy('name', 'ASC')->get();
        if($model) {
            return view('product', ['model' => $model, 'category' => $category]);
        }
        else if($product) {
            return view('product_detail', ['model' => $product, 'category' => $category]);
        }
        else {
            return view('404');
        }
    }

    public function about()
    {
        return view('about');
    }

    public function login()
    {
        return view('login');
    }

    public function post_login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ],
        [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu không được để trống'
        ]);

        // $credentials = ['email' => $request->email, 'password' => $request->password];
        if(Auth::guard('cus')->attempt($request->only('email', 'password'), false)) {
            return redirect()->route('home.index');
        }
        else {
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::guard('cus')->logout();
        return redirect()->route('home.index');
    }

    public function news()
    {
        return view('news');
    }

    public function contact()
    {
        return view('contact');
    }

    public function product_detail()
    {
        $product = Product::orderBy('id', 'DESC')->search()->paginate(10);
        return view('product_detail', compact('product'));
    }
}

