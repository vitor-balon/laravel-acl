<?php

use Illuminate\Database\Seeder;

use App\Permission;
use App\Role;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            0 => ['name' => 'view_notice', 'label' => 'Visualiza a notícia'],
            1 => ['name' => 'edit_notice', 'label' => 'Edita a notícia'],
            2 => ['name' => 'delete_notice', 'label' => 'Deleta a notícia'],
        ];

        foreach($datas as $key => $item)
        {
            Permission::create($item);

            $role = Role::find($key);
        }
    }
}
