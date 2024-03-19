<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class DefaultData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = [
            'email' => 'gambomarket@gmail.com',
            'password' => bcrypt('admin#123'),
        ];
        Admin::create($admin);
    }
}
