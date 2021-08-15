<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BorrowHistory extends Model
{
    protected $table=['borrow_history'];
    protected $guarded=[];
    protected $primaryKey='kode_borrow_history';


}
