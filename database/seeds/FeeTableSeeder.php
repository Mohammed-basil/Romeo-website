<?php

use Illuminate\Database\Seeder;
use App\Fee;

class FeeTableSeeder extends Seeder
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
                'fee' => '2'
            ]
        
        ];
        foreach ($roles as $key=>$value){
            Fee::create($value);
        }
    }
}
