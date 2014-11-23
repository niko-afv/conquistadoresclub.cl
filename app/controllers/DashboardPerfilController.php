<?php

class DashboardPerfilController extends BaseController {
        
        public function showPerfil()
	{
            return View::make('backend/perfil');
	}
}
