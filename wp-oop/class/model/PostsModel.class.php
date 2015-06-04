<?php
    namespace wp;
    
    class PostsModel{
        public static function getIdsByTypeAndStatus( $wpdb, $post_type, $post_status ){
            return $wpdb->get_col( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_type=%s AND post_status = %s", $post_type, $post_status ) );
        }
        public static function getAuthorList( $wpdb ){
            return $wpdb->get_col( "SELECT DISTINCT post_author FROM {$wpdb->posts} WHERE post_type = 'post'" );
        }
        public static function getAuthorList_2( $wpdb ){
            $wpdb->get_col( "SELECT DISTINCT post_author FROM {$wpdb->posts} WHERE post_type = 'page'" );
        }
        public static function getTotalOrphans( $wpdb ){
            return $wpdb->get_var( "SELECT COUNT( * ) FROM $wpdb->posts WHERE post_type = 'attachment' AND post_status != 'trash' AND post_parent < 1" );
        }
        public static function getStickyPostsCount( $wpdb, $sticky_posts, $post_type ){
            return $wpdb->get_var( $wpdb->prepare( "SELECT COUNT( 1 ) FROM $wpdb->posts WHERE post_type = %s AND post_status NOT IN ('trash', 'auto-draft') AND ID IN ($sticky_posts)", $post_type ) );
        }
        public static function getUserPostsCount( $wpdb, $exclude_states, $post_type, $current_user_id ){
            return $wpdb->get_var( $wpdb->prepare( "
                    SELECT COUNT( 1 ) FROM $wpdb->posts
                    WHERE post_type = %s AND post_status NOT IN ( '" . implode( "','", $exclude_states ) . "' )
                    AND post_author = %d
            ", $post_type, $current_user_id ) );            
        }
        public static function getOtherUnpubs( $wpdb, $type_sql, $editable, $dir, $user_id ){
            return $wpdb->get_results( $wpdb->prepare("SELECT ID, post_title, post_author FROM $wpdb->posts WHERE post_type = 'post' AND $type_sql AND post_author IN ($editable) AND post_author != %d ORDER BY post_modified $dir", $user_id) );
        }
        public static function getAttachmentsCount( $wpdb, $post_id ){
            return intval( $wpdb->get_var( $wpdb->prepare( "SELECT count(*) FROM $wpdb->posts WHERE post_type = 'attachment' AND post_status != 'trash' AND post_parent = %d", $post_id ) ) );
        }
        public static function getAttachments( $wpdb ){
            return $wpdb->get_results( "SELECT ID, guid FROM {$wpdb->posts} WHERE post_parent = '0' AND post_type = 'attachment'" );
        }
        public static function getAttachmentIdByTitle( $wpdb, $name ){
            return $wpdb->get_row("
                    SELECT ID
                    FROM {$wpdb->posts}
                    WHERE post_title = '{$name}'
                            AND post_type = 'attachment'
            ");            
        }

        public static function getArc( $wpdb ){
            $arc_query = "SELECT DISTINCT YEAR(post_date) AS yyear, MONTH(post_date) AS mmonth FROM $wpdb->posts WHERE post_type = 'attachment' ORDER BY post_date DESC";
            return $wpdb->get_results( $arc_query );            
        }
        public static function attach( $wpdb, $ids_string, $parent_id ){
            return $wpdb->query( $wpdb->prepare( "UPDATE $wpdb->posts SET post_parent = %d WHERE post_type = 'attachment' AND ID IN ( $ids_string )", $parent_id ) );
        }
        public static function detach( $wpdb, $ids_string ){
            return $wpdb->query( "UPDATE $wpdb->posts SET post_parent = 0 WHERE post_type = 'attachment' AND ID IN ( $ids_string )" );
        }
        public static function getIdListByAuthor( $wpdb, $id ){
            return $wpdb->get_col( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_author = %d", $id ) );
        }
        public static function getIdListByAuthor_2( $wpdb, $id ){
            return $wpdb->get_col( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_author = %d", $id ) );
        }
        public static function getIdByTitle( $wpdb, $title ){
            $sql = $wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE post_title RLIKE %s", $title );
            return $wpdb->get_var( $sql );
        }
        public static function getPing( $wpdb ){
            return $wpdb->get_row("SELECT ID, post_content, meta_id FROM {$wpdb->posts}, {$wpdb->postmeta} WHERE {$wpdb->posts}.ID = {$wpdb->postmeta}.post_id AND {$wpdb->postmeta}.meta_key = '_pingme' LIMIT 1");
        }
        public static function getEnclosure( $wpdb ){
            $wpdb->get_row("SELECT ID, post_content, meta_id FROM {$wpdb->posts}, {$wpdb->postmeta} WHERE {$wpdb->posts}.ID = {$wpdb->postmeta}.post_id AND {$wpdb->postmeta}.meta_key = '_encloseme' LIMIT 1");
        }
        public static function setPingById( $wpdb, $tb_ping, $post_id ){
            $wpdb->query( $wpdb->prepare("UPDATE $wpdb->posts SET to_ping = TRIM(REPLACE(to_ping, %s, '')) WHERE ID = %d", $tb_ping, $post_id) );
        }
        public static function setPingedById( $wpdb, $trackback_url, $ID ){
            $wpdb->query( $wpdb->prepare("UPDATE $wpdb->posts SET pinged = CONCAT(pinged, '\n', %s) WHERE ID = %d", $trackback_url, $ID) );
        }
        public static function setToPingById( $wpdb, $trackback_url, $ID ){
            return $wpdb->query( $wpdb->prepare("UPDATE $wpdb->posts SET to_ping = TRIM(REPLACE(to_ping, %s, '')) WHERE ID = %d", $trackback_url, $ID) );
        }

        public static function getIdListByAuthorAndType( $wpdb, $post_types_to_delete, $id ){
            return $wpdb->get_col( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_author = %d AND post_type IN ('$post_types_to_delete')", $id ) );
        }

        public static function getOrphanedDraftMenuItems( $wpdb, $delete_timestamp ){
            $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts AS p LEFT JOIN $wpdb->postmeta AS m ON p.ID = m.post_id WHERE post_type = 'nav_menu_item' AND post_status = 'draft' AND meta_key = '_menu_item_orphaned' AND meta_value < '%d'", $delete_timestamp ) );
        }
        public static function getPageList( $wpdb ){
            return $wpdb->get_results("SELECT ID, post_parent FROM $wpdb->posts WHERE post_type = 'page'");
        }
        public static function getAllAvailableMIMETypesForPostType( $wpdb, $type ){
            return $wpdb->get_col($wpdb->prepare("SELECT DISTINCT post_mime_type FROM $wpdb->posts WHERE post_type = %s", $type));
        }
        public static function getItemList( $wpdb, $parent ){
            return $wpdb->get_results( $wpdb->prepare("SELECT ID, post_parent, post_title FROM $wpdb->posts WHERE post_parent = %d AND post_type = 'page' ORDER BY menu_order", $parent) );
        }
        public static function getList( $wpdb ){
            return $wpdb->get_results("SELECT ID, post_title, post_name FROM $wpdb->posts WHERE post_name = ''");
        }
        public static function getList_2( $wpdb ){
            return $wpdb->get_results("SELECT ID, post_title, post_content, post_excerpt, guid, post_date, post_name, post_status, post_author FROM $wpdb->posts");
        }
        public static function getList_3( $wpdb ){
            return $wpdb->get_results("SELECT ID, post_status FROM $wpdb->posts");
        }
        public static function setStatusAndType( $wpdb, $status, $type, $post ){
            $wpdb->query( $wpdb->prepare("UPDATE $wpdb->posts SET post_status = %s, post_type = %s WHERE ID = %d", $status, $type, $post->ID) );
        }
        public static function setFuturePostsStatus( $wpdb, $now ){
            $wpdb->query ("UPDATE $wpdb->posts SET post_status = 'future' WHERE post_status = 'publish' AND post_date_gmt > '$now'");
        }
        public static function getFutureList( $wpdb ){
            return $wpdb->get_results("SELECT ID, post_date FROM $wpdb->posts WHERE post_status ='future'");
        }
        public static function correctDate( $wpdb ){
            $wpdb->query( "UPDATE $wpdb->posts SET post_date = post_modified WHERE post_date = '0000-00-00 00:00:00'" );
        }

        public static function getObjectList( $wpdb ){
            return $wpdb->get_results("SELECT ID, post_type FROM $wpdb->posts WHERE post_status = 'object'");
        }

        public static function setName( $wpdb, $newtitle, $post ){
            $wpdb->query( $wpdb->prepare("UPDATE $wpdb->posts SET post_name = %s WHERE ID = %d", $newtitle, $post->ID) );
        }
        public static function getMaxDateGMT( $wpdb ){
            return $wpdb->get_var("SELECT MAX(post_date_gmt) FROM $wpdb->posts");
        }
        public static function addOrSubtractTimeToDatesToGetGmtDates( $wpdb, $add_hours, $add_minutes ){
            $wpdb->query("UPDATE $wpdb->posts SET post_date_gmt = DATE_ADD(post_date, INTERVAL '$add_hours:$add_minutes' HOUR_MINUTE)");
            $wpdb->query("UPDATE $wpdb->posts SET post_modified = post_date");
            $wpdb->query("UPDATE $wpdb->posts SET post_modified_gmt = DATE_ADD(post_modified, INTERVAL '$add_hours:$add_minutes' HOUR_MINUTE) WHERE post_modified != '0000-00-00 00:00:00'");            
        }
        public static function changeIndex( $wpdb ){
            $wpdb->query( "ALTER TABLE $wpdb->posts DROP INDEX post_name, ADD INDEX post_name(post_name(191))" );
        }
        public static function isExistsMonthAge( $wpdb ){
            return $wpdb->get_row( "SELECT ID FROM $wpdb->posts WHERE post_date < DATE_SUB(NOW(), INTERVAL 1 MONTH) AND post_status = 'publish'" );
        }
        public static function getAttachmentInTrashIdList( $wpdb ){
            return $wpdb->get_col( "SELECT ID FROM $wpdb->posts WHERE post_type='attachment' AND post_status = 'trash'" );
        }
        public static function getAuthorList_3( $wpdb ){
            return (array) $wpdb->get_col("SELECT DISTINCT post_author FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' LIMIT 2");
        }
        public static function getTypeAndParentById( $wpdb, $id ){
            return $wpdb->get_results( $wpdb->prepare("SELECT post_type, post_parent FROM $wpdb->posts WHERE ID = %d", $id) );
        }
        public static function getPublishIdByAuthor( $wpdb, $author ){
            return $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE $wpdb->posts.post_author = %d AND $wpdb->posts.post_status = 'publish' LIMIT 1", $author->ID ) );
        }
        public static function getPageAndTitleIdList( $wpdb ){
            return $wpdb->get_results("
                SELECT ID page_id,
                        post_title page_title,
                        post_parent page_parent_id,
                        post_date_gmt,
                        post_date,
                        post_status
                FROM {$wpdb->posts}
                WHERE post_type = 'page'
                ORDER BY ID
            ");
        }
    }