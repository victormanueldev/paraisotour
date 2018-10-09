<?php 
    // require('ControladorUsuario.php');
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    header("Access-Control-Allow-Origin: *");
    // header('Content type: application/x-www-form-urlencoded'  );
    // header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");  
    // $controladorUsuario = new ControladorUsuario();
    // $datosUsuario = $controladorUsuario->verU('24');

    // echo json_encode($datosUsuario);


    
    function sendGet(){
    //datos a enviar
    $data = [0 => '<request>
    <language>en</language>
    <command>SUBMIT_TRANSACTION</command>
    <merchant>
       <apiLogin>pRRXKOl8ikMmt9u</apiLogin>
       <apiKey>4Vj8eK4rloUd272L48hsrarnUA</apiKey>
    </merchant>
    <transaction>
       <order>
          <accountId>512326</accountId>
          <referenceCode>testPanama1</referenceCode>
          <description>Test order Panama</description>
          <language>en</language>
          <notifyUrl>http://pruebaslap.xtrweb.com/lap/pruebconf.php</notifyUrl>
          <signature>a2de78b35599986d28e9cd8d9048c45d</signature>
          <shippingAddress>
             <country>PA</country>
          </shippingAddress>
          <buyer>
             <fullName>APPROVED</fullName>
             <emailAddress>test@payulatam.com</emailAddress>
             <dniNumber>1155255887</dniNumber>
             <shippingAddress>
                <street1>Calle 93 B 17 – 25</street1>
                <city>Panama</city>
                <state>Panama</state>
                <country>PA</country>
                <postalCode>000000</postalCode>
                <phone>5582254</phone>
             </shippingAddress>
          </buyer>
          <additionalValues class="java.util.HashMap">
             <entry>
                <string>TX_VALUE</string>
                <additionalValue>
                   <value>5</value>
                   <currency>USD</currency>
                </additionalValue>
             </entry>
          </additionalValues>
       </order>
       <creditCard>
          <number>4111111111111111</number>
          <securityCode>123</securityCode>
          <expirationDate>2018/08</expirationDate>
          <name>Test</name>
       </creditCard>
       <type>AUTHORIZATION_AND_CAPTURE</type>
       <paymentMethod>VISA</paymentMethod>
       <paymentCountry>PA</paymentCountry>
       <payer>
          <fullName>APPROVED</fullName>
          <emailAddress>test@payulatam.com</emailAddress>
       </payer>
       <ipAddress>127.0.0.1</ipAddress>
       <cookie>cookie_52278879710130</cookie>
       <userAgent>Firefox</userAgent>
       <extraParameters class="java.util.HashMap">
          <entry>
             <string>RESPONSE_URL</string>
             <string>http://www.misitioweb.com/respuesta.php</string>
          </entry>
          <entry>
             <string>INSTALLMENTS_NUMBER</string>
             <string>1</string>
          </entry>
       </extraParameters>
    </transaction>
    <isTest>true</isTest>
 </request>'];

    $json = [
        "language" => "es",
        "command" => "SUBMIT_TRANSACTION",
        "merchant" => [
           "apiLogin" => "pRRXKOl8ikMmt9u",
           "apiKey" => "4Vj8eK4rloUd272L48hsrarnUA"
        ],
        "transaction" => [
           "order" => [
              "accountId" => "512326",
              "referenceCode" => "testPanama1",
              "description" => "Test order Panama",
              "language" => "en",
              "notifyUrl" => "http =>//pruebaslap.xtrweb.com/lap/pruebconf.php",
              "signature" => "a2de78b35599986d28e9cd8d9048c45d",
              "shippingAddress" => [
                 "country" => "PA"
              ],
              "buyer" => [
                 "fullName" => "APPROVED",
                 "emailAddress" => "test@payulatam.com",
                 "dniNumber" => "1155255887",
                 "shippingAddress" => [
                    "street1" => "Calle 93 B 17 – 25",
                    "city" => "Panama",
                    "state" => "Panama",
                    "country" => "PA",
                    "postalCode" => "000000",
                    "phone" => "5582254"
                 ]
              ],
              "additionalValues" => [
                 "TX_VALUE" => [
                    "value" => 5,
                    "currency" => "USD"
                 ]
              ]
           ],
           "creditCard" => [
              "number" => "4111111111111111",
              "securityCode" => "123",
              "expirationDate" => "2018/08",
              "name" => "test"
           ],
           "type" => "AUTHORIZATION_AND_CAPTURE",
           "paymentMethod" => "VISA",
           "paymentCountry" => "PA",
           "payer" => [
              "fullName" => "APPROVED",
              "emailAddress" => "test@payulatam.com"
           ],
           "ipAddress" => "127.0.0.1",
           "cookie" => "cookie_52278879710130",
           "userAgent" => "Firefox",
           "extraParameters" => [
              "INSTALLMENTS_NUMBER" => 1,
              "RESPONSE_URL" => "http =>//www.misitioweb.com/respuesta.php"
           ]
        ],
        "test" => true
     ];

    //url contra la que atacamos
    $ch = curl_init("https://sandbox.api.payulatam.com/payments-api/4.0/service.cgi");
    //a true, obtendremos una respuesta de la url, en otro caso, 
    //true si es correcto, false si no lo es
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //establecemos el verbo http que queremos utilizar para la petición
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    //enviamos el array data
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    //obtenemos la respuesta
    $response = curl_exec($ch);
    // Se cierra el recurso CURL y se liberan los recursos del sistema
    curl_close($ch);
    if(!$response) {
        return false;
    }
    // header('Content-type: application/json');
    echo $response;
    
    }


    sendGet();
?>
