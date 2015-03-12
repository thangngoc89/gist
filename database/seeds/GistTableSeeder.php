<?php

use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory as TestDummy;

class GistTableSeeder extends Seeder {

    public function run()
    {
        foreach(range(0,50) as $index)
        {
            TestDummy::times(rand(0,10))->create('Gist\Gist');
        }
    }

}