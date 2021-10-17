<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = [
            [
                'tag' => 'English',
            ],
            [
                'tag' => 'Fable',
            ],
            [
                'tag' => 'Moral Story',
            ],
            [
                'tag' => 'Short Story',
            ],
            [
                'tag' => 'Other',
            ],
        ];
    }
}
