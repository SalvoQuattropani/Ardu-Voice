<html>

<?

$htmlContentString = '<html><div class="miaclasse" style="miostile">TESTO DA ESTRARRE</div>'; // stringa contenente html
$pattern = "#\<div class=\"miaclasse\" style=\"miostile\"\>(.*?)\</div\>#si";
preg_match($pattern,$htmlContentString,$matches);
$result = isset($matches[0]) ? $matches[0] : '';

?>
</html>