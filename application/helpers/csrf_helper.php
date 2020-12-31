<?php
    function get_csrf(){
        $token = $this->security->get_csrf_token_name();
        $hash  = $this->security->get_csrf_hash(); 
        <input type="hidden" name="$token" value="$hash">
    }