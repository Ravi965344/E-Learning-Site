<!doctype html>
<html lang="en">

<head>
   
    <title>iDiscuss - Coading Forums</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
      
    <style>

    </style>

</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php'; ?>



    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img1.jpg" class="d-block w-100" alt="..." style="width: 700px; height: 400px;">
            </div>
            <div class="carousel-item">
                <img src="img8.webp" class="d-block w-100" alt="..." style="width: 700px; height: 400px;">
            </div>
            <div class="carousel-item">
                <img src="img10.webp" class="d-block w-100" alt="..." style="width: 700px; height: 400px;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>




    <!-- Category container starts here -->
    <div class="container my-4 " id="ques">
        <h2 class="text-center my-4">iDiscuss - Browse Categories</h2>
        <div class="row my-4">

            <div class="card m-3" style="width: 18rem;">
                <img src="img6.avif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">PHP</h5>
                    <p class="card-text">PHP is a general-purpose scripting language geared towards
                        web development. It was originally created
                        by Danish-Canadian programmer Rasmus Lerdorf in 1993...</p>
                    <a href="https://www.php.net/manual/en/index.php" class="btn btn-primary">View Threads</a>
                </div>
            </div>


            <div class="card m-3" style="width: 18rem;">
                <img src="img7.avif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">React.js</h5>
                    <p class="card-text">React is a free and open-source front-end JavaScript library
                        for building user interfaces based on components. It is maintained by Meta and a community
                        of individual developers and companies...</p>
                    <a href="https://legacy.reactjs.org/docs/getting-started.html" class="btn btn-primary">View
                        Threads</a>
                </div>
            </div>


            <div class="card m-3" style="width: 18rem;">
                <img src="img8.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">OOPs</h5>
                    <p class="card-text">Object-Oriented Programming is a programming paradigm based on the concept of
                        "objects", which can contain data and code. The data is in the form of fields,
                        and the code is in the form of procedures... </p>
                    <a href="https://www.w3schools.com/java/java_oop.asp" class="btn btn-primary">View Threads</a>
                </div>
            </div>


            <div class="card m-3" style="width: 18rem;">
                <img src="img9.avif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">HTML</h5>
                    <p class="card-text">HTML is a markup language used by the browser to manipulate
                        text, images, and other content, in order
                        to display it in the required format. HTML was created by Tim Berners-Lee in 1991... </p>
                    <a href="https://www.w3schools.com/html/html_intro.asp" class="btn btn-primary">View Threads</a>
                </div>
            </div>


            <div class="card m-3" style="width: 18rem;">
                <img src="img10.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">CSS</h5>
                    <p class="card-text">Cascading Style Sheets is a style sheet language used for describing the
                        presentation of a document written in a markup language such as HTML or XML...</p>
                    <a href="https://www.w3schools.com/cssref/index.php" class="btn btn-primary">View Threads</a>
                </div>
            </div>
            <div class="card m-3" style="width: 18rem;">
                <img src="img10.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Python</h5>
                    <p class="card-text">
                        Python is a high-level, general-purpose programming language.
                        Its design philosophy emphasizes code readability with the use of significant indentation.
                        Python is dynamically typed and garbage-collected...
                    </p>
                    <a href="https://www.python.org/doc/" class="btn btn-primary">View Threads</a>
                </div>
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