<?php

namespace ImgWhoop;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    /**
     * Disbaled Time Stamps for Categories Table
     *
     * @var Boolean
     */
    public $timestamps = false;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';
    /**
     * Database Columns fillable by Model
     *
     * @var array
     */
    protected $fillable = array('category');
    }
