<?php

use Illuminate\Database\Seeder;
use App\Point;

class PointTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles=[
            [  ///1
                'id' => '1',
                'user_id' => '1',
                'USD' => '1000000',
                'NIS' => '1000000',
                'SAR' => '1000000',
                'EUR' => '1000000',
                'JOD' => '1000000',
                'TRY' => '1000000',
                'EGP' => '1000000'
            ],
            [  ///1
                'id' => '2',
                'user_id' => '2',
                'USD' => '1000000',
                'NIS' => '1000000',
                'SAR' => '1000000',
                'EUR' => '1000000',
                'JOD' => '1000000',
                'TRY' => '1000000',
                'EGP' => '1000000'
            ]
        
        ];
        foreach ($roles as $key=>$value){
            Point::create($value);
        }
    }
}
