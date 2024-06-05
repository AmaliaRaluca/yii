<?php

class HomeController extends Controller
{
	
    public function actionMenu()
    {

    //    echo " this is menu";
    //     $this->layout = 'menu';

	// 	$emails = ['test@gmail.com','johndoe@gmail.com'];

        $this->render('//layouts/home/menu');
    }

}