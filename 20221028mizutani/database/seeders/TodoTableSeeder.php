<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content'=>'sampleA',
        ];
        Todo::create($param);
        $param = [
            'content'=>'sampleB',
        ];
        Todo::create($param);
        $param = [
            'content'=>'sampleC',
        ];
        Todo::create($param);
    }
}
