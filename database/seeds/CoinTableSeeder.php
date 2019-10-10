<?php

use Illuminate\Database\Seeder;
use App\Coin;

class CoinTableSeeder extends Seeder
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
                'en' => 'USD',
                'ar' => 'دولار أمريكي'
            ],
            [  ///2
                'id' => '2',
                'en' => 'NIS',
                'ar' => 'شيكل إسرائيلي'
            ],
            [  ///3
                'id' => '3',
                'en' => 'SAR',
                'ar' => 'ريال سعودي'
            ],
            [  ///4
                'id' => '4',
                'en' => 'EGP',
                'ar' => 'جنيه مصري'
            ],
            [  ///5
                'id' => '5',
                'en' => 'EUR',
                'ar' => 'يورو اوروبي'
            ],
            [  ///6
                'id' => '6',
                'en' => 'JOD',
                'ar' => 'دينار اردني'
            ],
            [  ///7
                'id' => '7',
                'en' => 'TRY',
                'ar' => 'ليرة تركية'
            ]
        
        ];
        foreach ($roles as $key=>$value){
        Coin::create($value);
        }
    }
}
