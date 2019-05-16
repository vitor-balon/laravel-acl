<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            1 => ['name' => 'Administrador', 'email' => 'admin@admin.com', 'password' => bcrypt(123456789)],
            2 => ['name' => 'Contato', 'email' => 'contato@contato.com', 'password' => bcrypt(123456789)],
            3 => ['name' => 'Super Admin', 'email' => 'super@admin.com', 'password' => bcrypt(123456789)]
        ];

        foreach($datas as $item)
        {
            User::create($item);
        }
    }
}
