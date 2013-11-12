<?
class Action {
    public static function index() {
        Response::render('index', $_GET);
    }

    public static function api() {
        header('content-type: application/json; charset=utf-8');
        header("access-control-allow-origin: *");
        
        $data->num_bars=$_GET['bars'];
        $json = json_encode($data);
        if ($callback = $_GET['callback']) {
            echo $callback . '(' . $json . ')';
        } else {
            echo $json;
        }
    }
}
?>