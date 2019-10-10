<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
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
                'first_name' => 'محمد',
                'last_name' => 'عبد اللطيف',
                'account_number'=>'12345678',
                'category_id' => '1',
                'country_id' => '1',
                'admin' => '0',
                'image' => 'uploads/images/15515633031.jpg',
                'email' => 'admin@gmail.com',
                'password' =>bcrypt('123456'),
                'active' => '1',
                'verified' => '1',
                'userID' => '123456789',
                'phonenum' => '1234567891'
            ],
            [  ///2
                'id' => '2',
                'first_name' => 'طارق',
                'last_name' => 'عبد اللطيف',
                'account_number'=>'12312312',
                'category_id' => '1',
                'country_id' => '1',
                'admin' => '0',
                'image' => 'uploads/images/15515633031.jpg',
                'email' => 'a@gmail.com',
                'password' =>bcrypt('123456'),
                'active' => '1',
                'verified' => '1',
                'userID' => '123123123',
                'phonenum' => '1234567891'
            ]
        
        ];
        foreach ($roles as $key=>$value){
            User::create($value);
        }
    }
}
