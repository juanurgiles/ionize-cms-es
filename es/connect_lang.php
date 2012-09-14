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
$lang['connect_login_failed'] = 'La información de acceso que ha proporcionado no puede ser authentificated. O bien el nombre de usuario o la contraseña que ha introducido son incorrectos. Por favor, inténtalo de nuevo.';
$lang['connect_access_denied'] = 'Se le ha negado el acceso a %s';
$lang['connect_missing_parameters']	= 'Faltaba el parámetro (s)% ';
$lang['connect_parameter_error'] = 'El parámetro %s es erroneo.';
$lang['connect_user_save_impossible'] = 'No hemos sido capaces de guardar sus datos en nuestro sistema, por favor inténtelo de nuevo o contacte con nosotros.';
$lang['connect_user_already_exists'] = 'Ya existe un usuario existente en nuestro sistema con los mismos datos. Por favor intenta utilizar otro nombre de usuario o la dirección de correo electrónico.';
$lang['connect_blocked'] = 'Usted ha sido bloqueado debido a inicios de sesión fallidos de más, por favor, inténtelo de nuevo %s';
$lang['connect_cannot_ban_yourself'] = 'No puedes prohibirte a ti.';
$lang['connect_register_success'] = 'Te has registrado correctamente.';
$lang['connect_register_success_verify_user'] = 'Has registrado correctamente pero hay que verificar sus datos. Un correo electrónico ha sido enviado a usted, por favor marque y haga clic en el enlace de activación en el mensaje para activar tu cuenta.';

// Activation mail to Admin
$lang['connect_admin_mail_subject'] = 'Registro';
$lang['connect_admin_mail_title'] = 'Registro';
$lang['connect_admin_mail_intro'] = 'Un usuario se ha registrado en el sitio.';
$lang['connect_admin_mail_nom'] = 'Nombre';
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
