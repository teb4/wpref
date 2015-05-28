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
        public static function isSetPostType(){
            return isset( $_REQUEST[ 'post_type' ] );
        }        
        public static function getPostType(){
            return $_REQUEST[ 'post_type' ];
        }        
    }