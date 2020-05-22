<?php

use Illuminate\Database\Seeder;

class ArticleAndAuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article')->insert([
            [
                'article_name' => '内容'.md5(time()*mt_rand(1,999)),
                'author_id'    => rand(1,3)
            ],[
                'article_name' => '新闻'.md5(time()*mt_rand(1,999)),
                'author_id'    => rand(1,3)
            ],[
                'article_name' => '娱乐'.md5(time()*mt_rand(1,999)),
                'author_id'    => rand(1,3)
                ]
            ]);

    }
}
