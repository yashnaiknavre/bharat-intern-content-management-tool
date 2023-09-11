<?php include "api/sql.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create a post</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include "inc/header.php";
?>
    <main class="main" >
        <h1>CREATE A POST</h1>
        <div id="for">

       
        <form action="api/addrecords.php" method="post" enctype="multipart/form-data">
   <div>
       <label for="title">Title of the Post</label>
       <input type="text" name="title">
   </div>
    <br>
    <div>
        <label for="desc">Description of the Post:</label>
        <br>
        <textarea name="description" id="textarea" cols="30" rows="10"></textarea>
    </div>
    <br>
    <div class="upbtn">
        <input id="upim" type="file" name="image">
    </div>
    <br>
  <div>
      <label for="creatorname">Creator Name</label>
      <input type="text" name="creatorname">
  </div>
   <input type="hidden" name="timestamp" value="<?php echo date('Y-m-d H:i:s'); ?>">
    <br>
    <input id="submit" type="submit" value="Submit">
</form>

        </div>
    </main>
    <div>
<?php 
include "inc/footer.php";
?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        

</body>
</html>