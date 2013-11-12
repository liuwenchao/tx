<?
class Action {
    public static function index() {
        if (!Action::validate()) {
            $_GET['bars'] = 4;
        }
        Response::render('index', $_GET);
    }

    public static function api() {
        if (!Action::validate()) {
            echo "400 Bad Value for Parameter: bars";
            header('status: 400 Bad Request', true, 400);
            exit();
        }

        header('content-type: application/json; charset=utf-8');
        // enable cors if needed
        // header("access-control-allow-origin: *");
        
        $json = json_encode(array(
            "num_bars" => $_GET['bars']
        ));
        if ($callback = $_GET['callback']) {
            echo $callback . '(' . $json . ')';
        } else {
            echo $json;
        }
    }

    private static function validate() {
        $bars = $_GET['bars'];
        if (!(isset($bars) 
            && is_numeric($bars) 
            && $bars > 0
            // probly another number so browser won't crash.
            && $bars < PHP_INT_MAX
            )) {
            return false;
        }
        return true;
    }
}
?>