<?php

namespace App\Livewire\Pages;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class Home extends Component
{

    public function render()
    {
        return view('livewire.pages.home',[
            'products' => Product::where('top_product',1)->get(),
            'categories'    => Category::all(),
        ]);
    }
}
