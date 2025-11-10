<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
          $data = [
            'username' => 'martis',
            'nama'     => 'Jhon doe',
            'email'    => 'martis@hpi.com',
            'password' => password_hash('admin123', PASSWORD_DEFAULT),
        ];

        // Using Query Builder
        $this->db->table('users')->insert($data);
    }
}
