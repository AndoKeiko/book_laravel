<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestSampleController extends Controller
{
    public function form() {
      return view('form');
    }
    public function queryStrings(Request $request) {
      // $keyword = '未設定';
      // if($request->has(key:'keyword')) {
      //     $keyword = $request->keyword;
      // }
      $keyword = $request->keyword;
      // $keyword = $request->get('keyword','未送信');
      return 'キーワードは「'.$keyword.'」です';
    }
    public function profile($id) {
      return 'ID'.$id;
    }
    public function productsArchive(Request $request, $category, $year){
      return 'category:'.$category.'<br>year: '. $year. '<br>page: '.$request->get(key: 'page', default:1);
    }
}