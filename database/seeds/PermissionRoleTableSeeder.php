<?php

use Illuminate\Database\Seeder;

use App\Role;
use App\Permission;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [1, 2, 3];

        foreach($datas as $value)
        {
            $role = Role::find($value);

            if($role->id == 3)
            {
                foreach($datas as $key => $secondValue)
                {
                    $role->permissions()->attach($secondValue);
                }
            }
            else
            {
                $role->permissions()->attach($value);
            }


        }
    }
}
