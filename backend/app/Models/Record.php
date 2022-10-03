<?php
namespace App\Models;

use Franzose\ClosureTable\Models\Entity;

class Record extends Entity
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'records';

    /**
     * ClosureTable model instance.
     *
     * @var \App\RecordClosure
     */
    protected $closure = 'App\Models\RecordClosure';
}
