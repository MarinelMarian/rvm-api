<?php

namespace App;

use Robsonvn\CouchDB\Eloquent\Model as Eloquent;

class Resource extends Eloquent
{
    protected $connection = 'resources';
    protected $collection = 'resources';
    protected $fillable = [
        'organisation_id', 'name', 'type', 'quantity', 'county', 'city', 'address', 'comments', 'added_by',
    ];
  
}
