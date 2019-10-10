<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
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
                'name' => 'مستخدم عادي'
            ],
            [ //2
                'id' => '2',
                'name' => 'مكتب صرافة'
            ]
        
        ];
        foreach ($roles as $key=>$value){
        Category::create($value);
        }
    }
}
