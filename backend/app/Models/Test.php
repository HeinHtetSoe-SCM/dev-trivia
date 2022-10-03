<?php
namespace App\Models;

use Franzose\ClosureTable\Models\Entity;

class Test extends Entity
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tests';

    /**
     * ClosureTable model instance.
     *
     * @var \App\TestClosure
     */
    protected $closure = 'App\Models\TestClosure';
}
