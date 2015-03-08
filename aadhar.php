
 //  $hmacSalt = $sha256pid;
        
      //  if (empty($result))
	//	{
      //      echo 'The data to decrypt cannot be empty.';
		//	die();
    //    }
       // if ($hmacSalt === null) {
       //     $hmacSalt = self::$salt;
      //  }
 
     //   $publickeycert = substr(hash('sha256', $publickeycert . $hmacSalt), 0, 32); # Generate the encryption and hmac key.
 
        # Split out hmac for comparison
       // $macSize = 64;
       // $hmac = substr($result, 0, $macSize);
       // $result = substr($result, $macSize);
 
       // $compareHmac = hash_hmac('sha256', $result, $publickeycert);


        
       $algorithm = MCRYPT_RIJNDAEL_256; # encryption algorithm
      //  $mode = MCRYPT_MODE_CBC; # encryption mode
     //   $ivSize = mcrypt_get_iv_size($algorithm, $mode); # Returns the size of the IV belonging to a specific cipher/mode combination
 
      //  $iv = substr($result, 0, $ivSize);
      //  $result = substr($result, $ivSize);
    //    $plain = mcrypt_decrypt($algorithm, $publickeycert, $result, $mode, $iv);
      //  echo rtrim($plain);
    
   
   //	$dec=utf8_decode($result);
//	echo $dec;



$pid='<Pid ts="" ver="1.0"><Demo><Pi ms="E" mv="100" name="Shivshankar Choudhury" gender="M" dob="1968-05-13" dobt="V" phone="2810806979" email="schoudhury@dummyemail.com"/></Pid>';

$sha256pid= hash("sha256",$pid);

$xml='<Auth uid="999999990019" pid="public" ac="public" sa="public" ver="1.6" txn="dyts8888" lk="MEWs4XwP0AzUVGSlKwZkMqeHJqyOvzIfz1rxEFm1uu0cRhoxjeWcIqY"><Uses pi="y" pa="n" pfa="n" bio="n" bt="n" pin="n" otp="n"/><Tkn type="001" value="2810806979"/><Meta udc="" fdc="NA" idc="NA" pip="NA" lot="P" lov="110002" /><Skey ci="20150805"></Skey><Data type="X">$pid</Data><Hmac>$SHA256pid</Hmac><Signature></Signature></Auth>';

$url='http://auth.uidai.gov.in/1.6/public/9/9/MKzX8dnY5qyuO4z8neQPDqrSCMAU5pCS32obnzl83xwtFdi45gwK6QA';

$publickeycert='MIIEpzCCA4+gAwIBAgIKVx9NH33dFPwH+jANBgkqhkiG9w0BAQsFADBmMQswCQYDVQQGEwJJTjEkMCIGA1UEChMbTmF0aW9uYWwgSW5mb3JtYXRpY3MgQ2VudHJlMQ8wDQYDVQQLEwZTdWItQ0ExIDAeBgNVBAMTF05JQyBzdWItQ0EgZm9yIE5JQyAyMDExMB4XDTEzMDgwNjA3MDQ0N1oXDTE1MDgwNTA3MDQ0N1owczELMAkGA1UEBhMCSU4xDjAMBgNVBAoTBVVJREFJMRowGAYDVQQLExFURUNITk9MT0dZIENFTlRFUjEPMA0GA1UEERMGNTYwMTAzMRIwEAYDVQQIEwlLQVJOQVRBS0ExEzARBgNVBAMTCkt1bWFyIEFudXAwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCMB57nZ5j1+YUyF/Rb6Fa4zOAuZwwMY0LmYEoQNgC2iWLk2utFTjx1RLY0TugkTT2RhUsm/UipO6rrPB9Agqp47NN2iPnC1xsLv6RYlPusrZXVh8KsBQZfVrqv35JApP7Kz+K7XMm2AYbX+0WMiH9XVggYldpFoChLZY1UhnSijLxsxuIgSd1WtWgWUiMh9c6t4rmvsUl1u6yy/gA6SJ9PptwAnIyOcOtK2Ov+GD+qdiTakqfTh9aASc0a5D/MZh3RncaEnqhCulUaDmu4hXhpPxVOYNovSVWnNze8Cukx2yLCeMaVldMwAAG67fSHcHeaUC2P37BQ4V7a4w1hpb5LAgMBAAGjggFIMIIBRDAdBgNVHQ4EFgQUzFM1dWOCK22YdMfZlpEWBRXkVzQwHwYDVR0jBBgwFoAU+oAPHPxzpMdpkBOu7zwQraqvGYQwDgYDVR0PAQH/BAQDAgUgMCEGA1UdEQQaMBiBFmFudXBrdW1hckB1aWRhaS5nb3YuaW4wOAYDVR0gBDEwLzAtBgZggmRkAgMwIzAhBggrBgEFBQcCAjAVGhNDbGFzcyAzIENlcnRpZmljYXRlMFIGCCsGAQUFBwEBBEYwRDBCBggrBgEFBQcwAoY2aHR0cDovL25pY2NhLm5pYy5pbi9jZXJ0L2NlcnRfMTQyOTI2RDJGRjE0NDM5QjM4RjkuY2VyMEEGA1UdHwQ6MDgwNqA0oDKGMGh0dHA6Ly9uaWNjYS5uaWMuaW4vY3JsXzE0MjkyNkQyRkYxNDQzOUIzOEY5LmNybDANBgkqhkiG9w0BAQsFAAOCAQEAJB6H/xPIGY0cELzazyB51ua/uBUxAuPuJm9x4Peo7ppFymmBjPL+qny5C7+1Xe1A/oXKOn2NCkGX+LwcOdtLBp5cKGieomRZq9IsVcPL45NUyr80LFB0brAvgBtRFsihjvrTEoy9c4CYESWhXb2MxrQbnuAdnNdAIFqhF1vK+toGoPzAosadclGdVP2i+cIYh1sBy+YzZh3Nso7CEi9U8E/l9dFy+fauz4UarRJxC8GnTCPEkXE98ngRcD5XMaQsJDG+TTEzfFIvyUnwS1x7riBe0Ojk1GtkS40dRp10xkElyvdHcd+yjwdrHFrIlJUvAtzbiSvSRHhXkaBAwFNqLQ==';



 $ch = curl_init();
 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 300);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$xml);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                            'Content-Type: application/xml',
                                            'Connection: Keep-Alive'
                                            ));
 
    $result = curl_exec($ch);
    curl_close($ch);
	
	
    echo $result;