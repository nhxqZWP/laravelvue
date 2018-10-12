<?php
/**
 * Created by PhpStorm.
 * User: zhangweipeng
 * Date: 2018/10/12
 * Time: 下午9:57
 */

namespace app\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class AppController extends Controller
{
     public function getApp()
     {
          return view('app');
     }
}