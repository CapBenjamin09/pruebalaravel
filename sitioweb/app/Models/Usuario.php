<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = ['primerNombre','segundoNombre','primerApellido', 'apellidoCasada' ,'segundoApellido','birthDay', 'foto', 'profesion', 'aniosLaborando','salario','dpi', 'mail', 'password'];
    protected $table = 'usuarios';

    protected $hidden = [
        'password',
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }
 
}
