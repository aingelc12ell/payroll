<?php

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Jenssegers\Mongodb\Model as Eloquent;

class Page extends Eloquent implements SluggableInterface{
	use SluggableTrait;
	protected $sluggable = array(
        'build_from' => 'title',
        'save_to'    => 'slug',
    );
}