<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class accountseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table account
        \App\Models\Account::create([
        	// 'account_id' => '',
        	'account_username' => 'ohmyjons',
        	'account_name' => 'joni dohan',
            'account_email' => 'jonidohan@gmail.com',
            'account_phone' => '0812141241334',
            'account_photo' => 'fafefafaefa.jpg',
            'account_bio' => 'hiduplah selamat malam',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}