<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusTableSeeder extends Seeder
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
                'status' => 'قيد الانتظار'
            ],
            [  ///2
                'id' => '2',
                'status' => 'نجح'
            ],
            [  ///3
                'id' => '3',
                'status' => 'رفض'
            ]
        
        ];
        foreach ($roles as $key=>$value){
            Status::create($value);
        }
    }
}
