<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    protected $fillable = [
        'nome',
        'password',
        'cargo',
    ];
    public function getAuthIdentifierName()
    {
        return 'id'; // Substitua 'id' pelo nome do campo de identificação do usuário em sua tabela
    }

    public function getAuthIdentifier()
    {
        return $this->{$this->getAuthIdentifierName()};
    }

    public function getAuthPassword()
    {
        return $this->password; // Assumindo que o campo de senha na sua tabela é chamado 'password'
    }

    public function getRememberToken()
    {
        return $this->remember_token; // Assumindo que o campo de remember token na sua tabela é chamado 'remember_token'
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value; // Assumindo que o campo de remember token na sua tabela é chamado 'remember_token'
    }

    public function getRememberTokenName()
    {
        return 'remember_token'; // Substitua 'remember_token' pelo nome do campo de remember token em sua tabela
    }
}
