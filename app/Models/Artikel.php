<?php

class Artikel extends Model
{
    protected $table ='artikel';
    protected $primaryKey = 'id_artikel';
    protected $fillable = [
    'judul',
    'isi',
    ;penulis',
    ];
}
