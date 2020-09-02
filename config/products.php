<?php

	return [

		'page' => [

			'name'			=> 'Product' ,
			'subpages'		=> [
				[
					'name'	=> 'All' , 
					'url'	=> '/'.env('FRONTEND_TEMPLATE').'/products'
				] ,
				[
					'name'	=> 'New' ,
					'url'	=> '/'.env('FRONTEND_TEMPLATE').'/products/create'
				]

			]

		] ,

		'migrations' => '' 

	];