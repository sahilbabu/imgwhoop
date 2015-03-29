<?php namespace ImgWhoop;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {

    /**
     * Disbaled Time Stamps for Images Table
     *
     * @var Boolean
     */
    public $timestamps = true;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'images';
    /**
     * Database Columns fillable by Model
     *
     * @var array
     */
    protected $fillable = array('user_id','category_id','image','description');

}
