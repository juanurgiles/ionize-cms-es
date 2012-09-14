<?php

/*
|--------------------------------------------------------------------------
| Connect library Language file
| Language : 	English
| Translater :	Partikule Studio
|
| This lang file can be replaced by a theme one.
| Simply copy this file in the folder /themes/your_theme/language/xx/
| and modify the translations elements.
|
|--------------------------------------------------------------------------
*/

// Main library language elements
$lang['connect_login_failed'] = 'The login information you provided could not be authentificated. Either the username or the password you entered are wrong. Please try again.';
$lang['connect_access_denied'] = 'You have been denied access to %s';
$lang['connect_missing_parameters']	= 'The parameter(s) %s was missing';
$lang['connect_parameter_error'] = 'The parameter passed to %s is wrong.';
$lang['connect_user_save_impossible'] = 'We were not able to save your data into our system, please try again or contact us.';
$lang['connect_user_already_exists'] = 'There is already a user existing in our system with the same data. Please try to use another username or email address.';
$lang['connect_blocked'] = 'You have been blocked because of too many failed logins, please try again %s';
$lang['connect_cannot_ban_yourself'] = 'You cannot ban yourself.';
$lang['connect_register_success'] = 'You have successfully registered.';
$lang['connect_register_success_verify_user'] = 'You have successfully registered but we must verify your data. An e-mail has been sent to you, please check it and click the activation link in the message to activate your account.';

// Activation mail to Admin
$lang['connect_admin_mail_subject'] = 'Registro';
$lang['connect_admin_mail_title'] = 'Registro';
$lang['connect_admin_mail_intro'] = 'Un usuario se ha registrado en el sitio.';
$lang['connect_admin_mail_nom'] = 'Nomre';
$lang['connect_admin_mail_login'] = 'Ingreso';
$lang['connect_admin_mail_email'] = 'Correo';
$lang['connect_admin_mail_activation_link'] = 'Link de activación';

// Activation mail to User
$lang['connect_user_mail_subject'] = 'Tú registro';
$lang['connect_user_mail_activated'] = 'Cuenca activada';
$lang['connect_act_user_mail_title'] = 'Bienvenido !';
$lang['connect_act_user_mail_intro'] = 'Te has registrado en el sitio, gracias.';
$lang['connect_act_user_mail_text'] = 'Para confirmar tu registro, click en el link de activación.';
$lang['connect_act_user_mail_activation_link'] = 'Link de activación';

// Registration confirmation mail to User
$lang['connect_wait_user_mail_title'] = 'Bienvenido !';
$lang['connect_wait_user_mail_intro'] = 'Te has registrado en el website gracias.';
$lang['connect_wait_user_mail_text'] = 'Tu cuena podría ser activada por el administrador rápidamente.';

// Registration views
$lang['connect_user_registration_title'] = 'Registro completo';
$lang['connect_user_registration_message'] = 'Te llegará un correo con la información para confirmar tu registro.';

// Activation views
$lang['connect_home_page'] = 'Pagina de inicio';
$lang['connect_activation_title'] = 'Activación de cuenta';
$lang['connect_user_activated_message'] = 'Tu cuenca está activada.<br/>Puedes conectarte desde la página de inicio.';
$lang['connect_user_activated_error'] = 'Sucedío algún error con la activación de tu cuenta. Talvez ya has activado o estas utilizando inormación errónea? Prueba iniciar con tu cuenta o verifica el correo y vuelve a enviarlo y prueva denuevo.';

$lang['connect_admin_activated_message'] = 'Esta cuenca esta activada ahora.<br/>Un correo se enviará con su información.';
$lang['connect_admin_activated_error'] = 'Sucedío algún error con la activación de tu cuenta. Talvez ya has activado o estas utilizando inormación errónea?';


/* End of file connect_lang.php */
/* Location: ./application/language/en/connect_lang.php */
