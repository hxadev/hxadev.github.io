<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class ProjectTranslation extends Eloquent
{

    protected $connection = 'mongodb';
    protected $collection = 'project_translations';

    protected $primaryKey = 'id';
}
