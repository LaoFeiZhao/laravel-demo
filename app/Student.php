<?php
/**
 * Created by PhpStorm.
 * User: Eric-Hu
 * Date: 2017/9/13
 * Time: 15:15
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';

    public $timestamps = true;

    protected function getDateFormat()
    {
        return time();
    }

    protected function asDateTime($value)
    {
        return $value;
    }
}