<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

   public function welcome() {
        return view('welcome');
    }



    public function index()
    {
        $products = Product::oldest()->get();
      return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){

        $categories = Category::all();

        return view('product.create',compact('categories'));
       }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create([
            'name'=>$request->input('name'),
            'price'=>$request->input('price'),
            'category_id'=>$request->input('category_id'),
            'img'=>$request->file('img')->store('public/product')
            ]);

        //     if ($request->file('img') == null) {

        // return redirect()->route('product.create')->with('message','AGGIUNGERE IMMAGINE');

        //     }


     return redirect()->route('product.create')->with('message','Prodotto aggiunto con successo');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {

        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
            return view('product.edit',compact('product'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)

    {

        $oldImg = $product->img;



        $product->update([

            'name'=> $request->input('name'),
            'price' => $request->input('price'),

            'img' => $request->file('img') != null ? $request->file('img')->store('public/product') : $product->img

        ]);



        if ($request->file('img') != null) {

            Storage::delete($oldImg);

        }



        return redirect()->route('admin.dashboard')->with('message',"il prodotto $product->name è stato modificato correttamente!");

    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product){

        $product->delete();

        return redirect()->route('admin.dashboard');

        }

}
