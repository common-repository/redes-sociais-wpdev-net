<?php 
/*
Plugin Name: Redes Sociais - WPDEV.NET
Description: Plugin desenvolvido para exibir as redes sociais.
Version: 1.0
Author: Tayse Rosa by WPDEV
Author URI: http://www.wpdev.net
Text Domain: redes-sociais
Licence: GPL2
*/

//Chamar o widget
require_once(dirname(__FILE__).'/widget/widget_redes_sociais.php');

//Padrão Singleton de desenvolvimento
class Redes_Sociais{
	private static $instance;

	public static function getInstance(){
		if (self::$instance == NULL) {
			self::$instance = new self();
		}

		return self::$instance;

	}

private function __construct(){
	add_action('widgets_init', array($this,'register_widgets'));
	}

public function register_widgets(){
	register_widget('widget_redes_sociais');
	}

}//Fim Classe Redes Sociais

Redes_Sociais::getInstance();