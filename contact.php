<?php

if(isset($_POST) && isset($_POST['nom']) &&($_POST['email']) && isset($_POST['message'])){
	extract($_POST);
	if(!empty($nom) && !empty($email) && !empty($message)){

		$destinataire="creerunfilm@gmail.com";
		$sujet="Message reçu du site internet";
		$msg="Nouveau message reçu: \n
		Nom : $nom \n
		Email : $email \n
		Message : $message";
		$entete="From: $nom \n Reply-To: $email";
		mail($destinataire, $sujet, $msg, $entete);
		echo"Le mail a bien été envoyé";
}
}
?>