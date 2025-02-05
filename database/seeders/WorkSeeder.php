<?php

namespace Database\Seeders;

use App\Models\Work;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Work::insert(
            [
                [
                    'title' => 'Крутое задание 1',
                    'path_img' => 'https://media.istockphoto.com/id/538478165/ru/%D1%84%D0%BE%D1%82%D0%BE/%D0%B8%D1%81%D0%BA%D1%83%D1%81%D1%81%D1%82%D0%B2%D0%BE-%D0%BE%D0%B1%D0%BE%D1%80%D1%83%D0%B4%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5.jpg?s=612x612&w=0&k=20&c=ggbjrISCcni1Ma9-pFS56VS7IL-K6FlgoE3yaA4Qqpg=',
                    'score' => '4',
                    'category_id' => '1',
                    'user_id' => '2'
                ],
                [
                    'title' => 'Крутое задание 2',
                    'path_img' => 'https://previews.123rf.com/images/kolidzei/kolidzei1609/kolidzei160900013/64485293-%D0%B1%D0%B0%D0%BD%D0%BA%D0%B8-%D1%81-%D0%BA%D1%80%D0%B0%D1%81%D0%BE%D1%87%D0%BD%D1%8B%D0%B5-%D0%BA%D1%80%D0%B0%D1%81%D0%BA%D0%B8-%D0%B3%D1%83%D0%B0%D1%88%D1%8C-%D0%BC%D0%B0%D0%BA%D1%80%D0%BE%D1%81-stock-image.jpg',
                    'score' => '3',
                    'category_id' => '1',
                    'user_id' => '2'
                ],
                [
                    'title' => 'Крутое задание 3',
                    'path_img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzLN1tqR0Yrvsh1xGW53GRto6Et1maq2ivgw&s',
                    'score' => '5',
                    'category_id' => '1',
                    'user_id' => '2'
                ],
            ]
        );

    }
}
