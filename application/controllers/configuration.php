<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Configuration extends CI_Controller
{
	public function product_id()
	{
		$data = array(
			'command'	=>	'requestProductIds',
			'products'	=>	array(
				"net.profzone.bacterial.killer6",
				"net.profzone.bacterial.killer12",
				"net.profzone.bacterial.killer18",
				"net.profzone.bacterial.killer25",
				"net.profzone.bacterial.killer40",
				"net.profzone.bacterial.killer60",
				"net.profzone.bacterial.killer98"
			)
		);

		header('Content-type: application/json');
		echo json_encode($data);
	}
}