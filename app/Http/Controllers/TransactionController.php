<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
use App\Models\Gold;
use App\Models\Inventory;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $transactions = Transaction::with('gold','user')->get();
        return view('transactions', compact('transactions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $gold = Gold::where('inventory_type', 'external')->get()->pluck('type', 'id');
        $users = User::get()->pluck('name', 'id');
        return view('transaction-create', compact('gold', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(TransactionRequest $request)
    {

        $message = 'new transaction Created';
        $goldId = $request->input('gold_id');
        $userId = $request->input('user_id');
        $quantity = (int)$request->input('quantity');

        $checkedQuantity =  $this->checkInventoryGoldQuantity($goldId,$quantity);

        if(!$checkedQuantity){
            $message = 'inventory quantity is not enough';
            return redirect()->route('transaction.create')
            ->with('success', $message);
        }

        try {
            // Start a database transaction
            DB::beginTransaction();

            // Create the transaction record
            $transaction = new Transaction();
            $transaction->user_id = $userId;
            $transaction->quantity = $quantity;
            $transaction->save();

            // Attach the gold relationship
            $transaction->gold()->attach($goldId);

            // Commit the transaction if both operations were successful
            DB::commit();
        } catch (\Exception $e) {
            // An error occurred, so roll back the transaction
            DB::rollBack();
            $message = 'Error creating the transaction';
        }
        $transaction = new Transaction();
        $transaction->user_id = $userId;
        $transaction->quantity = $quantity;
        // Save the transaction record
        $transaction->save();

        $transaction->gold()->attach($goldId);

        return redirect()->route('transaction.create')
            ->with('success', $message);
    }

    public function checkInventoryGoldQuantity($goldId,$quantity){
        $inventory = Inventory::where('gold_id',$goldId)->first();
        $inventoryQuantity = $inventory->quantity;

        if($quantity > $inventoryQuantity){
            return false;
        }

        $inventory->quantity = $inventoryQuantity - $quantity;

        $inventory->save();

        return true;
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
