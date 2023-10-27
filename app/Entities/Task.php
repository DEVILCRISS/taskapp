<?php 
namespace App\Entities;

class Task extends \CodeIgniter\Entity\Entity {
    protected $table = 'task';
    protected $allowwdFields = ['description'];
    protected $returnType = ['App\Entities\Task'];
    protected $validationRules = [
        'description' => 'required'
    ];
    protected $validationMessages = [
        'description' => [
            'required' => 'Porfavor ingrese una descripcion'
        ]
    ];
}