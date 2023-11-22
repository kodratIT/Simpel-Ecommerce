<?php

namespace App\Livewire\Pages;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ProductDetail extends Component
{

    public function render($id)
    {
        $category = DB::table('product_categories')
                ->where('product_categories.product_id', $id)
                ->join('categories', 'categories.id', '=', 'product_categories.category_id') // Perbaikan di sini
                ->select('categories.name')
                ->get();
        $tags = DB::table('product_tags')
                ->where('product_tags.product_id', $id)
                ->join('tags', 'tags.id', '=', 'product_tags.tag_id') // Perbaikan di sini
                ->select('tags.name')
                ->get();
        // dd($category);
        // dd($tags);
        return view('livewire.pages.product-detail',[
            'products'      => Product::where('top_product',1)->get(),
            'product'       => Product::find($id),
            'categories'    => $category,
            'tags'          => $tags,
        ]);
    }
}
