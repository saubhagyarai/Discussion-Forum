<?php

use App\Channel;
use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'name' => 'Laravel 6.2',
            'slug' => str_slug('Laravel 6.2')
        ]);

        Channel::create([
            'name' => 'Vue js 3',
            'slug' => str_slug('Vue js 3')
        ]);

        Channel::create([
            'name' => 'Angular',
            'slug' => str_slug('Angular')
        ]);

        Channel::create([
            'name' => 'Node js',
            'slug' => str_slug('Node js')
        ]);
    }
}
