<?php
include_once 'config2.php';
if(count($_POST)>0) {
    mysqli_query($link,"UPDATE link set url='" . $_POST['url'] . "' WHERE id='" . $_GET['id'] . "'");
    $message = "Record Modified Successfully";
    }
$result = mysqli_query($link,"SELECT * FROM link WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="url shortener">
    <title><?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<br>
<center>
    <h1>Update URL</h1>
    <?php if(isset($message)) { echo $message; } ?>
    <p> 
        <a href="index.php" class="btn btn-info mr-3">Main Dashboard</a>
    </p>
    <form name="frmUser" method="post" action="">
        <div class="section group">
            <div class="col span_3_of_3">
                <input type="url" id="input" name="url" class="input" value="<?php echo $row['url']; ?>" placeholder="Enter a URL here">
            </div>
        </div>
        <input type="submit" value="Update" class="submit">
    </form>
</body>
</html>
