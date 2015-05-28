<?php
    namespace wp;
    
    class Request{
        public static function isEmptyAction(){
            return empty( $_REQUEST[ 'action' ] );
        }
        public static function isSetAction(){
            return isset( $_REQUEST[ 'action' ] );
        }
        public static function getAction(){
            return $_REQUEST[ 'action' ];
        }
    }