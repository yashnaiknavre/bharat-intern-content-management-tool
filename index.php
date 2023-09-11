
<?php include "api/sql.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    <title>Content Management System</title>
</head>
<body>
   <?php include "inc/header.php";
?>
<?php
include "api/fetch.php";
?>
<main  style="display:flex;  background-color: rgb(241, 241, 196);">
<?php
 while ($row = mysqli_fetch_assoc($result)) {
?>
    <div class="card" style="width: 20rem; margin-left:2rem; margin-top:1rem; margin-bottom:1rem;">
        <img class="bd-placeholder-img card-img-top" width="100%" height="300" src="api/<?php echo $row["image_path"]; ?>" >
            <title>Placeholder</title>
    
        <div class="card-body">
            <h5 class="card-title"><?php echo "TITLE :" .$row["title"]; ?></h5>
            <p class="card-text"><?php echo $row["description"]; ?></p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo "CREATOR :" . $row["creatorname"]; ?></li>
            <!-- <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li> -->
        </ul>
        <div class="card-body">
            <h5 class="card-title"><?php echo $row["timestamp"]; ?></h5>
        </div>
    </div>
    <?php } ?>
</main>
</div>
<?php
 include "inc/footer.php";
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>


<?php ?>