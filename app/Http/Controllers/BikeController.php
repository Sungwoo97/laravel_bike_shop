<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BikeController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  private static function getData()
  {
    return [
      ['id' => 1, 'name' => "S-Works Venge Di2-Sagan Collection", 'brand' => 'Specialized', 'price' => '14,000,000원'],
      ['id' => 2, 'name' => "S-Works Tarmac SL8 LTD – SRAM RED AXS", 'brand' => 'Specialized', 'price' => '19,000,000원'],
      ['id' => 3, 'name' => "Pinarello Dogma F12 Disk", 'brand' => 'Pinarello', 'price' => '17,035,364원'],
      ['id' => 4, 'name' => "BMC Teammachine SLR 01 Disc", 'brand' => 'BMC', 'price' => '20,584,399원'],
      ['id' => 5, 'name' => "TCR Advanced Pro 0 Di2", 'brand' => 'GIANT', 'price' => '7,890,000원']
    ];
  }
  public function index()
  {
    //
    return view('bikes.index', [
      'bikes' => self::getData()
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $bikes = self::getData();
    $index = array_search($id, array_column($bikes, 'id'));
    if ($index === false) {
      abort(404);
    }
    return view('bikes.show', [
      'bike' => $bikes[$index]
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
