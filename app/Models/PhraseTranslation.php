<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class PhraseTranslation extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'phrase_translations';

    protected $primaryKey = 'id';
}
