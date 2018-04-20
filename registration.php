<?php
include './header.php';
$message = '';
    require_once './class/register.php';
    $reg = new register();
if (isset($_POST['btn'])) {
    $message = $reg->save_info($_POST);
}
$query_result = $reg->select_all_info();
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $message = $reg->delete_info($id);
}
echo '<h3>Regitration form: <a href="registration.php">Home</a> | <a href="view.php">View List</a></h3><br>';
echo $message . "<br>";
?>
<form class="inputform" action="" method="POST">
    <table class="table1">
        <tr>
            <td>First Name: </td>
            <td><input name="fname" type="text"></td>
        </tr>
        <tr>
            <td>Last Name: </td>
            <td><input name="lname" type="text"></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><input name="email" type="email"></td>
        </tr>
        <tr>
            <td>Contact: </td>
            <td><input name="contact" type="text"></td>
        </tr>
        <tr>
            <td>Address: </td>
            <td><textarea name="address" rows="6"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form><br><br>
<table border="1" class="viewTable">
    <tr>
        <th>SL</th>  
        <th>Name</th>  
        <th>Email</th>  
        <th>Contact</th>  
        <th>Address</th>  
        <th>Action</th> 
    </tr> 
     <?php $sl = 1;
     while ($info = mysqli_fetch_assoc($query_result)) {
    ?>
    <tr>
        <td style="padding: 6px;"><?php echo $sl++;?></td>
        <td style="padding: 6px;"><?php echo $info['fname']." ".$info['lname']; ?></td>
        <td style="padding: 6px;"><?php echo $info['email'];?></td>
        <td style="padding: 6px;"><?php echo $info['contact'];?></td>
        <td style="padding: 6px;"><?php echo $info['address'];?></td>
        <td style="padding: 6px;">
            <a href="edit.php?id=<?php echo $info['id']; ?>">Update</a> |
            <a href="?delete=<?php echo $info['id']; ?>">Delete</a>
        </td>
    </tr>
     <?php } ?>
</table>

<?php
include './footer.php';
