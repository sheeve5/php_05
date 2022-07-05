<?php
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';

class OtherCtrl{
    
    	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Przykład 05');
		$smarty->assign('page_description','Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
		$smarty->assign('page_header','Obiekty w PHP');
		
		$smarty->display($conf->root_path.'/app/OtherView.tpl');
	}
    
    
}

