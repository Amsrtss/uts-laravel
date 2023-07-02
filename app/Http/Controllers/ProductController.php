<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use App\Models\Unit;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Product List';

        //ELOQUENT
        $products = Product::all();

        return view('product.index', [
        'pageTitle' => $pageTitle,
        'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Product';
        // ELOQUENT
        $units = Unit::all();
        return view('product.create', compact('pageTitle', 'units'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
            ];
            $validator = Validator::make($request->all(), [
            'kodeBarang' => 'required|numeric',
            'namaBarang' => 'required',
            'hargaBarang' => 'required|numeric',
            'deskripsi' => 'required',
            ], $messages);
            if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // ELOQUENT
        $product = New Product;
        $product->kodebarang = $request->kodeBarang;
        $product->namabarang = $request->namaBarang;
        $product->hargabarang = $request->hargaBarang;
        $product->deskripsi = $request->deskripsi;
        $product->unit_id = $request->unit;
        $product->save();

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Product Detail';
        // ELOQUENT
        $product = Product::find($id);
        return view('product.show', compact('pageTitle', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'EditProduct';
        $units = Unit::all();
        $product = Product::find($id);
        return view('product.edit', compact('pageTitle', 'product',
        'units'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
            ];
            $validator = Validator::make($request->all(), [
            'kodeBarang' => 'required|numeric',
            'namaBarang' => 'required',
            'hargaBarang' => 'required|numeric',
            'deskripsi' => 'required',
            ], $messages);
            if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // ELOQUENT
        $product = Product::find($id);
        $product->kodebarang = $request->kodeBarang;
        $product->namabarang = $request->namaBarang;
        $product->hargabarang = $request->hargaBarang;
        $product->deskripsi = $request->deskripsi;
        $product->unit_id = $request->unit;
        $product->save();

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.index');
    }
}
