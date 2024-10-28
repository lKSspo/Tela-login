<?php
class User {
    private $users = [
        [
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => '123456' 
        ],
        [
            'name' => 'user1',
            'email' => 'user1@example.com',
            'password' => 'password123' 
        ]
    ];

    public function findByEmail($email) {
        foreach ($this->users as $user) {
            if ($user['email'] === $email) {
                return $user;
            }
        }
        return null;
    }
}
?>
