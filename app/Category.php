<?php

namespace App;

class Category extends BaseModel {
    protected $primaryKey = 'id';
    protected $table = 'post';
    protected $fillable = array('name', 'created_at_ip', 'updated_at_ip');
}
