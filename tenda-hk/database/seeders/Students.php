<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Students extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            'table' => 1,
            'name' => '차완',
            'img' => 'img/chawan.jpg',
        ]);
        DB::table('students')->insert([
            'table' => 1,
            'name' => '고',
            'img' => 'img/go.jpg',
        ]);
        DB::table('students')->insert([
            'table' => 1,
            'name' => '혼다',
            'img' => 'img/honda.jpg',
        ]);
        DB::table('students')->insert([
            'table' => 1,
            'name' => '후지와라',
            'img' => 'img/fujiwara.jpg',
        ]);
        DB::table('students')->insert([
            'table' => 1,
            'name' => '후카사와',
            'img' => 'img/fukasawa.jpg',
        ]);
        DB::table('students')->insert([
            'table' => 1,
            'name' => '이토',
            'img' => 'img/ito.jpg',
        ]);
        DB::table('students')->insert([
            'table' => 1,
            'name' => '카가야',
            'img' => 'img/kagaya.jpg',
        ]);
        DB::table('students')->insert([
            'table' => 1,
            'name' => '카나이',
            'img' => 'img/kanai.jpg',
        ]);
        DB::table('students')->insert([
            'table' => 1,
            'name' => '형규',
            'img' => 'img/kim.jpg',
        ]);
        DB::table('students')->insert([
            'table' => 1,
            'name' => '기무라',
            'img' => 'img/kimura.jpg',
        ]);
        DB::table('students')->insert([
            'table' => 1,
            'name' => '코니시',
            'img' => 'img/konishi.jpg',
        ]);
        DB::table('students')->insert([
            'table' => 1,
            'name' => '미나미',
            'img' => 'img/minami.jpg',
        ]);
        DB::table('students')->insert([
            'table' => 1,
            'name' => '오기노사와',
            'img' => 'img/oginosawa.jpg',
        ]);
        DB::table('students')->insert([
            'table' => 1,
            'name' => '오니츠카',
            'img' => 'img/onitsuka.jpg',
        ]);
        DB::table('students')->insert([
            'table' => 1,
            'name' => '오우라',
            'img' => 'img/oura.jpg',
        ]);
        DB::table('students')->insert([
            'table' => 1,
            'name' => '사카모토',
            'img' => 'img/sakamoto.jpg',
        ]);
        DB::table('students')->insert([
            'table' => 1,
            'name' => '사토',
            'img' => 'img/sato.jpg',
        ]);
        DB::table('students')->insert([
            'table' => 1,
            'name' => '스다',
            'img' => 'img/suda.jpg',
        ]);
        DB::table('students')->insert([
            'table' => 1,
            'name' => '스가노',
            'img' => 'img/sugano.jpg',
        ]);
        DB::table('students')->insert([
            'table' => 1,
            'name' => '스나카와',
            'img' => 'img/sunakawa.jpg',
        ]);
    }
}
