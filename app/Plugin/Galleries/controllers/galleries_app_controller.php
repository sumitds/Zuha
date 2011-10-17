<?php
App::import(array(
	'type' => 'File', 
	'name' => 'Galleries.GalleriesConfig', 
	'file' =>  '..' . DS . 'plugins'  . DS  . 'galleries'  . DS  . 'config'. DS .'core.php'
));

class GalleriesAppController extends AppController {
	
	function beforeFilter() {
		parent::beforeFilter();		
		$Config = GalleriesConfig::getInstance();
		#sets display values
		if (!empty($Config->settings[$this->params['controller'].Inflector::camelize($this->params['action']).'View'])) {
			$this->set('settings', $Config->settings[$this->params['controller'].Inflector::camelize($this->params['action']).'View']);
		}
		if (!empty($Config->settings[$this->params['controller'].Inflector::camelize($this->params['action']).'Controller'])) {
			$this->settings = $Config->settings[$this->params['controller'].Inflector::camelize($this->params['action']).'Controller'];
		}
	}
	
	function beforeSave() {
		debug($this->data);
		break;
		return true;
	}
	
}
?>