<?php

class Entry extends Eloquent {
    protected $guarded = array();
    protected $table = 'entries';
    public static $rules = array();
}