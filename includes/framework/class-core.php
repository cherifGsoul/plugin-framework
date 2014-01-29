<?php
/**
 *
 */



class Core {
	private static $_core_classes=array(
		'Object'=>'base/class-object.php',
	);

	private static $_packages=array('core'=>CORE_PATH);

	public static function load(){

	}

	public static function autoload( $class_name ) {
		if(isset(self::$_core_classes[$class_name])){
			if(files_exists(self::$_core_classes[$class_name])){
				include plugin_dir_path(__FILE__).self::$_core_classes[$class_name];
			}else{
				throw new Exception("The file {$class_name} dosen't exist" , 1);
			}
				
		}
			
	}

	public static function add_package($name,$path){

	}

	public static function get_package($name){

	}

	public static function get_packages(){
		return self::$_packages;
	}
}
