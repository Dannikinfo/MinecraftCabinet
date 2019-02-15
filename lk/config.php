<?
$config = array(
    //database configuration
    'db' => array(
        'host'       => 'localhost',
        'user'       => 'root',
        'password'   => 'root',
        'database'   => 'mccab',
        'errhost'    => 'Ошибка соединения с mysql сервером!',
    ),
    'general'   => array(
        'mainPage'   => '/lk',
    ),
    //auth configuration
    /*
    --- for ipb
    'auth' => array(
        'table'      => 'ipb_members',
        'nameC'      => 'name',
        'passC'      => 'members_pass_hash',
        'saltC'      => 'members_pass_salt',
        'wrongauth'  => 'Неверный логин или пароль!',
        'wrongbase'  => 'Ошибка соединения с сервером! повторите попытку позже!',
        'type'  => '0',
    ),
    --- for dle
    'auth' => array(
        'table'      => 'Hota_accounts',
        'nameC'      => 'name',
        'passC'      => 'pass',
        'saltC'      => 'nil',
        'wrongauth'  => 'Неверный логин или пароль!',
        'wrongbase'  => 'Ошибка соединения с сервером! повторите попытку позже!',
        'type'  => '1',
    ),
    --- for authme
    'auth' => array(
        'table'      => 'Hota_accounts',
        'nameC'      => 'name',
        'passC'      => 'pass',
        'saltC'      => 'nil',
        'wrongauth'  => 'Неверный логин или пароль!',
        'wrongbase'  => 'Ошибка соединения с сервером! повторите попытку позже!',
        'type'  => '2',
    ),
    --- for Hota/Cabinet (oficial module) 
    'auth' => array(
        'table'      => 'Hota_accounts',
        'nameC'      => 'name',
        'passC'      => 'pass',
        'saltC'      => 'nil',
        'wrongauth'  => 'Неверный логин или пароль!',
        'wrongbase'  => 'Ошибка соединения с сервером! повторите попытку позже!',
        'type'  => '3',
    ),
    */
    'auth' => array(
        'table'      => 'WE_accounts',
        'idC'        => 'id',
        'nameC'      => 'name',
        'passC'      => 'password',
        'emailC'     => 'email',
        'saltC'      => 'nil',
        'adminC'     => 'status',
        'wrongAuth'  => 'Неверный логин или пароль!',
        'wrongBase'  => 'Ошибка соединения с сервером! повторите попытку позже!',
        'wrongReg'   => 'Ошибка! проверьте введенные данные!',
        'wrongUser'  => 'Ошибка! никнейм занят!',
        'type'       => '3',
    ),
    //money configuration
    'money' => array(
        'table'             => 'iConomy',
        'iConomyBalance'    => 'balance',
        'userName'          => 'username',
        'realBalance'       => 'realBalance',
    ),
    //pex configuration
    'pex'   => array(
        'pexMainTable'   => 'permissions',
        'pexInhTable'    => 'permissions_inheritance',
    ),
);
?>
