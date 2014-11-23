<?php

class BlogController extends BaseController {

    public function listar()
    {
        $posts = Post::all()->toArray();        
        
        return View::make('blog', array(
            'tipos_recursos'    =>  $this->tipos_recursos,
            'posts'             =>  $posts
        ));
    }
}