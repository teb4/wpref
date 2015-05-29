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
        
        public static function isEmptyLoggedInCookie(){
            return empty( $_REQUEST[ 'logged_in_cookie' ] );
        }        
        public static function getLoggedInCookie(){
            return $_REQUEST[ 'logged_in_cookie' ];
        }        
        
        public static function isSetAttachmentId(){
            return isset( $_REQUEST[ 'attachment_id' ] );
        }        
        public static function getAttachmentId(){
            return $_REQUEST[ 'attachment_id' ];
        }    
        
        public static function getFetch(){
            return $_REQUEST[ 'fetch' ];
        }            
/////////        
        public static function isEmptyPostId(){
            return empty( $_REQUEST[ 'post_id' ] );
        }        
        public static function isSetPostId(){
            return isset( $_REQUEST[ 'post_id' ] );
        }        
        public static function getPostId(){
            return $_REQUEST[ 'post_id' ];
        }        
/////////        
        public static function isSetType(){
            return isset( $_REQUEST[ 'type' ] );
        }
        public static function getType(){
            return $_REQUEST[ 'type' ];
        }
        public static function setType( $value){
            $_REQUEST[ 'type' ] = $value;
        }        
/////////        
        public static function isSetIds(){
            return isset( $_REQUEST[ 'ids' ] );
        }
        public static function getIds(){
            return $_REQUEST[ 'ids' ];
        }        
/////////        
        public static function isEmptyRedirectTo(){
            return empty( $_REQUEST[ 'redirect_to' ] );
        }        
        public static function isSetRedirectTo(){
            return isset( $_REQUEST[ 'redirect_to' ] );
        }
        public static function getRedirectTo(){
            return $_REQUEST[ 'redirect_to' ];
        }        
/////////        
        public static function isEmptyUsers(){
            return empty( $_REQUEST[ 'users' ] );
        }
        public static function isSetUsers(){
            return isset( $_REQUEST[ 'users' ] );
        }        
        public static function getUsers(){
            return $_REQUEST[ 'users' ];
        }        
//////////        
        public static function isEmptyMode(){
            return empty( $_REQUEST[ 'mode' ] );
        }
        public static function isSetMode(){
            return isset( $_REQUEST[ 'mode' ] );
        }        
        public static function getMode(){
            return $_REQUEST[ 'mode' ];
        }
//////////        
        public static function isEmptyS(){
            return empty( $_REQUEST[ 's' ] );
        }
        public static function isSetS(){
            return isset( $_REQUEST[ 's' ] );
        }        
        public static function getS(){
            return $_REQUEST[ 's' ];
        }
        public static function setS( $value){
            $_REQUEST[ 's' ] = $value;
        }        
//////////               
    }