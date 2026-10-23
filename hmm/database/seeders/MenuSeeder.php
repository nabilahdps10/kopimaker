<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        $categoriesConfig = config('menu.categories');
        $itemsConfig = config('menu.items');

        $categoryMap = [];

        foreach ($categoriesConfig as $cat) {
            if ($cat['id'] === 'all') continue;
            
            $created = Category::firstOrCreate(
                ['slug' => $cat['id']],
                [
                    'name' => $cat['name'],
                    'icon' => $cat['icon'],
                ]
            );
            $categoryMap[$cat['id']] = $created->id;
        }

        foreach ($itemsConfig as $item) {
            Menu::create([
                'category_id' => $categoryMap[$item['category']] ?? null,
                'name' => $item['name'],
                'price' => $item['price'],
                'description' => $item['description'],
                'badge' => $item['badge'] ?? null,
                'image' => $item['image'],
                'is_popular' => !empty($item['is_popular']),
                'is_available' => true,
            ]);
        }
    }
}
