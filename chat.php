<?php
require "config/constants.php";
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>
<html>
    <body>
        <style type="text/css">
           .subcomment{
                border-bottom: 1px dotted #
            }
            .subcomment:hover{
                background: lightgreen;
            }
        </style>
        <?php
        //Ket noi CSDL
        mysql_connect('localhost', 'root', '');
        //Chon CSDL
        mysql_select_db('ecommerceapp');
        //Kiem tra thu nguoi dung da an nut chua
        if(isset($_POST['add'])){
            //Gan cac bien
            $user = $_POST['user'];
            $cm = $_POST['comment'];
            //Chen vao CSDL
            mysql_query("INSERT INTO chat VALUES('', '$user', '$cm')") or die(mysql_error());
        }
        ?>
        <form method="post" action="">
            <table style="border: 2px solid #ccc; margin: 30px auto;">
            <tr>
                <td>User: <input type="text" name="user" value=""/><input type="submit" name="add" value="Gui"/></td>
                <td>Comments: </td>
            <tr>
            <tr>
                <td><textarea name="comment" cols="30" rows="14"></textarea></td>
                <td><div style="width:600px; height: 220px; border: 1px solid #ccc; overflow: scroll;"></div></td>
                <?php
                    $sql = mysql_query("SELECT * FROM chat");
                    while($row = mysql_fetch_array($sql)){
                        echo "
                        <div class='subcomment'>
                        <b>".$row['']."</b>: ".$row['comments']."</div>
                        ";
                    }
                ?>
            </tr>
            </table>
        </form>
    </body>
</html>