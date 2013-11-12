<?
class Request {
    public static function get_param($param, $default = null) {
        return isset($_REQUEST[$param]) ? $_REQUEST[$param] : $default;
    }
}
?>