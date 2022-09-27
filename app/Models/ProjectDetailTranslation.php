<?php

namespace App\Models;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class ProjectDetailTranslation extends Eloquent
{

    protected $connection = 'mongodb';
    protected $collection = 'project_detail_translations';

    protected $primaryKey = 'id';
}
