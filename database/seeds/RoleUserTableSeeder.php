<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Role;

class RoleUserTableSeeder extends Seeder
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
            $user = User::find($value);

            $user->roles()->attach($value);
        }
    }
}
