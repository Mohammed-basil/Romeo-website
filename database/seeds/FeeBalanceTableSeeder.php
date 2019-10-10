<?php

use Illuminate\Database\Seeder;
use App\FeeBalance;

class FeeBalanceTableSeeder extends Seeder
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
                'USD' => '0',
                'NIS' => '0',
                'SAR' => '0',
                'EGP' => '0',
                'EUR' => '0',
                'JOD' => '0',
                'TRY' => '0'
            ]
        
        ];
        foreach ($roles as $key=>$value){
            FeeBalance::create($value);
        }
    }
}
