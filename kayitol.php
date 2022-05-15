$ip = $_SERVER['REMOTE_ADDR'];
if ( !file_exists("ipkayit.txt")) {
touch("ipkayit.txt");
$file = @fopen("ipkayit.txt", "+r");
@fclose($file);
header( '*******: 1; url=/' );
} else {
date_default_timezone_set('Europe/Istanbul');
$date_time = date("Y-m-d H:i:s");
$file = @fopen("ipkayit.txt", "a");
$text = "-----------". "\r\n" . "Tarih : " . $date_time . "\r\n" . "IP Adresi :" . "\r\n" . $ip . "\r\n". "-----------" . "\r\n";
@fwrite($file, $text);
@fclose($file);
}
?>
