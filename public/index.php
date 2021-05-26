<?php



require_once '../app/bootstrap.php';

require_once ("../config/application.php");


// Init Core Library
$init = new Core;

// die();


if ($_SERVER['REQUEST_URI'] == '/users/login' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $_REQUEST['mode'] = 'login';
}

if ($_SERVER['REQUEST_URI'] == '/users/register' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $_REQUEST['mode'] = 'register';
}

if ($_SERVER['REQUEST_URI'] == '/users/add' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $_REQUEST['mode'] = 'create-user';
}



if ($_SERVER['REQUEST_URI'] == '/posts/add' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $_REQUEST['mode'] = 'create-post';
}

$db = new MyDb();
$db->execute_query("SET NAMES 'utf8'");

switch ($_REQUEST['mode']) {

    case "login":

        global $db;

        require_once(VIEW_DIR . "/users/login.php");
        $user = new User();
        //$user->login();


        break;

//---------------------------------------------------------------------------------
    case "register":


        global $db;

        require_once(VIEW_DIR . "/users/register.php");
        $user = new User();
        //$user->register();


        if (!isAjax()) {
            global $dbc;


        }
        break;

//-----------------------------------------------------------------------------
    case "create-post":
     //   require_once(VIEW_DIR . "/posts/add.php");
        require_once(CONTROLLERS_DIR . "/Posts.php");


        $post = new Posts();
        $post->postModel;

        if (!isAjax()) {
            global $dbc;


        }
    break;



//-----------------------------------------------------------------------------------

    case "create-user":
        require_once(VIEW_DIR . "/users/add.php");
        $user = new User();
        //$user->create();

        if (!isAjax()) {
            global $dbc;


        }
    break;

//-----------------------------------------------------------------------------------



//    default:
//    case "list":
//      $post = new Post();
//      $post-> getPosts();
//        break;









    default:
    case "list":

      //  $brand =new brand();




        if(isset($showform) &&  $showform && !empty($_POST['form']['btnLink1'])  && !($_POST['form']['btnLink1'])) {

            $formdata = array_item($_POST, "form");

            if(array_item($formdata, "brandID"))
                echo "<h1>ערוך פורום</h1>";
            else
                echo "<h1>הזן נתונים לפורום  </h1>";

            $brand->print_forum_paging_b();

            //show_list($formdata);

        }else{
            if(isset($_POST['form']['brandID'])) {
                $brandID = $_POST['form']['brandID'];
                if (is_numeric($brandID))
                    $brand->print_forum_entry_form1($brandID);
                $brand->print_forum_paging_b($brandID);
            }
        }

















//-----------------------------------------------------------------------------

}
//-------------------------------------------------------------------------------
//
//    case "save":
//        global $db;
//
//        $brand=new brand();
//        $formdata['dynamic_10']=1;
//        $formdata=$_POST['form'];
//        $db->execute("START TRANSACTION");
//        $result = true;
//        if ($result = $brand->add_brand($formdata)) {
//            $db->execute("COMMIT");
//            $formdata = false;
//            show_list($formdata);
//            return true;
//        }
//        $db->execute("ROLLBACK");
//        $formdata['fail'] = true;
//        $formdata['dynamic_10'] = 1;
//        show_list($formdata);
//        return;
//        break;
////---------------------------------------------------------------------------------
//    case "insert":
//        if(isset($_GET['brandID']) && is_numeric($_GET['brandID']) ){
//            update_to_parent($_GET['brandID'],$_GET['insertID']);
//            unset($_SESSION['brandID']);
//        }else{
//
//            $insertID      = array_item($_REQUEST, 'insertID');
//            $deleteID      = array_item($_REQUEST, 'deleteID');
//            $updateID      = array_item($_REQUEST, 'updateID');
//            $submitbutton  = array_item($_POST, 'submitbutton');
//            $subcategories = array_item($_POST, 'subcategories');
//
//            insert_forum($_GET['insertID'],$submitbutton,$subcategories);
//        }
//        break;
////---------------------------------------------------------------------------------
//    case  "link":
//        if (isset($_REQUEST['form'])){
//            read_befor_link($_POST['form']);
//        }else{
//            $formdata['brandID']=$_GET['brandID'];
//            $formdata['insertID']=$_GET['insertID'];
//            read_link($formdata);
//        }
//        break;
////---------------------------------------------------------------------------------
//    case  "read_data":
//        if( array_item($_POST, 'brandID') && count($_POST)==1 && !$_GET){
//            $_REQUEST['editID']= array_item($_POST, 'brandID');
//        }
//        if($_REQUEST['editID'] && !($_REQUEST['editID'] == 'none') ){
//            $formdata =read_brand($_GET['editID']);
//        }elseif(isset($_GET['brandID'])){
//            $formdata =read_brand($_GET['brandID']);
//        }
//        break;
//
////---------------------------------------------------------------------------------
//    case "update":
//        global $db;
//        if(isset($_GET['updateID']) && $_GET['updateID']) {
//            update_forum1($_GET['updateID']);
//
//        }else{
////------------------------------------------------------------------------------------
//            if($_POST['form']){
//                foreach($_POST['form']  as $key=>$val){
//                    if ($val=='none' || $val== "" )
//                        unset ($_POST['form'][$key]);
//                }
//            }
////------------------------------------------------------------------------------------
//            $brandID= isset($_POST['form']['brandID']) ? $_POST['form']['brandID']: '' ;
////            if(!isset($brandID))
////                $brandID= isset($_GET['editID']) ? $_GET['editID']: '' ;
////-----------------------------------------------------------------------
////
//
//            $formdata = isset($_POST['form']) ? $_POST['form'] : false;
//            $formdata['brandID'] = $brandID;
//            if(isset($formdata['brand_date2'])) {
//                list($year_date, $month_date, $day_date) = explode('-', $formdata['brand_date2']);
//                if (strlen($year_date) > 3) {
//                    $formdata['brand_date'] = "$year_date-$month_date-$day_date";
//                }
//            }
////----------------------------------------------------------------------
//            $db->execute("START TRANSACTION");
//            if(!$formdata=update_brand($formdata)){
//                $db->execute("ROLLBACK");
//                return false;
//            } else{
//                $db->execute("COMMIT");
//                $formdata['type'] = 'success';
//                $formdata['message'] = 'עודכן בהצלחה!';
//                show_list($formdata);
//                return true;
////----------------------------------------------------------------------
//            }
//        }
//        break;
//    case "realy_delete":
//        real_del($_POST['form']);
//        $showform=FALSE;
//        break;
////------------------------------------------------------------------------------------
//    case "delete":
//        if (($_GET['deleteID'])){
//            $formdata['forum_demo_last8']=1;
//            delete_forum($_GET['deleteID'],$formdata);//subcategories
//        }else{
//            $formdata['forum_demo_last8']=1;
//            delete_forum($_POST['form']['brandID'],$formdata);
//        }
//
//        break;
//    //------------------------------------------------------------------------------------------------------
//
//    default:
//    case "list":
//
//        $brand =new brand();
//
//
//
//
//        if(isset($showform) &&  $showform && !empty($_POST['form']['btnLink1'])  && !($_POST['form']['btnLink1'])) {
//
//            $formdata = array_item($_POST, "form");
//
//            if(array_item($formdata, "brandID"))
//                echo "<h1>ערוך פורום</h1>";
//            else
//                echo "<h1>הזן נתונים לפורום  </h1>";
//
//            $brand->print_forum_paging_b();
//
//            show_list($formdata);
//
//        }else{
//            if(isset($_POST['form']['brandID'])) {
//                $brandID = $_POST['form']['brandID'];
//                if (is_numeric($brandID))
//                    $brand->print_forum_entry_form1($brandID);
//                $brand->print_forum_paging_b($brandID);
//            }
//        }
//}
