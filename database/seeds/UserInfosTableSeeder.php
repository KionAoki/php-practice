<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Resources\UserInfo;

class UserInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* // Let's clear the users table first
        UserInfo::truncate();

        DB::table('userData')->insert([
            'userName' => Str::random(10),
            'account' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'pw' => Hash::make('password'),
        ]);*/
        factory(App\UserInfo::class, 50)->create()->each(function ($userInfo) {
            $userInfo->posts()->save(factory(App\Post::class)->make());
        });
    }
}
