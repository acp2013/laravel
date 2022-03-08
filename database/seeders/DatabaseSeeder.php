<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Andika Candra Pristiawan',
            'username' => 'pca',
            'email' => 'andika.candra@lintasarta.co.id',
            'password' => Hash::make('P4ssword!23'),
        ]);
        DB::table('users')->insert([
            'name' => 'Faizal Rizkan',
            'username' => 'fzk',
            'email' => 'faizal.rizkan@lintasarta.co.id',
            'password' => Hash::make('P4ssword!23'),
        ]);
    }
}
