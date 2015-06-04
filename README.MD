Experimental refactoring Wordpress 4.2.2

1. Create namespace wp.
2. Create wp-oop folder.
3. Move all ref for $_REQUEST[] to class Request ( wp-oop/class/Request.class.php ).
4. Move sql statements for "$wpdb->comments" to class CommentsModel ( wp-oop/class/model/CommentsModel.class.php ).
5. Move sql statements for "$wpdb->posts" to class PostsModel.

Сейчас: переношу $wpdb->posts SQL-выражения из general-template.php