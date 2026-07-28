<?php
$fruits = ['りんご', 'バナナ', 'みかん'];


$fruits[1] = 'ぶどう';

print_r($fruits);


$user = ['name' => '山田', 'age' => 30];

$user['age'] = 31;

echo $user['age'];


$fruits = ['りんご', 'バナナ', 'みかん'];

unset($fruits[1]);

print_r($fruits);


$fruits = array_values($fruits);

print_r($fruits);


$user = ['name' => '山田', 'age' => 30];
var_dump($user);




$fruits = ['りんご', 'バナナ', 'みかん',];
echo count($fruits);



$fruits = ['りんご', 'バナナ', 'みかん'];

if (in_array('バナナ', $fruits)) { 
    echo 'バナナがあります！';

}


$fruits = ['りんご', 'バナナ'];
array_push($fruits, 'みかん', 'ぶどう');

print_r($fruits);


$fruits1 = ['りんご', 'バナナ'];
$fruits2 = ['みかん', 'ぶどう'];

$all_fruits = array_merge($fruits1, $fruits2);


print_r($all_fruits);


$user = ['name' => '山田', 'age' => 30];

if (array_key_exists('email', $user)) {
    echo 'メールアドレスがあります';

}else {
    echo 'メールアドレスがありません';


}

$users = [
    ['name' => '山田', 'age' => 30],
    ['name' => '佐藤', 'age' => 25],
    ['name' => '鈴木', 'age' => 35],

];

foreach ($users as $user) {
    echo '名前: ' . $user['name'] . '、年齢: ' . $user['age'] . '歳<br>';
}


$scores = [
    '国語' => 80,
    '数学' => 95,
    '英語' => 72,

];

foreach ($scores as $subject => $score) {
    echo $subject . ':' . $score . '点<br>';

}
 
