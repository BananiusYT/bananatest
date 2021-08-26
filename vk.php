<?

if (!$_GET['code']) {
	exit('ОШИБКА АВТОРИЗАЦИИ!');
}

include 'config.php';

$token = json_decode(file_get_contents('https://oauth.vk.com/access_token?client_id='.ID.'&redirect_uri='.URL.'&client_secret='.SECRET.'&code='.$_GET['code']), true);

if (!$token) {
	exit('ОШИБКА АВТОРИЗАЦИИ!');
}


$data = json_decode(file_get_contents('https://api.vk.com/method/users.get?user_id='.$token['user_id'].'&access_token='.$token['access_token'].'&fields=uid,first_name,last_name,photo_big'), true);

if (!$data) {
	exit('ОШИБКА АВТОРИЗАЦИИ!');
}

$data = $data['response'][0];

echo '<pre>';
var_dump($data);
echo '</pre>';
?>