<?php
/**
 *
 */

define('CORE_PATH',direname(__FILE__));

class Core {
	private static $core_classes=array(
		'Object'=>'base/class-object.php',
	);

	private $_paths=array('core'=>CORE_PATH);

	public static function autoload( $class_name ) {
		if(isset(self::$core_classes[$class_name]))
			include plugin_dir_path(__FILE__).self::$core_classes[$class_name];
	}

	public static function add_script_path($name,$path){

	}

	public static function get_script_path($name){

	}
}
