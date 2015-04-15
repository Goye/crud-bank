<?php

class TransactionTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('transactions')->delete();
		$transactions = [
            ['amount' => 500, 'name' => 'Goyesays', 'type' => 'Cash in', 'user' => 12],
            ['amount' => 200, 'name' => 'Administrator', 'type' => 'Cash out', 'user' => 12],
        ];
        Transaction::insert($transactions);
    }    
}