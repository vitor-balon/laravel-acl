<?php

use Illuminate\Database\Seeder;

use App\Role;
use App\User;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            0 => ['name' => 'Manager', 'label' => 'Manager do sistema'],
            1 => ['name' => 'Editor', 'label' => 'Editor do sistema'],
            2 => ['name' => 'Admin', 'label' => 'Admin do sistema'],
        ];

        foreach($datas as $key => $item)
        {
            Role::create($item);

            $user = User::find($key);
        }
    }
}
