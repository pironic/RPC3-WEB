<?
// these will be used if you're not using a Crowd Auth server or there is a problem with it.
$failover_username = "root";
$failover_password = "password";

// Enter the Crowd Auth server details here, or leave it if you dont have one. It'll error out and failover to the user/pass above.
$crowd_app_name = 'rpc-manager';
$crowd_app_password = '';
$crowd_url = 'http://crowd.YOUR.DOMAIN/crowd/services/SecurityServer?wsdl';

// The details of how the script can access the RPC.
$rpc_ip = '192.168.1.2';
$rpc_port = '23';
$rpc_user = 'web'; //make sure this is not using the 'admin' user. 
$rpc_pass = 'admin';
