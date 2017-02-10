<?php
// Simple Method get 1 parameter and return with Hello
function AddHello($name)
{
     return "Hello $name";
}
// Create SoapServer object using WSDL file.
// For the simplicity, our SoapServer is set to operate in non-WSDL mode. So we do not need a WSDL file
$server = new SoapServer(null, array('uri'=>'http://localhost/hello'));
// Add AddHello() function to the SoapServer using addFunction().
$server->addFunction("AddHello");
// To process the request, call handle() method of SoapServer.
$server->handle();
?> 