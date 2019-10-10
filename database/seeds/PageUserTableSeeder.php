<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PageUserTableSeeder extends Seeder
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
                'page_id' => '1'
            ],
            [  ///2
                'id' => '2',
                'user_id' => '1',
                'page_id' => '2'
            ],
            [  ///3
                'id' => '3',
                'user_id' => '1',
                'page_id' => '3'
            ],
            [  ///4
                'id' => '4',
                'user_id' => '1',
                'page_id' => '4'
            ],
            [  ///5
                'id' => '5',
                'user_id' => '1',
                'page_id' => '5'
            ],
            [  ///6
                'id' => '6',
                'user_id' => '1',
                'page_id' => '6'
            ],
            [  ///7
                'id' => '7',
                'user_id' => '1',
                'page_id' => '7'
            ],
            [  ///8
                'id' => '8',
                'user_id' => '1',
                'page_id' => '8'
            ],
            [  ///9
                'id' => '9',
                'user_id' => '1',
                'page_id' => '9'
            ],
            [  ///10
                'id' => '10',
                'user_id' => '1',
                'page_id' => '10'
            ],
            [  ///11
                'id' => '11',
                'user_id' => '1',
                'page_id' => '11'
            ],
            [  ///12
                'id' => '12',
                'user_id' => '1',
                'page_id' => '12'
            ],
            [  ///13
                'id' => '13',
                'user_id' => '1',
                'page_id' => '13'
            ],
            [  ///14
                'id' => '14',
                'user_id' => '1',
                'page_id' => '14'
            ]
        
        ];
        foreach ($roles as $key=>$value){
            DB::table('page_user')->insert($value);
        }
    }
}
