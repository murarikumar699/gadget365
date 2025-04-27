<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    protected $connection = 'mongodb'; // explicitly set the connection
    protected $collection = 'products'; // optional: define collection name
}

