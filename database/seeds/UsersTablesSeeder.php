<?php

use Illuminate\Database\Seeder;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table ('users')->insert([
            'id' => '01',
            'name' => 'admin',
            'cpf' => '12345678910',
            'email' => 'admin@uesb.br',
            'nacionalidade' => 'Brasileiro',
            'password' => Hash::make('12345678')
            
        ]);
    }
}
