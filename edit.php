<?php
$id = $_GET['id'];

require_once './class/register.php';
    $reg = new register();
$query_result = $reg->select_info_by_id($id);
$info = mysqli_fetch_assoc($query_result);

if (isset($_POST['update'])) {
    $reg->update_info($_POST, $id);
}
?>

<form class="inputform" action="" method="POST">
    <table class="table1">
        <tr>
            <td>First Name: </td>
            <td><input name="fname" type="text" value="<?php echo $info['fname'];?>"></td>
        </tr>
        <tr>
            <td>Last Name: </td>
            <td><input name="lname" type="text" value="<?php echo $info['lname'];?>"></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><input name="email" type="email" value="<?php echo $info['email'];?>"></td>
        </tr>
        <tr>
            <td>Contact: </td>
            <td><input name="contact" type="text" value="<?php echo $info['contact'];?>"></td>
        </tr>
        <tr>
            <td>Address: </td>
            <td><textarea name="address" rows="6"><?php echo $info['address'];?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="update" value="Submit"></td>
        </tr>
    </table>
</form>
