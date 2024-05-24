<?php
function view($page, $data=[]) {
    extract($data);
    include 'view/'.$page.'.php';
}

class Router { 
    public static $urls = [];

    function __construct() {
        $url = implode("/", 
            array_filter(
                explode("/", 
                    str_replace($_ENV['BASEDIR'], "", 
                        parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
                    )
                ), 'strlen'
            )
        );

        if (!in_array($url, self::$urls['routes'])) {
            header('Location: '.BASEURL);
        }

        $call = self::$urls[$_SERVER['REQUEST_METHOD']][$url];
        $call();
    }
    public static function url($url, $method, $callback) {
        if ($url == '/') { $url = ''; }
        self::$urls[strtoupper($method)][$url] = $callback;
        self::$urls['routes'][] = $url;
        self::$urls['routes'] = array_unique(self::$urls['routes']);
    }
}

function urlpath($path) {
    require_once 'config/static.php';
    return BASEURL.$path;
}

function freshdb() {
    require_once 'model/user_model.php';
    require_once 'model/contact_model.php';
    global $conn;
    $conn->query('DELETE FROM users');
    $conn->query('ALTER TABLE users AUTO_INCREMENT = 1');
    $conn->query('DELETE FROM contacts');
    $conn->query('ALTER TABLE contacts AUTO_INCREMENT = 1');

    User::register([
        'email' => $_ENV['EMAIL'],
        'password' => $_ENV['PASSWORD'],
        'confirm password' => $_ENV['CONFIRM PASSWORD']
    ]);

    $contacts = array(
        ['Dewan Perwakilan Rakyat', 'Safila Elsa Vavilya', 'Rowokangkung, Lumajang', '081230481811'],
        ['Mahkamah Konstitusi', 'Dini Widya Dyanestica', 'Gumukmas, Jember', '081347582693'],
        ['Dewan Perwakilan Daerah', 'Faisol Bambang Hariyanto', 'Blambangan, Banyuwangi', '085264738177']
    );

    foreach ($contacts as $c) {
        Contact::insert([
                'CURRENT_JOB' => $c[0],
                'NAME' => $c[1],
                'ADRESSt'=> $c[2],
                'PHONE_NUMBER' => $c[4]
                ])
    }
    view('freshdb');
    session_destroy();
}