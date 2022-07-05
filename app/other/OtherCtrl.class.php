<?php
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';

class OtherCtrl{
    
    	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Przykład 06');
		$smarty->assign('page_description','Aplikacja z jednym "punktem wejścia". Model MVC, w którym jeden główny kontroler używa różnych obiektów kontrolerów w zależności od wybranej akcji - przekazanej parametrem.');
		$smarty->assign('page_header','Kontroler główny');
		
		$smarty->display($conf->root_path.'/app/other/OtherView.tpl');
	}
    
    
}

