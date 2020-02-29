<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 100; $i++) {
            $input = array('未完了', '完了', '中止');
            $rand_num = rand(0, count($input) - 1);
            DB::table('tasks')->insert([
                'content' => 'test content ' . $i,
                'status' => $input[$rand_num],
                // 'status' => 'test title ' . $i,
            ]);
        }
    }
}
