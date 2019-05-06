<?php

use Illuminate\Database\Seeder;

use App\Notice;

class NoticesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            0 => ['user_id' => 1, 'title' => 'Título 1', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis orci sit amet velit malesuada sodales. Aenean ac elementum nisl, a ultricies mi. In a viverra felis. Etiam volutpat sem vitae augue convallis tempus. Nullam in dui orci. Praesent convallis purus enim, in vehicula ante suscipit ac. Donec eu mattis eros. Quisque dapibus ante in lectus dapibus elementum. Mauris pretium felis vitae lacus egestas, vel bibendum urna sodales. Maecenas ultricies, sapien at imperdiet vehicula, nisi risus vulputate turpis, vitae vestibulum quam urna eu mauris. Fusce bibendum urna nec aliquet volutpat. In in nisi in arcu malesuada porta eget id est. Morbi in bibendum nisi. Integer molestie accumsan lectus et dictum.'],
            1 => ['user_id' => 2, 'title' => 'Título 2', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis orci sit amet velit malesuada sodales. Aenean ac elementum nisl, a ultricies mi. In a viverra felis. Etiam volutpat sem vitae augue convallis tempus. Nullam in dui orci. Praesent convallis purus enim, in vehicula ante suscipit ac. Donec eu mattis eros. Quisque dapibus ante in lectus dapibus elementum. Mauris pretium felis vitae lacus egestas, vel bibendum urna sodales. Maecenas ultricies, sapien at imperdiet vehicula, nisi risus vulputate turpis, vitae vestibulum quam urna eu mauris. Fusce bibendum urna nec aliquet volutpat. In in nisi in arcu malesuada porta eget id est. Morbi in bibendum nisi. Integer molestie accumsan lectus et dictum.'],
            2 => ['user_id' => 1, 'title' => 'Título 3', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis orci sit amet velit malesuada sodales. Aenean ac elementum nisl, a ultricies mi. In a viverra felis. Etiam volutpat sem vitae augue convallis tempus. Nullam in dui orci. Praesent convallis purus enim, in vehicula ante suscipit ac. Donec eu mattis eros. Quisque dapibus ante in lectus dapibus elementum. Mauris pretium felis vitae lacus egestas, vel bibendum urna sodales. Maecenas ultricies, sapien at imperdiet vehicula, nisi risus vulputate turpis, vitae vestibulum quam urna eu mauris. Fusce bibendum urna nec aliquet volutpat. In in nisi in arcu malesuada porta eget id est. Morbi in bibendum nisi. Integer molestie accumsan lectus et dictum.']
        ];

        foreach($datas as $item)
        {
            Notice::create($item);
        }
    }
}
