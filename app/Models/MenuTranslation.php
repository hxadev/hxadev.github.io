<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class MenuTranslation extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'menu_translations';

    protected $primaryKey = 'id';
}
