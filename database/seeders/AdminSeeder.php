<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
public function run(): void
{
DB::table('users')->insert([
[
'role'=> 'admin',
'name' => 'antonette lozares',
'email' => 'antonette20@gmail.com',
'password' => Hash::make('antonette2023'),
'remember_token' => null,
'created_at' => now(),
'updated_at' => now(),
],
[

'role'=> 'admin',
'name' => 'janine rosales',
'email' => 'janine20@gmail.com',
'password' => Hash::make('janine2023'),
'remember_token' => null,
'created_at' => now(),
'updated_at' => now(),
],
]);
}
}