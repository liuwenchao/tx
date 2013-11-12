<?
require_once 'request.php';
require_once 'action.php';
require_once 'response.php';

class TX {
    public static function run() {
        $action = Request::get_param('url', 'index');
        // remove slash if exists
        $action = rtrim($action, '/');
        Action::$action();
    }
}
?>