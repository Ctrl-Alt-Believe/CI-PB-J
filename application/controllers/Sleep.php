<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Sleep extends Application
{
    
    public function index()
    {
        $this->data['pagetitle'] = 'WIP - Sleep';
        $this->data['pagebody'] = 'sleep';
        $this->data['sleeps'] = $this->Sleeps->all();
        
        $this->render();
    }

}