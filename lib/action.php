<?
class Action {
    public static function index() {
        Response::render('index', $_REQUEST);
    }
}
?>