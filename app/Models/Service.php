<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Service extends Eloquent implements TranslatableContract
{

    use Translatable;

    protected $connection = 'mongodb';
    protected $collection = 'service';

    protected $primaryKey = 'id';

    public $translatedAttributes = ["title", "content"];
    public $translationModel;
    public $translationForeignKey;

    public $localeKey;
}
