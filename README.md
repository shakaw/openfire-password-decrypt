# openfire-password-decrypt

Decrypt ecrypted with blowfish user passwords from Openfire database store

Use example:

echo decrypt_openfirepass($enc_password, $blowfish_key);

where 
$enc_password - encrypted password from table [ofUser] column [encryptedPassword],
$blowfish_key - blowfish key table [ofProperty] column [propValue] where [name]='passwordKey'
