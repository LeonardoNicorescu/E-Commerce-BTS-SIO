<?php

namespace App\Models;
use database\DBconnection;
class User extends Model
{
    protected $table ="user";
    
    public function getByEmail(string $email):User
    {
            return $this->query("SELECT * from {$this->table} WHERE email = ?",[$email],true);
    }

    public function destroyUser(int $Id_user)
    {
        return $this->query("DELETE FROM {$this->table} WHERE Id_user = ?", [$Id_user]);
    }

}

