<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iDiscuss - Coading Forums</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?php include 'partials/_header.php'; ?>
    <?php include 'partials/_dbconnect.php';?>
    <?php
    $id = $_GET['catid']
    $sql = "SELECT * FROM `categories` WHERE category_id=$id;
    $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)){
         $catname = $row['category_name'];
         $catdisc = $row['category_description'];
        }
     ?>

    <!-- Category container starts here -->
    <div class="container my-4 ">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to <?php echo $catname ;?> forums</h1>
            <p class="lead"> <?php echo $catdesc ;?></p>
            <hr class="my-4">
            <p>This is a peer to peer forum. No Spam / Advertising / Self-promote in the forum is not allowed.Do not
                post
                copyright-intfringing material.
            </p>
            <a class="btn btn-primary btn-lg" herf="#" role="button">Learn more</a>
        </div>
    </div>
    <div class="container">
        <h1>Browser Question</h1>
        <div class="d-flex">
            <div class="flex-shrink-0">
                <img src="imguser.avif" width="50px" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
                This is some content from a media component. You can replace this with any content and adjust it as
                needed.
            </div>
        </div>
    </div>










    <!-- Fetch all the categories and use a loop to iterate through categories -->






    <?php include 'partials/_footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>