
 <?php 
if (!isset($_SESSION['login'])|| $_SESSION['login']!=true) 
{
    header('location: index.php');
}
?> 