<?php
//Create public and private key_______________________________________________________________________________
$privateKey = openssl_pkey_new(array(
    'private_key_bits' => '2048',      // Size of Key.
    'private_key_type' => 'OPENSSL_KEYTYPE_RSA',
));
// Save the private key to private.key file. Never share this file with anyone.
openssl_pkey_export_to_file($privateKey, 'O:\XAMPP\htdocs\lab3_part2\keys\private.key');
 
// Generate the public key for the private key
$a_key = openssl_pkey_get_details($privateKey);
// Save the public key in public.key file. Send this file to anyone who want to send you the encrypted data.
file_put_contents('O:\XAMPP\htdocs\lab3_part2\keys\public.key', $a_key['key']);
 
// Free the private Key.
openssl_free_key($privateKey);

?>







 user.php 51 line

 /*
                  $encrypted = $row->note;
                  $privateKey = openssl_pkey_get_private(file_get_contents('O:\XAMPP\htdocs\lab3_part2\keys\private.key'));
                  // Get the private Key
                  if (!$privateKey = openssl_pkey_get_private(file_get_contents('O:\XAMPP\htdocs\lab3_part2\keys\private.key')))
                  {
                      die('Private Key failed');
                  }
                  $a_key = openssl_pkey_get_details($privateKey);
                   
                  // Decrypt the data in the small chunks
                  $chunkSize = ceil($a_key['bits'] / 8);
                  $output = '';
                  
                  while ($encrypted)
                  {
                      $chunk = substr($encrypted, 0, $chunkSize);
                      $encrypted = substr($encrypted, $chunkSize);
                      $decrypted = '';
                      if (!openssl_private_decrypt($chunk, $decrypted, $privateKey))
                      {
                          die('Failed to decrypt data');
                      }
                      $output .= $decrypted;
                  }
                  openssl_free_key($privateKey);
                   
                  // Uncompress the unencrypted data.
                  $output = gzuncompress($output);
                   
                  echo 'Unencrypted Data: ' . $output;
*/





addNote.php 9 line

/*
      //Encrypt DATA_______________________________________________________________________________
      // Data to be sent
      $plaintext = $note;
       
      
      // Compress the data to be sent
      $plaintext = gzcompress($plaintext);
       

      // Get the public Key of the recipient
      $publicKey = openssl_pkey_get_public(file_get_contents('O:\XAMPP\htdocs\lab3_part2\keys\public.key'));
      $a_key = openssl_pkey_get_details($publicKey);
      
       
      // Encrypt the data in small chunks and then combine and send it.
      $chunkSize = ceil($a_key['bits'] / 8) - 11;
      $output = '';
       

      while ($plaintext)
      {
          $chunk = substr($plaintext, 0, $chunkSize);
          $plaintext = substr($plaintext, $chunkSize);
          $encrypted1 = '';
          if (!openssl_public_encrypt($chunk, $encrypted1, $publicKey))
          {
              die('Failed to encrypt data');
          }
          $output .= $encrypted1;
      }
      openssl_free_key($publicKey);
       

      // This is the final encrypted data to be sent to the recipient
      $encrypted1 = $output;
      //END OF Encrypt DATA_________________________________________________________________
      $connection->query("INSERT INTO diary(id,user_id,title,note,created_date) VALUES(NULL,\"$user_id\",\"$title\",\"$encrypted1\",NOW())");
*/