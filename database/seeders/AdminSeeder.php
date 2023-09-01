<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::factory()->create([
            'first_name' => 'Obiora',
            'last_name' => 'Egbosionu',
            'email' => 'oegbosionu@gmail.com',
            'password' => bcrypt('Kazobiora10.'),
            // 'password_confirmation' => bcrypt('Kazobiora10.'),
        ]);
    }
}

// ('first_name');
//             $table->text('last_name');
//             $table->text('email');
//             $table->string('password');
//             $table->string('password_confirmation');