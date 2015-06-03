<?php
    namespace wp;
    
    class CommentsModel{
        public static function getCommentIds( $wpdb, $comment_status, $delete_time ){
            return $wpdb->get_col( $wpdb->prepare( "SELECT comment_ID FROM $wpdb->comments WHERE comment_approved = %s AND %s > comment_date_gmt", $comment_status, $delete_time ) );
        }
        public static function getIdsByPostId( $wpdb, $postid ){
            return $wpdb->get_col( $wpdb->prepare( "SELECT comment_ID FROM $wpdb->comments WHERE comment_post_ID = %d", $postid ));
        }
        public static function getIdsByPostId_2( $wpdb, $post_id ){
            return $wpdb->get_col( $wpdb->prepare( "SELECT comment_ID FROM $wpdb->comments WHERE comment_post_ID = %d", $post_id ));
        }

        public static function getApprovedByPostId( $wpdb, $post_id ){
            return $wpdb->get_results( $wpdb->prepare("SELECT comment_ID, comment_approved FROM $wpdb->comments WHERE comment_post_ID = %d", $post_id) );
        }

        public static function getAllCommentsInChunks( $wpdb, $offset, $limit ){
            $sql = $wpdb->prepare( "SELECT comment_ID, comment_agent FROM $wpdb->comments LIMIT %d,%d", $offset, $limit );
            return $wpdb->get_results( $sql );            
        }
        public static function isCommentExists( $wpdb, $comment_author, $comment_date ){
            return $wpdb->get_var( $wpdb->prepare("SELECT comment_post_ID FROM $wpdb->comments
                            WHERE comment_author = %s AND comment_date = %s", $comment_author, $comment_date) );            
        }
        public static function isApproved( $wpdb, $author, $email ){
            return $wpdb->get_var("SELECT comment_approved FROM $wpdb->comments WHERE comment_author = '$author' AND comment_author_email = '$email' and comment_approved = '1' LIMIT 1");
        }

        public static function getPendingCommentsNum( $wpdb, $post_id_in, $ARRAY_A ){
            return $wpdb->get_results( "SELECT comment_post_ID, COUNT(comment_ID) as num_comments FROM $wpdb->comments WHERE comment_post_ID IN ( $post_id_in ) AND comment_approved = '0' GROUP BY comment_post_ID", $ARRAY_A );
        }
        public static function getComments( $wpdb, $post ){
            return $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $wpdb->comments WHERE comment_post_ID = %d AND comment_approved <> 'spam'", $post->ID ) );            
        }
        public static function getComments_2( $wpdb ){
            return $wpdb->get_results("SELECT comment_ID, comment_author, comment_content FROM $wpdb->comments");            
        }
        public static function getComments_3( $wpdb ){
            return $wpdb->get_results( "SELECT comment_post_ID, COUNT(*) as c FROM $wpdb->comments WHERE comment_approved = '1' GROUP BY comment_post_ID" );
        }
        public static function getComments_4( $wpdb, $allowed_length ){
		return $wpdb->get_results(
			"SELECT `comment_ID` FROM `{$wpdb->comments}`
				WHERE `comment_date_gmt` > '2015-04-26'
				AND LENGTH( `comment_content` ) >= {$allowed_length}
				AND ( `comment_content` LIKE '%<%' OR `comment_content` LIKE '%>%' )"
		);            
        }
        public static function getModeration( $wpdb, $paginate, $ARRAY_A ){
            return $wpdb->get_results( "SELECT * FROM {$wpdb->comments} WHERE comment_approved = '0'{$paginate}", $ARRAY_A );
        }
        public static function getCountApprovedByUserId( $wpdb, $user_id ){
            return (int) $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM {$wpdb->comments} WHERE user_id = %d AND comment_approved = 1", $user_id ) );
        }
        public static function getCountApprovedByAuthorAndEmailAndUrl( $wpdb, $comment_author_email, $comment_author, $comment_author_url ){
            return (int) $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM {$wpdb->comments} WHERE comment_author_email = %s AND comment_author = %s AND comment_author_url = %s AND comment_approved = 1", $comment_author_email, $comment_author, $comment_author_url ) );
        }
        public static function getSpamCount( $wpdb ){
            return (int) $wpdb->get_var("SELECT COUNT(comment_ID) FROM {$wpdb->comments} WHERE comment_approved = 'spam'");
        }
        public static function getSpamForDateInterval( $wpdb, $delete_interval, $delete_limit ){
            return $wpdb->get_col( $wpdb->prepare( "SELECT comment_id FROM {$wpdb->comments} WHERE DATE_SUB(NOW(), INTERVAL %d DAY) > comment_date_gmt AND comment_approved = 'spam' LIMIT %d", $delete_interval, $delete_limit ) );
        }
        public static function getSpamCountByCommentType( $wpdb, $type ){
            return (int) $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(comment_ID) FROM {$wpdb->comments} WHERE comment_approved = 'spam' AND comment_type = %s", $type ) );
        }
        public static function getById( $wpdb, $id, $ARRAY_A ){
            return $wpdb->get_row( $wpdb->prepare( "SELECT * FROM {$wpdb->comments} WHERE comment_ID = %d", $id ), $ARRAY_A );
        }
        public static function getById_2( $wpdb, $comment_id ){
            return $wpdb->get_row( $wpdb->prepare( "SELECT * FROM {$wpdb->comments} WHERE comment_ID = %d", $comment_id ) );
        }
        public static function getById_3( $wpdb, $comment_id ){
            return $wpdb->get_row( $wpdb->prepare( "SELECT * FROM {$wpdb->comments} WHERE comment_ID = %d", $comment_id ) );
        }
        public static function getById_4( $wpdb, $comment ){
            return $wpdb->get_row($wpdb->prepare("SELECT * FROM $wpdb->comments WHERE comment_ID = %d LIMIT 1", $comment));
        }
        public static function getByPostId( $wpdb, $post_ID ){
            return $wpdb->get_results( $wpdb->prepare("SELECT comment_author_url, comment_content, comment_author_IP, comment_type FROM $wpdb->comments WHERE comment_post_ID = %d", $post_ID) );
        }
        public static function getByPostId_2( $wpdb, $post_ID ){
            return $wpdb->get_results( $wpdb->prepare("SELECT comment_author_url, comment_content, comment_author_IP, comment_type FROM $wpdb->comments WHERE comment_post_ID = %d", $post_ID) );
        }

        public static function getByPostIdAndAuthorUrl( $wpdb, $post_ID, $pagelinkedfrom ){
            return $wpdb->get_results( $wpdb->prepare("SELECT * FROM $wpdb->comments WHERE comment_post_ID = %d AND comment_author_url = %s", $post_ID, $pagelinkedfrom) );
        }
        
        public static function getLastModifiedDateByGmtTimezone( $wpdb ){
            return $wpdb->get_var("SELECT comment_date_gmt FROM $wpdb->comments WHERE comment_approved = '1' ORDER BY comment_date_gmt DESC LIMIT 1");
        }
        public static function getLastModifiedDateByBlogTimezone( $wpdb ){
            return $wpdb->get_var("SELECT comment_date FROM $wpdb->comments WHERE comment_approved = '1' ORDER BY comment_date_gmt DESC LIMIT 1");
        }
        public static function getLastModifiedDateByServerTimezone( $wpdb, $add_seconds_server ){
            return $wpdb->get_var($wpdb->prepare("SELECT DATE_ADD(comment_date_gmt, INTERVAL %s SECOND) FROM $wpdb->comments WHERE comment_approved = '1' ORDER BY comment_date_gmt DESC LIMIT 1", $add_seconds_server));
        }
        public static function getLastTime( $wpdb, $hour_ago, $ip, $email ){
            return $wpdb->get_var( $wpdb->prepare( "SELECT `comment_date_gmt` FROM `$wpdb->comments` WHERE `comment_date_gmt` >= %s AND ( `comment_author_IP` = %s OR `comment_author_email` = %s ) ORDER BY `comment_date_gmt` DESC LIMIT 1", $hour_ago, $ip, $email ) );
        }
        public static function getCountCommentsOlderThenThisOne( $wpdb, $comtypewhere, $comment ){
            return $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(comment_ID) FROM $wpdb->comments WHERE comment_post_ID = %d AND comment_parent = 0 AND comment_approved = '1' AND comment_date_gmt < '%s'" . $comtypewhere, $comment->comment_post_ID, $comment->comment_date_gmt ) );
        }
        public static function getCountCommentsByPostId( $wpdb, $post_id ){
            return (int) $wpdb->get_var( $wpdb->prepare("SELECT COUNT(*) FROM $wpdb->comments WHERE comment_post_ID = %d AND comment_approved = '1'", $post_id) );
        }
        public static function getCountWaiting( $wpdb ){
            return $wpdb->get_var("SELECT count(comment_ID) FROM $wpdb->comments WHERE comment_approved = '0'");
        }

        public static function getCountByApproveType( $wpdb, $post_id, $ARRAY_A ){
            $where = '';
            if ( $post_id > 0 ){
                    $where = $wpdb->prepare( "WHERE comment_post_ID = %d", $post_id );
            }
            return $wpdb->get_results( "SELECT comment_approved, COUNT( * ) AS num_comments FROM {$wpdb->comments} {$where} GROUP BY comment_approved", $ARRAY_A );            
        }
        public static function getChildren( $wpdb, $comment_id ){
            return $wpdb->get_col( $wpdb->prepare("SELECT comment_ID FROM $wpdb->comments WHERE comment_parent = %d", $comment_id) );
        }
        public static function getByPostIdAndAuthorUrl_2( $wpdb, $comment_post_ID, $comment_author_url ){
            return $wpdb->get_results( $wpdb->prepare("SELECT * FROM $wpdb->comments WHERE comment_post_ID = %d AND comment_author_url = %s", $comment_post_ID, $comment_author_url) );
        }

        public static function addFirstComment( $wpdb, $first_comment_author, $first_comment_url, $now, $now_gmt, $first_comment ){
            $wpdb->insert( $wpdb->comments, array(
                'comment_post_ID' => 1,
                'comment_author' => $first_comment_author,
                'comment_author_email' => '',
                'comment_author_url' => $first_comment_url,
                'comment_date' => $now,
                'comment_date_gmt' => $now_gmt,
                'comment_content' => $first_comment
            ));            
        }
        public static function addTimeToDates( $wpdb, $add_hours, $add_minutes ){
            $wpdb->query("UPDATE $wpdb->comments SET comment_date_gmt = DATE_ADD(comment_date, INTERVAL '$add_hours:$add_minutes' HOUR_MINUTE)");            
        }
        public static function updateById( $wpdb, $list, $comment ){
            $wpdb->update($wpdb->comments, $list, array('comment_ID' => $comment->comment_ID) );
        }
        public static function updateToUseCommentType( $wpdb ){
            $wpdb->query("UPDATE $wpdb->comments SET comment_type='trackback', comment_content = REPLACE(comment_content, '<trackback />', '') WHERE comment_content LIKE '<trackback />%'");
            $wpdb->query("UPDATE $wpdb->comments SET comment_type='pingback', comment_content = REPLACE(comment_content, '<pingback />', '') WHERE comment_content LIKE '<pingback />%'");            
        }
        public static function setStatusByIds( $wpdb, $status, $comments_in ){
            $wpdb->query( "UPDATE $wpdb->comments SET comment_approved = '$status' WHERE comment_ID IN ('" . $comments_in . "')" );
        }

        public static function dropIndexCommentApproved( $wpdb ){
            $wpdb->query("ALTER TABLE $wpdb->comments DROP INDEX comment_approved");
        }
        public static function deleteByIdList( $wpdb, $comma_comment_ids ){
            $wpdb->query("DELETE FROM {$wpdb->comments} WHERE comment_id IN ( $comma_comment_ids )");
        }
    }