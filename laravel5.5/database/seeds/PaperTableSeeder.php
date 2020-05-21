<?php

use Illuminate\Database\Seeder;

class PaperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data=[
            [
                'paper_name'   =>   '杭钢',
                'start_time'   =>   strtotime('+1 year'),
                'duration'     =>   '120',
            ],
            [
                'paper_name'   =>   '搞好阿萨达',
                'start_time'   =>   strtotime('+10 days'),
                'duration'     =>   '120',
            ]
        ];
        DB::table('paper')->insert($data);
    }
}
