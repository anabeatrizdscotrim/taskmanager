<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskEntity extends Model
{
    protected $fillable = ['title', 'description', 'status']; // Campos que podem ser preenchidos em massa

    // Se usar timestamps (created_at e updated_at)
    public $timestamps = true;

    // Especificando o nome da tabela
    protected $table = 'task';

    // Definindo atributos adicionais
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'string';

    protected $casts = [
        'title' => 'string',
        'description' => 'string',
        'status' => 'string',
    ];
}
