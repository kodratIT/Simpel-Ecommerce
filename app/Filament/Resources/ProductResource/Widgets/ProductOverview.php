<?php

namespace App\Filament\Resources\ProductResource\Widgets;

use Carbon\Carbon;
use App\Models\Tag;
use App\Models\Product;
use App\Models\Category;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class ProductOverview extends BaseWidget
{


    protected function getStats(): array
    {
        $lastWeek = Carbon::now()->subWeek();
        return [
            Stat::make('Products', Product::count())
                ->description(Product::where('created_at', '>=', $lastWeek)->count())
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->chart([7, 2, 10, 3, 15, 4, 30]),
            Stat::make('Category', Category::count())
                ->description(Category::where('created_at', '>=', $lastWeek)->count())
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Stat::make('Tags',Tag::count())
                ->description(Tag::where('created_at', '>=', $lastWeek)->count())
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Stat::make('Published',Product::where('Published', '=', 1)->count())
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
        ];
    }
}
