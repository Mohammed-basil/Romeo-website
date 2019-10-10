<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountryTableSeeder extends Seeder
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
                'name' => 'فلسطين'
            ],
            [  ///2
                'id' => '2',
                'name' => 'سوريا'
            ],
            [  ///3
                'id' => '3',
                'name' => 'لبنان'
            ],
            [  ///4
                'id' => '4',
                'name' => 'الأردن'
            ],
            [  ///5
                'id' => '5',
                'name' => 'مصر'
            ],
            [  ///6
                'id' => '6',
                'name' => 'العراق'
            ],
            [  ///7
                'id' => '7',
                'name' => 'السعودية'
            ],
            [  ///8
                'id' => '8',
                'name' => 'الإمارات'
            ],
            [  //9
                'id' => '9',
                'name' => 'الكويت'
            ],
            [  ///10
                'id' => '10',
                'name' => 'البحرين'
            ],
            [  ///11
                'id' => '11',
                'name' => 'الجزائر'
            ],
            [  ///12
                'id' => '12',
                'name' => 'المغرب'
            ],
            [  ///13
                'id' => '13',
                'name' => 'تونس'
            ]
        
        ];
        foreach ($roles as $key=>$value){
            Country::create($value);
        }
    }
}
