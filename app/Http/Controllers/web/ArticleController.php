<?php

namespace App\Http\Controllers\web;

use App\Models\Article;
use App\Models\Category;
use App\Models\Congress;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $articles =Article::latest()->paginate(10);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $Congress =Congress::all();
        $Type = ["مقاله پژوهشی" , "مقاله علمی پژوهشی"];
        $Category =Category::all();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'TypeID' => 'required',
            'FullTitle' => 'required',
            'ShortTitle' => 'required',
            'FullTitle_fa' => 'required',
            'ShortTitle_fa' => 'required',
            'Tags' => 'required',
            'Tags_fa' => 'required',


            'primary_image' => 'required|mimes:jpg,jpeg,png,svg',
            'images' => 'required',
            'images.*' => 'mimes:jpg,jpeg,png,svg',
            'category_id' => 'required',
            'attribute_ids' => 'required',
            'attribute_ids.*' => 'required',
            'variation_values' => 'required',
            'variation_values.*.*' => 'required',
            'variation_values.price.*' => 'integer',
            'variation_values.quantity.*' => 'integer',
            'delivery_amount' => 'required|integer',
            'delivery_amount_per_product' => 'nullable|integer',
        ]);
        try {
            DB::beginTransaction();

            $productImageController = new ProductImageController();
            $fileNameImages = $productImageController->upload($request->primary_image, $request->images);

            $product = Product::create([
                'name' => $request->name,
                'brand_id' => $request->brand_id,
                'category_id' => $request->category_id,
                'primary_image' => $fileNameImages['fileNamePrimaryImage'],
                'description' => $request->description,
                'is_active' => $request->is_active,
                'delivery_amount' => $request->delivery_amount,
                'delivery_amount_per_product' => $request->delivery_amount_per_product,
            ]);

            foreach ($fileNameImages['fileNameImages'] as $fileNameImage) {
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $fileNameImage
                ]);
            }

            $productAttributeController = new ProductAttributeController();
            $productAttributeController->store($request->attribute_ids, $product);

            $category = Category::find($request->category_id);
            $productVariationController = new ProductVariationController();
            $productVariationController->store($request->variation_values, $category->attributes()->wherePivot('is_variation', 1)->first()->id, $product);

            $product->tags()->attach($request->tag_ids);

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            alert()->error('مشکل در ایجاد محصول', $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }

        alert()->success('محصول مورد نظر ایجاد شد', 'باتشکر');
        return redirect()->route('admin.products.index');
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
        //
    }
}
