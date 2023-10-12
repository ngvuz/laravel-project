<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::orderBy('created_at', 'DESC')->search()->paginate(10);
        return view('admin.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cate = Category::orderBy('name', 'ASC')->select('id', 'name')->get();
        return view('admin.product.create', compact('cate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->has('file_upload')){
            $file = $request->file_upload;
            $ext = $request->file_upload->getClientOriginalExtension();
            $file_name = time().'-'.'product'.'.'.$ext;
            $file->move(public_path('upload'), $file_name);
        }
        $request->merge(['image' => $file_name]);

        if(Product::create($request->all())) {
            return redirect()->route('product.index')->with('success', 'Thêm mới sản phẩm thành công');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $cate = Category::orderBy('name', 'ASC')->select('id', 'name')->get();
        return view('admin.product.edit', compact('product'), compact('cate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $cate = Category::orderBy('name', 'ASC')->select('id', 'name')->get();
        $product->update($request->all());
        return redirect()->route('product.index', compact('cate'))->with('success', 'Cập nhật danh mục thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if($product->details->count() > 0)
        {
            return redirect()->route('product.index')->with('error', 'Không thể xóa sản phẩm này');
        }
        else {
            $product->delete();
            return redirect()->route('product.index')->with('success', 'Xóa sản phẩm thành công');
        }
    }
}