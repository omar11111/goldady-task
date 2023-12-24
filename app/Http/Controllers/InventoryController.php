<?php

namespace App\Http\Controllers;

use App\Http\Requests\InventoryRequest;
use App\Models\Gold;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $inventories = Inventory::with('gold')->get();
    return view('inventories', compact('inventories'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $gold = Gold::get()->pluck('type', 'id');
    return view('inventory-create' ,compact('gold'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(InventoryRequest $request)
  {
      $message = 'new inventory Created';
      $goldId = $request->input('gold_id');
      $quantity = $request->input('quantity');

      // Check if a record with the given gold_id already exists
      $inventory = $this->checkInventoryExist($goldId);

      if ($inventory) {
          // If the record exists, update the quantity
          $inventory->quantity += $quantity;
          $message = 'Inventory record updated successfully';
      } else {
          // If the record doesn't exist, create a new one
          $inventory = new Inventory();
          $inventory->gold_id = $goldId;
          $inventory->quantity = $quantity;
      }

      // Save the inventory record
      $inventory->save();

      return redirect()->route('inventory.create')
          ->with('success', $message);
  }

  public function checkInventoryExist($goldId){

    $inventory = Inventory::where('gold_id', $goldId)->first();
    if (!$inventory) {
        return false;
    }
    return $inventory;


  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {

  }

}

?>
