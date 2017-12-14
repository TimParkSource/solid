<?php

class InvoiceTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testInvoice()
	{
		$response = $this->call('GET', 'invoice');

		$this->assertEquals(200, $response->getStatusCode());
	}

}
