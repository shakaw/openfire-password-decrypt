<?
function decrypt_openfirepass($ciphertext, $key) {
	$cypher = 'blowfish';
	$mode   = 'cbc';
	$sha1_key = sha1($key, true);
	$td = mcrypt_module_open($cypher, '', $mode, '');
	$ivsize    = mcrypt_enc_get_iv_size($td);
	$iv = substr(hex2bin($ciphertext), 0, $ivsize);
	$ciphertext = substr(hex2bin($ciphertext), $ivsize);
	if ($iv) {
		mcrypt_generic_init($td, $sha1_key, $iv);
		$plaintext = mdecrypt_generic($td, $ciphertext);
	}
	return $plaintext;
}
