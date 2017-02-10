<?php

class Budget {
    private $_db,
            $_data,
            $_sessionName,
            $_cookieName,
            $isLoggedIn;

    public function __construct($user = null) {
        $this->_db = DB::getInstance();
        $this->_sessionName = Config::get('sessions/session_name');
        $this->_cookieName = Config::get('remember/cookie_name');

       
    }

    public function add($fields = array()) {
        if(!$this->_db->insert('budget', $fields)) {
            throw new Exception('Sorry, there was a problem adding;');
        }
    }

   
}