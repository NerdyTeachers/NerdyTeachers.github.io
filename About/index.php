<?php
require_once('../functions.php');

startSession();

header('Location: ../Alert/underConstruction.php');
exit;

$isloggedin = false;
$name = "Guest";
$gender = "unknown";
$level = 0;
if (isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == true) {
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $gender = $_SESSION['gender'];
    $id = $_SESSION['id'];
    $level = $_SESSION['level'];
    $isloggedin = true;
}

$pageTitle = "About Us Nerds";
$pageDescription = "PAGE DESCRIPTION HERE";
echo setupPage($pageTitle, $pageDescription, $isloggedin, $name, $gender, $level);
?>

<div class="left_panel">
    <div class="pageLogo"><h1>About Nerdy Teachers</h1><img src="../img/icon/question.png"/><hr/></div>
</div><!--LEFT PANEL-->

<div class="right_banner">
    <img src="../img/avatar/flat_jay_underConstruction.png"/>
</div><!--BANNER-->
<div class="right_panel">
    <div class="contentTitle">UNDER CONSTRUCTION</div>
    Sorry, this page will be coming soon though.
</div><!--RIGHT PANEL-->
<div class="bottom_panel">
    <img src="../img/banners/contribute_group.png"/>
</div><!--BOTTOM PANEL-->

<?php echo endPage(); ?>
