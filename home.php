<?php
    define("Direct",1);
    //Routing
    $view_id = (isset($_GET["id"])&&is_numeric($_GET["id"])) ? (int)$_GET["id"] : 1 ;
    $current_view = "";
    if($view_id === 1)
        $current_view = "index";

    $_GET = array ();
    $_POST = array ();
    $_REQUEST = array ();
    $_ENV = array ();
    $_FILES = array ();
    $_COOKIE = array ();

    //require Models
    require_once("Config/config.php");
    require_once("Models/AbstractObserver.Class.php");
    require_once("Models/AbstractSubject.Class.php");
    require_once("Models/ExtendObserver.Class.php");
    require_once("Models/ExtendSubject.Class.php");

?>
<HTML>
<body>
<?php
    require_once("Views/".$current_view. ".php");
?>
</body>


</HTML>