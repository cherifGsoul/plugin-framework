<?php
/**
 *
 */



class Core {
	private static $_core_classes=array(
		'Object'=>'base/class-object.php',
	);

	private static $_packages=array( 'core'=>CORE_PATH );

	public static function load() {
		//str_replace( '_', '-', strtolower( 'My_Class' ) ) -->my-class
	}

	public static function autoload( $class_name ) {
		if ( isset( self::$_core_classes[$class_name] ) )
			include plugin_dir_path( __FILE__ ).self::$_core_classes[$class_name];
		else{

		}




	}

	public static function add_package( $name, $path ) {
		if(!empty($path))
			self::$_packages[$name]=rtrim($path,'\\/');
		else
			unset(self::$_packages[$name]);
	}

	public static function get_package( $name ) {

	}

	public static function get_packages() {
		return self::$_packages;
	}


	public static function regisrer_autoloader() {

	}
}
