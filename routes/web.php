<?php
function generatePassword( $password, $salt, $iterationCount ){
    $passwordSaltBytes      = $password;
    $saltBytes              = $salt;
    $iterationCountBytes    = unpack( "C*", pack( "L", $iterationCount ) );
    $derivedLength          = strlen( $password ) + strlen( $saltBytes );
    
    for($i = 0, $len = strlen( $saltBytes ), $pLen = strlen( $password ); $i < $len; $i++)
    	$passwordSaltBytes[$pLen + $i] = $saltBytes[$i];
    
    $pbkdf2Bytes = hash_pbkdf2( 
    	"sha1", 
    	$password, 
    	$passwordSaltBytes, 
    	$iterationCount,  
    	$derivedLength + count( $iterationCountBytes ),
    	true
    );
    
    $hashBytes      = hash( "sha512", $pbkdf2Bytes, true );
    $hashSaltBytes  = $hashBytes;
    
    for($i = 0, $len = strlen( $saltBytes ), $hLen = strlen( $hashBytes ); $i < $len; $i++)
    	$hashSaltBytes[$hLen + $i] = $saltBytes[$i];
    
    $encryptedString = base64_encode( $hashSaltBytes );
    
    return $encryptedString;
}
Route::get('/views/{view}', function($view){
	return view('dashboard/views/'.$view);
});
Route::name('login')->get('/', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');
Route::middleware('auth')->get('/partials/{page}', function($page){
	return view('dashboard.partials.'.$page);
});


Route::get('/dashboard', 'DashboardController@index');

Route::get('/hash', function(){	
	echo generatePassword( 'P@$$W0rd', '2c69cb48-30f8-4ad0-a487-b02de0aad8e9', 10000 );
});


Route::any('{slug}', function($slug){
	return redirect('/');
})->where('slug', '([A-z\d-\/_.]+)?');