<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Products;
use App\Http\Resources\Products as ProductsResource;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::paginate(5);
        return ProductsResource::collection($products);
    }

    /**
     * @return void
     */
    public function getBrands()
    {
        $brands = Products::select('DS_BRAND')->get();
        return ProductsResource::collection($brands);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
        $product                 = new Products();
        $product->DS_NAME        = $request->input('DS_NAME');
        $product->DS_DESCRIPTION = $request->input('DS_DESCRIPTION');
        $product->DS_BRAND       = $request->input('DS_BRAND');
        $product->NM_BAR_CODE    = $request->input('NM_BAR_CODE');
        $product->NM_TENSION     = $request->input('NM_TENSION');
        $product->NM_VALUE       = $request->input('NM_VALUE');
        $product->FL_STATUS      = $request->input('FL_STATUS');

        if ($product->save()) {
            return new ProductsResource($product);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Products::findOrFail($id);
        return new ProductsResource($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Products::findOrFail($id);
        $product->DS_NAME        = $request->input('DS_NAME');
        $product->DS_DESCRIPTION = $request->input('DS_DESCRIPTION');
        $product->DS_BRAND       = $request->input('DS_BRAND');
        $product->NM_BAR_CODE    = $request->input('NM_BAR_CODE');
        $product->NM_TENSION     = $request->input('NM_TENSION');
        $product->NM_VALUE       = $request->input('NM_VALUE');
        $product->FL_STATUS      = $request->input('FL_STATUS');

        if ($product->save()) {
            return new ProductsResource($product);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::findOrFail($id);

        if ($product->delete()) {
            return new ProductsResource($product);
        }
    }
}
