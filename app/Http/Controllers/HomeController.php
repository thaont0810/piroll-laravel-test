<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function getIndex() {
    return view('pages.home');
  }

  public function getServices() {
    $data  = [[
      'title' => 'UX/ Ui design',
      'image' => 'diamond',
      'desc' => 'Be set fourth land god darkness make it wherein own'
    ], [
      'title' => 'web development',
      'image' => 'arc',
      'desc' => "A she'd them bring void moving third she'd kind fill"
    ],[
      'title' => 'app / mobile',
      'image' => 'phone',
      'desc' => "Dominion man second spirit he, earth they're creeping"
    ], [
      'title' => 'game design',
      'image' => 'joy',
      'desc' => 'Morning his saying moveth it multiply appear life be'
    ],[
      'title' => 'SEO / marketing',
      'image' => 'plane',
      'desc' => "Give won't after land fill creeping meat you, may"
    ],[
      'title' => 'photography',
      'image' => 'star-black',
      'desc' => "Creepeth one seas cattle grass give moving saw give"
    ], [
      'title' => 'graphic design',
      'image' => 'magic-wand',
      'desc' => 'Open, great whales air rule for, fourth life whales'
    ], [
      'title' => ' illustrations',
      'image' => 'paint-bucket',
      'desc' => "Whales likeness hath, man kind for them air two won't"
    ]
  ];
    return view('pages.services')->with(['data' => $data]);
  }

  public function getWork() {
    $works = [1, 2, 3, 4, 5, 6, 7, 8];
    return view('pages.work', compact('works'));
  }
}