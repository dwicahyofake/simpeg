<?php
defined('BASEPATH') or exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ref_pejabat
 *
 * @author Zanuar
 */
class Ref_pejabat extends MY_Model{
    //put your code here
    public function __construct() {
        $this->_set_table('ref_pejabat');
        $this->_set_primary_key('pejabat_id');
        parent::__construct();
    }
}
