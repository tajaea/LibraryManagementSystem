
/*Tajae Anglin: 1803630

What is hashing in php?
The hash() function returns a hash value for the given data based on the algorithm like (md5, sha256). 
The return value is a string with hexits (hexadecimal values).

What is secret key encryption in php?
Secret Key Encryption is also called Symmetric encryption, The Secret Key Encryption of the PHP uses just one key, 
called a shared secret, for both encrypting and decrypting.*/

/*Hashing Function*/
<?php  
  $password = 'web systems';
  $phrase = 'computer science';

  echo sprintf("The md5 hashed password of %s is: %s\n", $password, md5($password.$phrase));

  echo sprintf("The sha1 hashed password of %s is: %s\n",$password, sha1($password.$phrase));

  echo sprintf("The gost hashed password of %s is: %s\n", $password, hash('gost', $password.$phrase));
                            
?>

/*Encryption Function*/
<?php
    $plaintext = "She sells sea shells by the sea shore";
    $cipher = "tongue twister";

    if (in_array($cipher, openssl_get_cipher_methods()))
    {
        $ivlen = openssl_cipher_iv_length($cipher);
        $iv = openssl_random_pseudo_bytes($ivlen);
        $ciphertext = openssl_encrypt($plaintext, $cipher, $key, $options=0, $iv, $tag);

        $original_plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options=0, $iv, $tag);
        echo $original_plaintext."\n";
    }
?>
