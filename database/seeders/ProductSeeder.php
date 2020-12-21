<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'iPhone Pro Max',
            "price"=>"68990",
            "description"=>"A smartphone with 6gb ram and much more feature",
            "category"=>"mobile",
            "gallery"=>"https://cdn.vox-cdn.com/thumbor/IuC24AR1I8u5ifZ7MOsY61124xg=/0x0:2050x1367/1200x800/filters:focal(861x520:1189x848)/cdn.vox-cdn.com/uploads/chorus_image/image/67747273/cgartenberg_201105_4276_010.0.5.jpg"

            ],
            [
                'name'=>'Gaming System Unit',
            "price"=>"58000",
            "description"=>"Ryzen 5 3600, 1tb WD Blue, Tforce Delta 2x8 3600mhz, Windows 10 and Microsoft Office installed.",
            "category"=>"personal computer",
            "gallery"=>"https://images-na.ssl-images-amazon.com/images/G/01/US-hq/2018/img/PC_Hardware/PCGamingDesktopsNav2._CB466377783_.jpg"

            ],
            [
                'name'=>'Playstation 5',
            "price"=>"27990",
            "description"=>"CPU of x86-64-AMD Ryzen™ Zen 2 and has Ultra HD Blu-ray (66G/100G) ~10xCAV and many more features",
            "category"=>"entertainment",
            "gallery"=>"https://variety.com/wp-content/uploads/2020/09/sony-playstation-5.png?w=1024"

            ],
            [
                'name'=>'LG Refrigerator',
            "price"=>"26100",
            "description"=>"Double door refrigirator and many more features",
            "category"=>"applliances",
            "gallery"=>"https://img2.cgtrader.com/items/1004255/4f547d3605/double-door-lg-fridge-3d-model-max-bip-obj-mtl-3ds-blend-dae-abc.jpg"

            ],
            [
                'name'=>'Yamaha Keyboard',
            "price"=>"32000",
            "description"=>"Yamaha PSR-EW410 76-Key Portable",
            "category"=>"instruments",
            "gallery"=>"https://www.yamaha.com/yamahavgn/PIM/Images/012551C0D3BF4C65817E2D97478C8DA5_12075_2000x691_f3ed1e2fbcea925a558381c4795e6449.jpg"

            ]
            
         ]);
    }
}    
