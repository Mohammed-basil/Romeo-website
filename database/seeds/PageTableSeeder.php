<?php

use Illuminate\Database\Seeder;
use App\Page;

class PageTableSeeder extends Seeder
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
                'name' => 'الحسابات',
                'url' => '#',
                'icon' => 'fas fa-users',
                'order_id' => '5',
                'parent_id' => null
            ],
            [  ///2
                'id' => '2',
                'name' => 'المستخدمين',
                'url' => '/admin/users',
                'icon' => '',
                'order_id' => '10',
                'parent_id' => '1'
            ],
            [  ///3
                'id' => '3',
                'name' => 'المكاتب',
                'url' => '/admin/offices',
                'icon' => '',
                'order_id' => '15',
                'parent_id' => '1'
            ],
            [  ///4
                'id' => '4',
                'name' => 'تنشيط الحسابات',
                'url' => '#',
                'icon' => 'fas fa-user-check',
                'order_id' => '20',
                'parent_id' => null
            ],
            [  ///5
                'id' => '5',
                'name' => 'تنشيط حسابات المستخدمين',
                'url' => '/admin/users/active',
                'icon' => '',
                'order_id' => '25',
                'parent_id' => '4'
            ],
            [  ///6
                'id' => '6',
                'name' => 'تنشيط حسابات المكاتب',
                'url' => '/admin/offices/active',
                'icon' => '',
                'order_id' => '30',
                'parent_id' => '4'
            ],
            [  ///7
                'id' => '7',
                'name' => 'محفظة أرباح إرسال الأموال',
                'url' => '/admin/fee/balance',
                'icon' => 'fas fa-wallet',
                'order_id' => '35',
                'parent_id' => null
            ],
            [  ///8
                'id' => '8',
                'name' => 'أسعار العملات',
                'url' => '/admin/currency',
                'icon' => 'fas fa-coins',
                'order_id' => '40',
                'parent_id' => null
            ],
            [  ///9
                'id' => '9',
                'name' => 'عمولة الموقع',
                'url' => '/admin/fee',
                'icon' => 'fas fa-money-bill-wave-alt',
                'order_id' => '45',
                'parent_id' => null
            ],
            [  ///10
                'id' => '10',
                'name' => 'سجل العمليات',
                'url' => '#',
                'icon' => 'fas fa-history',
                'order_id' => '50',
                'parent_id' => null
            ],
            [  ///11
                'id' => '11',
                'name' => 'سجل إرسال الأموال',
                'url' => '/admin/logs',
                'icon' => '',
                'order_id' => '55',
                'parent_id' => '10'
            ],
            [  ///12
                'id' => '12',
                'name' => 'سجل تبديل العملات',
                'url' => '/admin/exchangelogs',
                'icon' => '',
                'order_id' => '60',
                'parent_id' => '10'
            ],
            [  ///13
                'id' => '13',
                'name' => 'سجل المكاتب',
                'url' => '/admin/officelogs',
                'icon' => '',
                'order_id' => '65',
                'parent_id' => '10'
            ],
             [  ///14
                'id' => '14',
                'name' => 'الدعم الفني',
                'url' => '/admin/support',
                'icon' => 'fa fa-phone-square',
                'order_id' => '70',
                'parent_id' => null
            ]
        
        ];
        foreach ($roles as $key=>$value){
            Page::create($value);
        }
    }
}
