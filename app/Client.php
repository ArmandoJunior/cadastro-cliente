<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    const MARITAL_STATUS = [
        1 => 'Solteiro',
        2 => 'Casado',
        3 => 'Divorciado'
    ];

    protected $fillable = [
        'name',
        'phone',
        'email',
        'date_birth',
        'sex',
        'marital_status',
        'company_name',
    ];

    public function getSexFormattedAttribute()
    {
        return $this->sex == 'm' ? 'Masculino' : 'Feminino';
    }

    public function getDateBirthFormattedAttribute()
    {
        return (new \DateTime($this->date_birth))->format('d/m/Y');
    }
}
