<?php

return [
	'required'       => ':attribute ველი აუცილებელია',
	'unique'         => ':attribute უკვე დაკავებულია',
	'confirmed'      => ':attribute უნდა ემთხვეოდეს ერთმანეთს',
	'min'            => [
		'string'     => ':attribute უნდა შეიცავდეს მინიმუმ 3 გამოსახულებას.',
	],

	'attributes' => [
		'username' => 'მომხმარებლის სახელი',
		'password' => 'პაროლის',
		'email'    => 'ემეილი',
	],
];
