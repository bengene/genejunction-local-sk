<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public static function getDatas()
    {
        $datas = collect([
            [
                'category' => 'laundry_bead',
                'name' => '3D Dazzling Color Protection Fragrance Laundry Concentrated and Powerful',
            ],[
                'category' => 'laundry_bead',
                'name' => 'Victoria Rose Essential Oil Fragrance 4D Laundry Beads',
            ],[
                'category' => 'detergent',
                'name' => 'Victoria Rose Essential Oil Fragrance Laundry Detergent 1KG',
            ],[
                'category' => 'detergent',
                'name' => 'Victoria Rose Essential Oil Fragrance Laundry Detergent 2KG',
            ],[
                'category' => 'laundry_bead',
                'name' => 'Happiness Clover Fragrance Laundry Pods Concentrate and Potent',
            ],[
                'category' => 'laundry_bead',
                'name' => 'Betty Blue Lavender Essential Oil Fragrance 4D Laundry Beads',
            ],[
                'category' => 'detergent',
                'name' => 'Betty Blue Lavender Essential Oil Fragrance Laundry Detergent 1KG',
            ],[
                'category' => 'detergent',
                'name' => 'Betty Blue Lavender Essential Oil Fragrance Laundry Detergent 2KG',
            ],[
                'category' => 'laundry_bead',
                'name' => 'Blue Shield Sterlzing Perfume Laundry Beads',
            ],[
                'category' => 'laundry_bead',
                'name' => 'White Shield Antibacterial Perfume Laundry Beads'
            ],[
                'category' => 'detergent',
                'name' => 'Blue Wind Chime Perfume Laundry Detergent',
            ],[
                'category' => 'detergent',
                'name' => 'Cherry Blossom Perfume Laundry Detergent',
            ],[
                'category' => 'detergent',
                'name' => 'Softener',
            ],[
                'category' => 'detergent',
                'name' => 'Scented Beads',
            ],[
                'category' => 'home_cleaning',
                'name' => 'Orange Dishwash Liquid',
            ],[
                'category' => 'home_cleaning',
                'name' => 'Washing Powder Oxygenated Stain Remover',
            ],[
                'category' => 'detergent',
                'name' => 'Active Oxygen Protein Underwear Detergent',
            ],[
                'category' => 'detergent',
                'name' => 'Active Oxygen Protein Underwear Detergent',
            ],[
                'category' => 'detergent',
                'name' => 'Amino Acid Cedar Essential Oil Underware Wash',
            ],[
                'category' => 'detergent',
                'name' => 'Antibacteria Underwear Detergent',
            ],[
                'category' => 'baby_series',
                'name' => 'Baby Hand Towel',
            ],[
                'category' => 'baby_series',
                'name' => 'Baby Wet Tissue',
            ],[
                'category' => 'baby_series',
                'name' => 'Cotton Tissue',
            ],[
                'category' => 'home_cleaning',
                'name' => 'Floor Cleaner',
            ],[
                'category' => 'home_cleaning',
                'name' => 'Fragance Spray',
            ],[
                'category' => 'home_cleaning',
                'name' => 'May Rose Marseille Soap',
            ],[
                'category' => 'home_cleaning',
                'name' => 'Orange Starlight Multi Effect Floor Cleaner',
            ],[
                'category' => 'home_cleaning',
                'name' => 'Shoe Cleaner',
            ],[
                'category' => 'home_cleaning',
                'name' => 'Stain Cleaning',
            ],[
                'category' => 'home_cleaning',
                'name' => 'Sunshine Pine Toilet Cleaner',
            ],[
                'category' => 'home_cleaning',
                'name' => 'Tea Bubble Hand Cleaner',
            ],[
                'category' => 'home_cleaning',
                'name' => 'Wash Drum Cleaner',
            ]
        ]);

        return $datas->groupBy('category');
    }
}