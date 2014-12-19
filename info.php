<?php
$authService = new SoapClient( 'https://services.inphonex.com/1.9/soap/Auth/Auth.php?wsdl' );
$authRequest[ 'AuthSet' ][ 'auth' ][ 'username' ] = '6969';
$authRequest[ 'AuthSet' ][ 'auth' ][ 'password' ] = 'a69596959';
$authRequest[ 'AuthSet' ][ 'type' ] = 'reseller';
$authRequest[ 'AuthSet' ][ 'test_mode' ] = 'true';
$stateId = $authService->Login( $authRequest )->LoginReturn;

    $Customer = new SoapClient( 'https://services.inphonex.com/0.11/soap/Accounts/Customer/Customer.php?wsdl' );
    $arr_parameters[ 'StateId' ] = $stateId;
    $arr_parameters[ 'CustomerId' ] = '999999';
          
    try {
         //$obj_return=$Customer->CallCreditList( $arr_parameters )->CallCreditListReturn;
		 print_r($arr_parameters);
         /**
         * Your code here
         */
    } catch (Exception $e) {
      echo $e->getMessage();
      exit;
    }
?>