<?php
require_once("vendor/autoload.php");
use App\lib\core\address;
use App\controllers\emplist;
use App\controllers\details;
use App\controllers\edit;
use App\controllers\update;
use App\controllers\delete;
use App\controllers\create;
use App\controllers\insert;

$task = (isset($_GET["task"]))? $_GET["task"] : "";
$empId = (isset($_GET["empid"]))? $_GET["empid"] : 0;
$params = array();
$params["empid"] = $empId;
$params["task"] = $task;
$controller = null;



switch ($task) {
    case "list":
        $controller = new emplist();
        break;
    case "create":
        $controller = new create();
        break;
    case "insert":
        $controller = new insert();
        $controller->run($_POST);        
        break;
    case "edit":
        $controller = new edit();
        break;
    case "update":
        $controller = new update();
        $controller->run($_POST);
        break;
    case "delete":
        $controller = new delete();
        //TODO: it should expanded to be able to delete multiple records
        $controller->run($params);
        break;
    case  "details":
        $controller = new details();
        break;
    default:
    $controller = new emplist();
     break;
}
?>

<html>
    <head>
        <style rel="" type="text/stylesheet"></style>
        <script src="" type="text/javascript"></script>
    </head>
    <body style="margin:0px;padding:0px;">
        <div id="siteDV" style="margin:0px;padding:0px;width:100%" >
            <div id="title" style="text-align:center">
                <H1>Employee Management System</H1>
            </div>
            <div id="bodyDV" style="">
                <div id="actionbar" style="width:100%;float:left;text-align:center">
                    <ul id="actionlist" style="float:left;list-style:none;display:inline-block">
                        <li id="listitem" style="float:left; margin-right:5px; padding: 4px">
                            <a href="<?php echo address::rootaddress; ?>index.php">Index</a>
                        </li>
                        <li id="listitem" style="float:left; margin-right:5px; padding: 4px">
                            <a href="<?php echo address::rootaddress; ?>index.php?task=create">Create</a>
                        </li>
                        <li id="listitem" style="float:left; margin-right:5px; padding: 4px">
                            <a href="<?php echo address::rootaddress; ?>index.php?task=list">List</a>
                        </li>
                    </ul>
                </div>
                <div id="mainBody" style="float:left;width:100%">
                    <div id="searchBd" style="margin-top:4px">
                        <form action="<?php echo address::rootaddress; ?>?task=list" method="post">
                            <div>
                                <label>Search:</label>
                                <input type="text" name="txtsearch" placeholder="Type here..." />
                                <input type="submit" value="Submit" name="submit"/>
                            </div>
                        </form>
                    </div>
                    <div id="bodyDetails" style="">
                        <?php
                            $controller->run($params);
                        ?>
                    </div>
                </div>
            </div>
            <div id="footerDV">
                <div id="Syndicate" style="text-align:center">
                    All right reserved. 2022
                </div>
            </div>
        </div>
    </body>
</html>