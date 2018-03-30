<?php

namespace App;

class Post extends BaseModel {
    protected $primaryKey = 'id';
    protected $table = 'post';
    protected $fillable = array('name', 'created_at_ip', 'updated_at_ip');
}
