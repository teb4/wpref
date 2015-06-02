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
        public static function isSetApproved(){
            return isset( $_REQUEST[ 'approved' ] );
        }        
        public static function getApproved(){
            return $_REQUEST[ 'approved' ];
        }               
//////////        
        public static function isEmptyPostStatus(){
            return empty( $_REQUEST[ 'post_status' ] );
        }
        public static function isSetPostStatus(){
            return isset( $_REQUEST[ 'post_status' ] );
        }        
        public static function getPostStatus(){
            return $_REQUEST[ 'post_status' ];
        }
//////////  
        public static function isSetDeleted(){
            return isset( $_REQUEST[ 'deleted' ] );
        }        
        public static function getDeleted(){
            return $_REQUEST[ 'deleted' ];
        }
//////////
        public static function isEmptyPaged(){
            return empty( $_REQUEST[ 'paged' ] );
        }
        public static function isSetPaged(){
            return isset( $_REQUEST[ 'paged' ] );
        }        
        public static function getPaged(){
            return $_REQUEST[ 'paged' ];
        }        
//////////        
        public static function isEmptyOrder(){
            return empty( $_REQUEST[ 'order' ] );
        }
        public static function isSetOrder(){
            return isset( $_REQUEST[ 'order' ] );
        }        
        public static function getOrder(){
            return $_REQUEST[ 'order' ];
        }
        public static function setOrder( $value){
            $_REQUEST[ 'order' ] = $value;
        }
//////////
        public static function isEmptyOrderBy(){
            return empty( $_REQUEST[ 'orderby' ] );
        }
        public static function isSetOrderBy(){
            return isset( $_REQUEST[ 'orderby' ] );
        }        
        public static function getOrderBy(){
            return $_REQUEST[ 'orderby' ];
        }
        public static function setOrderBy( $value){
            $_REQUEST[ 'orderby' ] = $value;
        }        
//////////
        public static function isEmptyPlugin(){
            return empty( $_REQUEST[ 'plugin' ] );
        }
        public static function isSetPlugin(){
            return isset( $_REQUEST[ 'plugin' ] );
        }        
        public static function getPlugin(){
            return $_REQUEST[ 'plugin' ];
        }        
//////////
        public static function isSetAction2(){
            return isset( $_REQUEST[ 'action2' ] );
        }
        public static function getAction2(){
            return $_REQUEST[ 'action2' ];
        }        
//////////
        public static function getShort(){
            return $_REQUEST[ 'short' ];
        }        
//////////
        public static function getC(){
            return $_REQUEST[ 'c' ];
        }               
//////////
        public static function isSetNoRedir(){
            return isset( $_REQUEST[ 'noredir' ] );
        }        
//////////
        public static function isSet_WpNonce(){
            return isset( $_REQUEST[ '_wpnonce' ] );
        }                
        public static function get_WpNonce(){
            return $_REQUEST[ '_wpnonce' ];
        }                       
//////////
        public static function isSetAutocompleteType(){
            return isset( $_REQUEST[ 'autocomplete_type' ] );
        }                
        public static function getAutocompleteType(){
            return $_REQUEST[ 'autocomplete_type' ];
        }                       
//////////
        public static function isSetAutocompleteField(){
            return isset( $_REQUEST[ 'autocomplete_field' ] );
        }                
        public static function getAutocompleteField(){
            return $_REQUEST[ 'autocomplete_field' ];
        }                       
//////////        
        public static function isEmptyAttachments(){
            return empty( $_REQUEST[ 'attachments' ] );
        }        
        public static function getAttachments(){
            return $_REQUEST[ 'attachments' ];
        }
//////////        
        public static function isSetAttachmentFilter(){
            return isset( $_REQUEST[ 'attachment-filter' ] );
        }                
        public static function getAttachmentFilter(){
            return $_REQUEST[ 'attachment-filter' ];
        }                       
//////////
        public static function isEmptyAllPosts(){
            return empty( $_REQUEST[ 'all_posts' ] );
        }        
//////////        
        public static function isEmptyAuthor(){
            return empty( $_REQUEST[ 'author' ] );
        }        
//////////        
        public static function isSetBulkEdit(){
            return isset( $_REQUEST[ 'bulk_edit' ] );
        }
//////////        
        public static function isSetCommentStatus(){
            return isset( $_REQUEST[ 'comment_status' ] );
        }
        public static function getCommentStatus(){
            return $_REQUEST[ 'comment_status' ];
        }        
//////////        
        public static function isSetChecked(){
            return isset( $_REQUEST[ 'checked' ] );
        }
        public static function getChecked(){
            return $_REQUEST[ 'checked' ];
        }        
//////////        
        public static function isSetChanges(){
            return isset( $_REQUEST[ 'changes' ] );
        }
        public static function getChanges(){
            return $_REQUEST[ 'changes' ];
        }        
//////////        
        public static function getCompare(){
            return $_REQUEST[ 'compare' ];
        }        
//////////        
        public static function isEmptyCommentType(){
            return empty( $_REQUEST[ 'comment_type' ] );
        }        
        public static function getCommentType(){
            return $_REQUEST[ 'comment_type' ];
        }
//////////        
        public static function isSetChangeIt(){
            return isset( $_REQUEST[ 'changeit' ] );
        }
//////////        
        public static function isEmptyContext(){
            return empty( $_REQUEST[ 'context' ] );
        }        
        public static function getContext(){
            return $_REQUEST[ 'context' ];
        }
//////////        
        public static function isEmptyContent(){
            return empty( $_REQUEST[ 'content' ] );
        }        
        public static function getContent(){
            return $_REQUEST[ 'content' ];
        }
//////////        
        public static function isSetCustomizeLogin(){
            return isset( $_REQUEST[ 'customize-login' ] );
        }
//////////        
        public static function isSetDeleteAll(){
            return isset( $_REQUEST[ 'delete_all' ] );
        }
//////////        
        public static function isSetDeleteAll2(){
            return isset( $_REQUEST[ 'delete_all2' ] );
        }
//////////        
        public static function isSetDeleteComments(){
            return isset( $_REQUEST[ 'delete_comments' ] );
        }
        public static function getDeleteComments(){
            return $_REQUEST[ 'delete_comments' ];
        }        
//////////        
        public static function isSetDeleteTags(){
            return isset( $_REQUEST[ 'delete_tags' ] );
        }
        public static function getDeleteTags(){
            return $_REQUEST[ 'delete_tags' ];
        }        
//////////        
        public static function isEmptyDetached(){
            return empty( $_REQUEST[ 'detached' ] );
        }        
        public static function getDetached(){
            return $_REQUEST[ 'detached' ];
        }
//////////
        public static function isEmptyDo(){
            return empty( $_REQUEST[ 'do' ] );
        }        
        public static function getDo(){
            return $_REQUEST[ 'do' ];
        }
//////////
        public static function isEmptyDeleteOption(){
            return empty( $_REQUEST[ 'delete_option' ] );
        }        
        public static function getDeleteOption(){
            return $_REQUEST[ 'delete_option' ];
        }
//////////        
        public static function getDeleteMenus(){
            return $_REQUEST[ 'delete_menus' ];
        }
//////////        
        public static function get_WpNonce_custom_header_upload(){
            return $_REQUEST[ '_wpnonce-custom-header-upload' ];
        }
//////////        
        public static function isEmptyPagegenTimestamp(){
            return empty( $_REQUEST[ 'pagegen_timestamp' ] );
        }        
        public static function getPagegenTimestamp(){
            return $_REQUEST[ 'pagegen_timestamp' ];
        }
//////////        
        public static function isSetError(){
            return isset( $_REQUEST[ 'error' ] );
        }
        public static function getError(){
            return $_REQUEST[ 'error' ];
        }        
//////////        
        public static function isSetTrashed(){
            return isset( $_REQUEST[ 'trashed' ] );
        }
        public static function getTrashed(){
            return $_REQUEST[ 'trashed' ];
        }        
//////////        
        public static function isSetUntrashed(){
            return isset( $_REQUEST[ 'untrashed' ] );
        }
        public static function getUntrashed(){
            return $_REQUEST[ 'untrashed' ];
        }        
//////////        
        public static function isSetSpammed(){
            return isset( $_REQUEST[ 'spammed' ] );
        }
        public static function getSpammed(){
            return $_REQUEST[ 'spammed' ];
        }        
//////////        
        public static function isSetUnspammed(){
            return isset( $_REQUEST[ 'unspammed' ] );
        }
        public static function getUnspammed(){
            return $_REQUEST[ 'unspammed' ];
        }        
//////////        
        public static function isSetSame(){
            return isset( $_REQUEST[ 'same' ] );
        }
        public static function getSame(){
            return $_REQUEST[ 'same' ];
        }        
//////////        
        public static function isSetTagId(){
            return isset( $_REQUEST[ 'tag_ID' ] );
        }
        public static function getTagId(){
            return $_REQUEST[ 'tag_ID' ];
        }        
//////////        
        public static function isEmpty_Wp_http_referer(){
            return empty( $_REQUEST[ '_wp_http_referer' ] );
        }        
        public static function get_Wp_http_referer(){
            return $_REQUEST[ '_wp_http_referer' ];
        }
//////////        
        public static function isSetMessage(){
            return isset( $_REQUEST[ 'message' ] );
        }
        public static function getMessage(){
            return $_REQUEST[ 'message' ];
        }        
//////////        
        public static function isSetMedia(){
            return isset( $_REQUEST[ 'media' ] );
        }
        public static function getMedia(){
            return $_REQUEST[ 'media' ];
        }        
//////////        
        public static function isSetMenu(){
            return isset( $_REQUEST[ 'menu' ] );
        }
        public static function getMenu(){
            return $_REQUEST[ 'menu' ];
        }        
        public static function unsetMenu(){
            unset( $_REQUEST[ 'menu' ] );
            return !self::isSetMenu();
        }        
//////////        
        public static function isEmptyPost(){
            return empty( $_REQUEST[ 'post' ] );
        }        
        public static function getPost(){
            return $_REQUEST[ 'post' ];
        }
//////////        
        public static function isSetUpdated(){
            return isset( $_REQUEST[ 'updated' ] );
        }
        public static function getUpdated(){
            return $_REQUEST[ 'updated' ];
        }        
//////////        
        public static function isSetLocked(){
            return isset( $_REQUEST[ 'locked' ] );
        }
        public static function getLocked(){
            return $_REQUEST[ 'locked' ];
        }        
//////////        
        public static function isEmptyShowSticky(){
            return empty( $_REQUEST[ 'show_sticky' ] );
        }
//////////        
        public static function isSetSiteId(){
            return isset( $_REQUEST[ 'site_id' ] );
        }
        public static function getSiteId(){
            return $_REQUEST[ 'site_id' ];
        }        
//////////        
        public static function getTerm(){
            return $_REQUEST[ 'term' ];
        }        
//////////        
        public static function isEmptyP(){
            return empty( $_REQUEST[ 'p' ] );
        }        
        public static function isSetP(){
            return isset( $_REQUEST[ 'p' ] );
        }
        public static function getP(){
            return $_REQUEST[ 'p' ];
        }        
//////////        
        public static function isSetPostData(){
            return isset( $_REQUEST[ 'post_data' ] );
        }
        public static function getPostData(){
            return $_REQUEST[ 'post_data' ];
        }        
//////////        
        public static function isSetQuery(){
            return isset( $_REQUEST[ 'query' ] );
        }
        public static function getQuery(){
            return $_REQUEST[ 'query' ];
        }        
//////////        
        public static function isEmptyJson(){
            return empty( $_REQUEST[ 'json' ] );
        }
//////////        
        public static function getRequest(){
            return $_REQUEST[ 'request' ];
        }        
//////////        
        public static function isSetUserId(){
            return isset( $_REQUEST[ 'user_id' ] );
        }
        public static function getUserId(){
            return $_REQUEST[ 'user_id' ];
        }        
//////////
        public static function isSetNumber(){
            return isset( $_REQUEST[ 'number' ] );
        }
        public static function getNumber(){
            return $_REQUEST[ 'number' ];
        }        
//////////        
        public static function isSetStart(){
            return isset( $_REQUEST[ 'start' ] );
        }
        public static function getStart(){
            return $_REQUEST[ 'start' ];
        }        
//////////        
        public static function isSetOffset(){
            return isset( $_REQUEST[ 'offset' ] );
        }
        public static function getOffset(){
            return $_REQUEST[ 'offset' ];
        }        
//////////        
        public static function isSetRole(){
            return isset( $_REQUEST[ 'role' ] );
        }
        public static function getRole(){
            return $_REQUEST[ 'role' ];
        }        
//////////        
        public static function isSetTheme(){
            return isset( $_REQUEST[ 'theme' ] );
        }
        public static function getTheme(){
            return $_REQUEST[ 'theme' ];
        }        
//////////        
        public static function isEmptyNewRole(){
            return empty( $_REQUEST[ 'new_role' ] );
        }        
        public static function getNewRole(){
            return $_REQUEST[ 'new_role' ];
        }
//////////        
        public static function isSetMenuItem(){
            return isset( $_REQUEST[ 'menu-item' ] );
        }
        public static function getMenuItem(){
            return $_REQUEST[ 'menu-item' ];
        }        
//////////        
        public static function isEmptyFeatures(){
            return empty( $_REQUEST[ 'features' ] );
        }        
        public static function getFeatures(){
            return $_REQUEST[ 'features' ];
        }
//////////        
        public static function isEmptyHistory(){
            return empty( $_REQUEST[ 'history' ] );
        }        
        public static function getHistory(){
            return $_REQUEST[ 'history' ];
        }
//////////        
        public static function isEmptyPostMimeType(){
            return empty( $_REQUEST[ 'post_mime_type' ] );
        }        
        public static function getPostMimeType(){
            return $_REQUEST[ 'post_mime_type' ];
        }
//////////        
        public static function isEmptyLanguage(){
            return empty( $_REQUEST[ 'language' ] );
        }        
        public static function isSetLanguage(){
            return isset( $_REQUEST[ 'language' ] );
        }        
        public static function getLanguage(){
            return $_REQUEST[ 'language' ];
        }
//////////        
        public static function isSet_Ajax_nonce(){
            return isset( $_REQUEST[ '_ajax_nonce' ] );
        }        
        public static function get_Ajax_nonce(){
            return $_REQUEST[ '_ajax_nonce' ];
        }
//////////        
        public static function isEmpty_Wp_original_http_referer(){
            return empty( $_REQUEST[ '_wp_original_http_referer' ] );
        }        
        public static function get_Wp_original_http_referer(){
            return $_REQUEST[ '_wp_original_http_referer' ];
        }
//////////        
        public static function isEmptyQueryPostStatus(){
            return empty( $_REQUEST[ 'query' ][ 'post_status' ] );
        }        
        public static function getQueryPostStatus(){
            return $_REQUEST[ 'query' ][ 'post_status' ];
        }
//////////        
        public static function isEmptyFilterAction(){
            return empty( $_REQUEST[ 'filter_action' ] );
        }
        public static function isSetFilterAction(){
            return isset( $_REQUEST[ 'filter_action' ] );
        }        
//////////        
        public static function isEmptyNoPlaceholder(){
            return empty( $_REQUEST[ 'no_placeholder' ] );
        }
//////////        
        public static function isSetPluginStatus(){
            return isset( $_REQUEST[ 'plugin_status' ] );
        }        
        public static function getPluginStatus(){
            return $_REQUEST[ 'plugin_status' ];
        }
//////////        
        public static function isEmptyPostFormat(){
            return empty( $_REQUEST[ 'post_format' ] );
        }
        public static function getPostFormat(){
            return $_REQUEST[ 'post_format' ];
        }        
//////////        
        public static function isEmptyUser(){
            return empty( $_REQUEST[ 'user' ] );
        }
        public static function getUser(){
            return $_REQUEST[ 'user' ];
        }        
//////////        
        public static function isSetUseLocation(){
            return isset( $_REQUEST[ 'use-location' ] );
        }        
        public static function getUseLocation(){
            return $_REQUEST[ 'use-location' ];
        }
//////////        
        public static function isSetScrollto(){
            return isset( $_REQUEST[ 'scrollto' ] );
        }        
        public static function getScrollto(){
            return $_REQUEST[ 'scrollto' ];
        }
//////////        
        public static function isSetThemeStatus(){
            return isset( $_REQUEST[ 'theme_status' ] );
        }        
        public static function getThemeStatus(){
            return $_REQUEST[ 'theme_status' ];
        }
//////////        
        public static function isEmptyTarget(){
            return empty( $_REQUEST[ 'target' ] );
        }
        public static function getTarget(){
            return $_REQUEST[ 'target' ];
        }        
//////////        
        public static function isSetTab(){
            return isset( $_REQUEST[ 'tab' ] );
        }        
        public static function getTab(){
            return $_REQUEST[ 'tab' ];
        }
//////////        
        public static function isEmptyFwidth(){
            return empty( $_REQUEST[ 'fwidth' ] );
        }
        public static function getFwidth(){
            return $_REQUEST[ 'fwidth' ];
        }        
//////////        
        public static function isEmptyFheight(){
            return empty( $_REQUEST[ 'fheight' ] );
        }
        public static function getFheight(){
            return $_REQUEST[ 'fheight' ];
        }        
//////////        
        public static function isSetSection(){
            return isset( $_REQUEST[ 'section' ] );
        }        
        public static function getSection(){
            return $_REQUEST[ 'section' ];
        }
//////////        
        public static function isEmptyPostTitle(){
            return empty( $_REQUEST[ 'post_title' ] );
        }
        public static function getPostTitle(){
            return $_REQUEST[ 'post_title' ];
        }        
//////////        
        public static function isSetParentPostId(){
            return isset( $_REQUEST[ 'parent_post_id' ] );
        }        
        public static function getParentPostId(){
            return $_REQUEST[ 'parent_post_id' ];
        }
//////////        
        public static function isSetLinkcheck(){
            return isset( $_REQUEST[ 'linkcheck' ] );
        }        
        public static function getLinkcheck(){
            return $_REQUEST[ 'linkcheck' ];
        }
//////////        
        public static function isSetVerifyDelete(){
            return isset( $_REQUEST[ 'verify-delete' ] );
        }
//////////        
        public static function isSetNoAPI(){
            return isset( $_REQUEST[ 'noapi' ] );
        }
//////////        
        public static function isEmptyExcerpt(){
            return empty( $_REQUEST[ 'excerpt' ] );
        }
        public static function getExcerpt(){
            return $_REQUEST[ 'excerpt' ];
        }        
//////////        
        public static function getEmail(){
            return $_REQUEST[ 'email' ];
        }        
//////////        
        public static function getUserLogin(){
            return $_REQUEST[ 'user_login' ];
        }        
//////////         
        public static function isSetWp_http_referer(){
            return isset( $_REQUEST[ 'wp_http_referer' ] );
        }        
        public static function getWp_http_referer(){
            return $_REQUEST[ 'wp_http_referer' ];
        }
//////////
        public static function isSetWidgetId(){
            return isset( $_REQUEST[ 'widget-id' ] );
        }        
        public static function getWidgetId(){
            return $_REQUEST[ 'widget-id' ];
        }
//////////
        public static function isSetWpCustomize(){
            return isset( $_REQUEST[ 'wp_customize' ] );
        }        
        public static function getWpCustomize(){
            return $_REQUEST[ 'wp_customize' ];
        }
//////////        
        public static function isSetFoundPostId(){
            return isset( $_REQUEST[ 'found_post_id' ] );
        }        
        public static function getFoundPostId(){
            return $_REQUEST[ 'found_post_id' ];
        }
//////////        
        public static function isEmptySelectAll(){
            return empty( $_REQUEST[ 'selectall' ] );
        }
//////////        
        public static function getPostID_s(){
            return $_REQUEST[ 'post_ID' ];
        }        
/////////        
        public static function getReassignUser(){
            return $_REQUEST[ 'reassign_user' ];
        }        
/////////        
        public static function isSetGLOBALS(){
            return isset( $_REQUEST[ 'GLOBALS' ] );
        }
/////////        
        public static function isEmptyReAuth(){
            return empty( $_REQUEST[ 'reauth' ] );
        }
//////////               
        public static function isSetInterimLogin(){
            return isset( $_REQUEST[ 'interim-login' ] );
        }
/////////        
        public static function isSetZeroMenuState(){
            return isset( $_REQUEST[ 'zero-menu-state' ] );
        }
/////////        
        public static function isSetNavMenuLocations(){
            return isset( $_REQUEST[ 'nav-menu-locations' ] );
        }
/////////        
        public static function getMenuLocations(){
            return $_REQUEST[ 'menu-locations' ];
        }        
/////////        
        public static function isEmptyAttachmentsId( $id ){
            return empty( $_REQUEST[ 'attachments' ][ $id ] );
        }
        public static function getAttachmentsId( $id ){
            return $_REQUEST[ 'attachments' ][ $id ];
        }         
//////////        
        public static function isEmptyQuickSearchPosttype( $postTypeName ){
            return empty( $_REQUEST[ 'quick-search-posttype-' . $postTypeName ] );
        }
        public static function isSetQuickSearchPosttype( $postTypeName ){
            return isset( $_REQUEST[ 'quick-search-posttype-' . $postTypeName ] );
        }        
        public static function getQuickSearchPosttype( $postTypeName ){
            return $_REQUEST[ 'quick-search-posttype-' . $postTypeName ];
        }         
//////////        
        public static function isEmptyQuickSearchTaxonomy( $taxonomy_name ){
            return empty( $_REQUEST[ 'quick-search-taxonomy-' . $taxonomy_name ] );
        }
        public static function isSetQuickSearchTaxonomy( $taxonomy_name ){
            return isset( $_REQUEST[ 'quick-search-taxonomy-' . $taxonomy_name ] );
        }        
        public static function getQuickSearchTaxonomy( $taxonomy_name ){
            return $_REQUEST[ 'quick-search-taxonomy-' . $taxonomy_name ];
        }         
//////////        
        public static function isEmptyKey( $key ){
            return empty( $_REQUEST[ $key ] );
        }
        public static function isSetKey( $key ){
            return isset( $_REQUEST[ $key ] );
        }        
        public static function getKey( $key ){
            return $_REQUEST[ $key ];
        }
        public static function unsetKey( $key ){
            unset( $_REQUEST[ $key ] );
            return !self::isSetKey( $key );
        }        
        public static function setKey( $key, $value){
            $_REQUEST[ $key ] = $value;
        }        
//////////        
        public static function isEmptyArray(){
            return empty( $_REQUEST );
        }        
        public static function getArray(){
            return $_REQUEST;
        }        
//////////                
        public static function merge(){
            $_REQUEST = array_merge( $_GET, $_POST );
        }        
//////////                   
    }