<?
$config = array(
    //database configuration
    'db' => array(
        'host'       => 'localhost',
        'user'       => 'root',
        'password'   => 'password',
        'database'   => 'database',
        'errhost'    => 'Ошибка соединения с mysql сервером!',
        'errbase'    => 'Ошибка соединения с базой данных!',
    ),
    //auth configuration
    'auth' => array(
        'table'      => 'ipb_members',
        'nameC'      => 'name',
        'passC'      => 'members_pass_hash',
        'saltC'      => 'members_pass_salt',
        'wrongauth'  => 'Неверный логин или пароль!',
        'wrongbase'  => 'Ошибка соединения с сервером! повторите попытку позже!',
    ),
    //money configuration
    'money' => array(
        'iConomyTable'      => 'iConomy',
        'iConomyBalance'    => 'balance',
        'iConomyRealBalance'=> 'RealBalance',
    ),
    //pex configuration
    'pex'   => array(
        'pexMainTable'   => 'permissions',
        'pexInhTable'    => 'permissions_inheritance',
    ),
);
?>
