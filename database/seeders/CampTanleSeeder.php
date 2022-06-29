<?php

namespace Database\Seeders;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Camp;


class CampTanleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps=[
            [
                'title'=>'Gila Belajar',
                'slug'=>'gila-belajar',
                'price'=>280,
                'created_at'=>date('Y-m-d H:i:s', time()),
                'updated_at'=>date('Y-m-d H:i:s', time()),
            ],
            [
                'title'=>'Baru Mulai',
                'slug'=>'baru-mulai',
                'price'=>140,
                'created_at'=>date('Y-m-d H:i:s', time()),
                'updated_at'=>date('Y-m-d H:i:s', time()),
            ],
        ];
        
            // kalo pakai cara yang ini tidak perlu pakia created_at dan updated_at
        // foreach ($camps as $key => $camp) {
        //     Camp::create($camp);
        // }

        // kalo pakai cara yang ini harus pakai created_at dan updated_at
        Camp::insert($camps);
    }
}
