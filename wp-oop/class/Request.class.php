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
        public static function getTaxonomy(){
            return $_REQUEST[ 'taxonomy' ];
        }        
        public static function isSetTaxonomy(){
            return isset( $_REQUEST[ 'taxonomy' ] );
        }
        
        public static function isEmptyAuthCookie(){
            return empty( $_REQUEST[ 'auth_cookie' ] );
        }        
        public static function getAuthCookie(){
            return $_REQUEST[ 'auth_cookie' ];
        }        
        
        public static function isSetId(){
            return isset( $_REQUEST[ 'id' ] );
        }        
        public static function getId(){
            return $_REQUEST[ 'id' ];
        }        
    }