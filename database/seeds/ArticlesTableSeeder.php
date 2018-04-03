<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        foreach(range(0,100) as $key => $value) {
            DB::table('articles')->insert([
                'user_id' => floor(rand(1,5)),
                'type_id' => floor(rand(1,5)),
                'title' => '对象概述'.$key,
                'summery' => $key.'JavaScript 的设计是一个简单的基于对象的范式。一个对象就是一系列属性的集合，一个属性包含一个名和一个值。一个属性的值可以是函数，这种情况下属性也被称为方法。除了浏览器里面预定义的那些对象之外，你也可以定义你自己的对象。本章节讲述了怎么使用对象、属性、函数和方法，怎样实现自定义对象。',
                'images' => '0',
                'content' => $key.'javascript 中的对象(物体)，和其它编程语言中的对象一样，可以比照现实生活中的对象(物体)来理解它。 javascript 中对象(物体)的概念可以比照着现实生活中实实在在的物体来理解。在javascript中，一个对象可以是一个单独的拥有属性和类型的实体。我们拿它和一个杯子做下类比。一个杯子是一个对象(物体)，拥有属性。杯子有颜色，图案，重量，由什么材质构成等等。同样，javascript对象也有属性来定义它的特征。',
                'category_id' => floor(rand(1,3)),
                'tags' => 'css',
                'is_reprint' => floor(rand(1,3)),
                'reprint_url' => 'https://www.baidu.com',
                'reprint_summmery' => '张三丰',
                'is_public' => 1,
                'views' => 315,
                'likes' => 402
            ]);
        }
    }
}
