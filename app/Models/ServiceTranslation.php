<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class ServiceTranslation extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'service_translations';

    protected $primaryKey = 'id';
}
