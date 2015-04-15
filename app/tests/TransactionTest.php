<?php

class TransactionTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testCashIn()
	{
		$response = Transaction::where('user', '=', 12)
				->where('type', '=', 'Cash in')
				->first();

		$this->assertEquals(500, $response->amount);
	}

	public function testCashOut()
	{
		$response = Transaction::where('user', '=', 12)
				->where('type', '=', 'Cash out')
				->first();

		$this->assertEquals(200, $response->amount);
	}

}