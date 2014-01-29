<?php
/**
 *
 */



class Core {
	private static $_core_classes=array(
		'Object'=>'base/class-object.php',
	);

	private static $_paths=array('core'=>CORE_PATH);

	public static function autoload( $class_name ) {
		if(isset(self::$_core_classes[$class_name]))
			include plugin_dir_path(__FILE__).self::$_core_classes[$class_name];
	}

	public static function add_script_path($name,$path){

	}

	public static function get_script_path($name){

	}

	public static function get_paths(){
		return self::$_paths;
	}
}
