<?php

class BaseController extends Controller {
    
    protected $tipos_recursos;


    public function __construct () {
        $this->tipos_recursos = TipoRecurso::all()->toArray();
    }

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
            if ( ! is_null($this->layout))
            {
                    $this->layout = View::make($this->layout);
            }
    }

}
