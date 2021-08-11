<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;




class DataController extends Controller
{
    public function authors(){
        return datatables()->of(DB::table('authors'))->toJson();
    }
}
