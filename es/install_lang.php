<?php

$lang = array();

/* General */
$lang['title_ionize_installation'] = 		'Instalación';

$lang['title_system_check'] = 		'System check result';
$lang['title_database_settings'] = 	'Configuraciones de la base de datos';
$lang['title_user_account'] = 	'Cuenta de usuario Administrador';
$lang['title_default_language'] = 	'Lenguaje predeterminado';
$lang['title_sample_data'] = 	'¿Instalar el ejemplo del sitio?';

$lang['button_next_step'] = 		'Siguiente paso';
$lang['button_skip_next_step'] = 	'Saltar & Siguiente paso';
$lang['button_save_next_step'] = 	'Guardar & Ir al siguiente paso';
$lang['button_install_test_data'] = 	"Instalar datos de prueba";
$lang['button_start_migrate'] = 		'Iniciar la migración de la base de datos';

$lang['nav_check'] = 'Chequeo del sistema';
$lang['nav_db'] = 'Base de datos';
$lang['nav_settings'] = 'Configuraciones';
$lang['nav_end'] = 'Fin';
$lang['nav_data'] = 'Datos de ejemplo';


/* System check */
$lang['php_version'] = 			'PHP >= 5';
$lang['php_version_found'] = 	'version de PHP';
$lang['mysql_support'] = 		'soporte MySQL';
$lang['mysql_version_found'] = 	'versión de MySQL';
$lang['file_uploads'] = 		'Archivo subido';
$lang['mcrypt'] = 				'PHP Mcrypt Lib';
$lang['gd_lib'] = 				'PHP GD Lib';
$lang['write_config_dir'] = 	'<b>/application/config/</b>';
$lang['write_files'] = 			'<b>/files/*</b>';
$lang['write_themes'] = 		'<b>/themes/*</b>';
$lang['config_check_errors'] = 	'Algunos requisito de base no están bien. <br/> Corregirlos para continuar con la instalación.';
$lang['welcome_text'] = 		"<p>Bienvenido ! Estos pasos le ayudarán a instalar Ionize.</p>";
$lang['write_check_text'] = 	"<p>Las siguientes carpetas y archivos necesitan tener permisos de escritura...</p>";
// $lang['system_check_text'] = 	"<p>Ionize needs all of these settings to be OK.</p>";

$lang['title_folder_check'] = 	"Estas carpetas debe tener permisos de escritura";
$lang['title_files_check'] = 	"Estos archivos necesitan tener permisos de escritura";
 

/* Database */
$lang['database_driver'] = 			'Controlador';
$lang['database_hostname'] = 		'Servidor';
$lang['database_name'] = 			'Base de datos';
$lang['database_username'] = 		'Usuario';
$lang['database_password'] = 		'Conraseña';
$lang['database_create'] = 			'Crear la base de datos';
$lang['title_database_create'] = 	'Creación de la base de datos';
$lang['db_create_text'] = 			"<p>Ionize se instalará o migrar su base de datos:</p><p><b class=\"highlight\">Nueva instalación</b> : La base de datos y las tablas se crearán <br/> <b class=\"highlight2\"> Actualizaciones </ b>: El siguiente paso será comprobar si la actualización es necesaria</p>";
$lang['db_create_prerequisite'] = 			"El usuario debe tener el derecho de crear bases de datos. <br/> Si su base de datos ya existe, no lo compruebe.";
$lang['database_error_missing_settings'] = 	'Falta parte de la información. <br/> Favor rellene todos los campos !';
$lang['database_success_install'] = 		'<b class="ex">La base de datos se ha instalado correctamente.</b>';
$lang['database_success_install_no_settings_needed'] = 		'<b class="ex">Base de datos OK.</b><br/>A medida que la base de datos ya existe, la página web de configuración paso se evitará.';
$lang['database_success_migrate'] = 		'<b class="ex">Ña base de datps fie actualizada correctamente.</b>';
$lang['database_error_coud_not_connect'] = 		'La conexión a la base de datos falla con los ajustes actuales.';
$lang['database_error_database_dont_exists'] = 		"La base de datos no existe !";
$lang['database_error_writing_config_file'] = 		"<b>Error :</b><br/>El archivo <b style=\"color:#000;\">/application/config/database.php</b> no puede ser escrito!<br/>Verificar tus permisos.";
$lang['database_error_coud_not_write_database'] = 		"<b>Error :</b><br/> Imposible escribir en la base de datos.<br/>Verificar los permisos en la base de datos.";
$lang['database_error_coud_not_create_database'] = "El programa de instalación no puede crear la base de datos. Compruebe el nombre de base de datos o sus permisos";
$lang['database_error_no_ionize_tables'] = 			"La base de datos que ha seleccionado no parece ser una base de datos Ionize. Por favor, puedes volver a intentarlo.";
$lang['database_error_no_users_to_migrate'] = 		"Cuenta de usuario a actualizar";

$lang['database_migration_from'] = 			'Esta base de datos necesita ser actualizada.<br/>Actualiar a versión : ';

$lang['database_migration_text'] = 		"<p class=\"error\"><b>NOTICIA :</b><br/>La base de datos podría no ser actualizada.<b><br/>Favor respaldar tu base de datos antes de esta actualiación.</p>";


/* Settings */
$lang['lang_code'] = 		'Codigo (2 chars)';
$lang['lang_name'] = 		'Etiqueta';
$lang['settings_default_lang_title'] = 		'Lenguaje Predeterminado';
$lang['settings_default_lang_text'] = 		'Tu sitio necesita un lenguaje predeterminado.<br/>Puedes visitar <a target="_blank" href="http://en.wikipedia.org/wiki/ISO_639-1">la página de Wikipedia ISO 639-1 </a> para más información sobre los códigos de lenguaje.';
$lang['settings_error_missing_lang_code'] = "El código de idioma es obligatorio";
$lang['settings_error_missing_lang_name'] = "El nombre de idioma es obligatorio";
$lang['settings_error_lang_code_2_chars'] = "El codigo de lenguaje debe contenener 2 caracteres. Ejemplo : \"en\"";
$lang['settings_error_write_rights'] = "No tiene permisos de escritura en <b>/application/config/laguage.php</b>. Favor chequear los permisos PHP en este archivo.";
$lang['settings_error_write_rights_config'] = "No tiene permisos de scritura en <b>/application/config/config.php</b>. Favor chequear los permisos PHP en este archivo.";
$lang['settings_error_admin_url'] = "La URL de admin debe ser en texto, sin espacios o caracteres especiales";
$lang['settings_admin_url_title'] = 		' URL Panel de administración';
$lang['settings_admin_url_text'] = 		'Es recomendado cambiar el predeterminado a uno.';
$lang['admin_url'] = ' URL del administrador';


/* Usuario */
$lang['user_introduction'] = 	'Podrias conectarte al Panel del Administrador con este ingreso.';
$lang['username'] = 			'Ingreso (min. 4 caracteres)';
$lang['screen_name'] = 			'Nombre Completo';
$lang['email'] = 				'Correo';
$lang['password'] = 			'Contraseña (min. 4 caracteres)';
$lang['password2'] = 			'Confirmar contraseña';
$lang['user_error_missing_settings'] = 			'Favor rellene todos los campos !';
$lang['user_error_not_enough_char'] = 			'Ingreso y Contraseña deben tener minimo 4 caracteres!';
$lang['user_error_email_not_valid'] = 			'Correo no válido. Favor corregir.';
$lang['user_error_passwords_not_equal'] = 		'Correo y confirmación no son iguales.	';
$lang['user_info_admin_exists'] = 		'Un usuario administrador ya existe en la base de datos.<br/>Puedes saltar este paso si no quieres crear o actualizar la cuenta de Administrador.';
$lang['encryption_key'] = 			'Clave de encripción';
$lang['encryption_key_text'] = 		"Ionizar necesita una clave de 128 bits de cifrado. <br />
Esta clave codifica la cuenta del usuario y todos los datos sensibles. <br/>
Será escrito en el archivo <b> / application / config / config.php </ b> .";
$lang['no_encryption_key_found'] = 	"La clave de cifrado no se ha encontrado. la cuenta de usuario no se migra. <b> Debe crear un nuevo usuario administrador</b>.";


/* Example data */
$lang['data_install_intro'] = 	"
<p> Si esta es la primera vez que utilice ionizar, es muy recomendable instalar el sitio web de la muestra. <br/>
Este sitio web incluye: </ p>
<ul>
<li> Un conjunto completo de datos, útil para probar ionizar, </ li>
<li> un tema ejemplo de trabajo </ li>
</ ul>
								";
$lang['title_skip_this_step'] = 	"Saltar este paso";


/* Finish screen */
$lang['title_finish'] = 		'Instalación completada';
$lang['finish_text'] = 			'<b>IMPORTANTE</b>: <br/>Tienes que borrar la carpeta "<b>/install</b>" manualmente antes de acceder al sitio o a el administrador.';
$lang['button_go_to_admin'] = 	'Ir a administrador';
$lang['button_go_to_site'] = 	'Ir al sitio web';
