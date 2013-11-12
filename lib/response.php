<?
class Response {
    public static function render($template, $data = array()) {
        extract($data);
        require_once 'views/' . $template . '.php';
    }
}
?>