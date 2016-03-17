<?php
include dirname(__FILE__)."/bootstrap.php";


$returnTo = isset($_REQUEST["returnTo"]) ? $_REQUEST["returnTo"] : HOME_URL;


if(defined("ENV") && ENV !=="dev") {
	$sp = defined("SIMPLE_SAML_SP") ? SIMPLE_SAML_SP : 'default-sp';
	$saml = new SimpleSAML_Auth_Simple($sp);

	$saml->logout($returnTo);

}else{
	header("Location: " . $returnTo);
	setcookie("beta_dev_loggedin", false);
	die();
}

