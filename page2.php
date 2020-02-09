<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 2</title>
</head>
<body>
<div class="header jumbotron">
    <?php require 'inc/project-2-header.inc.php';?>
    <h2>Query Results Page</25>
</div>
<div class="container-fluid">
    <div class="row">
        <?php
        if ($_SERVER['REQUEST_METHOD']=="GET"){
            // cat 
            if (isset($_GET['cat'])){
                ?> 
                <div class="card">
                    <img class="card-image" src="img/cat-square.jpg" alt="It is a picture of a cat.">
                    <div class="card-body">
                        <p>The cat says meow<p> 
                        <audio controls class="audio-controls">
                        <source src="audio/cat.mp3" type="audio/mp3">
                        Your browser does not support the audio tag. 
                        </audio>
                        <p>and the browser shows http://page2.php?cat</p>
                    <!-- end div card-body -->
                    </div>
                <!-- end div card -->
                </div>
                <?php
            }
            // chicken
            if (isset($_GET['chicken'])){
                ?> 
                <div class="card">
                    <img class="card-image" src="img/chicken-square.jpg" alt="It is a picture of a chicken.">
                    <div class="card-body">
                        <p>The chicken says cluck<p> 
                        <audio controls class="audio-controls">
                        <source src="audio/chicken.mp3" type="audio/mp3">
                        Your browser does not support the audio tag. 
                        </audio>
                        <p>and the browser shows http://page2.php?chicken</p>
                    <!-- end div card-body -->
                    </div>
                <!-- end div card -->
                </div>
                <?php
            }
            // cow
            if (isset($_GET['cow'])){
                ?>
                <div class="card">
                    <img class="card-image" src="img/cow-square.jpg" alt="It is a picture of a cow.">
                    <div class="card-body">
                        <p>The cow says moo<p> 
                        <audio controls class="audio-controls">
                        <source src="audio/cow.mp3" type="audio/mp3">
                        Your browser does not support the audio tag. 
                        </audio>
                        <p>and the browser shows http://page2.php?cow</p>
                    <!-- end div card-body -->
                    </div>
                <!-- end div card -->
                </div>
                <?php
            }
            // dog
            if (isset($_GET['dog'])){
                ?>
                <div class="card">
                    <img class="card-image" src="img/dog-square.jpg" alt="It is a picture of a dog.">
                    <div class="card-body">
                        <p>The dog says bark<p> 
                        <audio controls class="audio-controls">
                        <source src="audio/dog.mp3" type="audio/mp3">
                        Your browser does not support the audio tag. 
                        </audio>
                        <p>and the browser shows http://page2.php?dog</p>
                    <!-- end div card-body -->
                    </div>
                <!-- end div card -->
                </div>
                <?php 
            }
            // donkey
            if (isset($_GET['donkey'])){
                ?>
                <div class="card">
                    <img class="card-image" src="img/donkey-square.jpg" alt="It is a picture of a donkey.">
                    <div class="card-body">
                        <p>The donkey says hee-haw<p> 
                        <audio controls class="audio-controls">
                        <source src="audio/donkey.mp3" type="audio/mp3">
                        Your browser does not support the audio tag. 
                        </audio>
                        <p>and the browser shows http://page2.php?donkey</p>
                    <!-- end div card-body -->
                    </div>
                <!-- end div card -->
                </div>
                <?php
            }
            // duck
            if (isset($_GET['duck'])){
                ?>
                <div class="card">
                    <img class="card-image" src="img/duck-square.jpg" alt="It is a picture of a duck.">
                    <div class="card-body">
                        <p>The duck says quack<p> 
                        <audio controls class="audio-controls">
                        <source src="audio/duck.mp3" type="audio/mp3">
                        Your browser does not support the audio tag. 
                        </audio>
                        <p>and the browser shows http://page2.php?duck</p>
                    <!-- end div card-body -->
                    </div>
                <!-- end div card -->
                </div>
                <?php
            }
            // goat
            if (isset($_GET['goat'])){
                ?>
                <div class="card">
                    <img class="card-image" src="img/goat-square.jpg" alt="It is a picture of a goat.">
                    <div class="card-body">
                        <p>The goat says ma<p> 
                        <audio controls class="audio-controls">
                        <source src="audio/goat.mp3" type="audio/mp3">
                        Your browser does not support the audio tag. 
                        </audio>
                        <p>and the browser shows http://page2.php?goat</p>
                    <!-- end div card-body -->
                    </div>
                <!-- end div card -->
                </div>
                <?php
            }
            // goose
            if (isset($_GET['goose'])){
                ?>
                <div class="card">
                    <img class="card-image" src="img/goose-square.jpg" alt="It is a picture of a goose.">
                    <div class="card-body">
                        <p>The goose says honk<p> 
                        <audio controls class="audio-controls">
                        <source src="audio/goose.mp3" type="audio/mp3">
                        Your browser does not support the audio tag. 
                        </audio>
                        <p>and the browser shows http://page2.php?goose</p>
                    <!-- end div card-body -->
                    </div>
                <!-- end div card -->
                </div>
                <?php
            }
            // horse
            if (isset($_GET['horse'])){
                ?>
                <div class="card">
                    <img class="card-image" src="img/horse-square.jpg" alt="It is a picture of a horse.">
                    <div class="card-body">
                        <p>The horse says neigh<p> 
                        <audio controls class="audio-controls">
                        <source src="audio/horse.mp3" type="audio/mp3">
                        Your browser does not support the audio tag. 
                        </audio>
                        <p>and the browser shows http://page2.php?horse</p>
                    <!-- end div card-body -->
                    </div>
                <!-- end div card -->
                </div>
                <?php
            }
            // lamb
            if (isset($_GET['lamb'])){
                ?>
                <div class="card">
                    <img class="card-image" src="img/lamb-square.jpg" alt="It is a picture of a lamb.">
                    <div class="card-body">
                        <p>The lamb says bah<p> 
                        <audio controls class="audio-controls">
                        <source src="audio/lamb.mp3" type="audio/mp3">
                        Your browser does not support the audio tag. 
                        </audio>
                        <p>and the browser shows http://page2.php?lamb</p>
                    <!-- end div card-body -->
                    </div>
                <!-- end div card -->
                </div>
                <?php
            }
            // pig
            if (isset($_GET['pig'])){
                ?>
                <div class="card">
                    <img class="card-image" src="img/pig-square.jpg" alt="It is a picture of a pig.">
                    <div class="card-body">
                        <p>The pig says oink<p> 
                        <audio controls class="audio-controls">
                        <source src="audio/pig.mp3" type="audio/mp3">
                        Your browser does not support the audio tag. 
                        </audio>
                        <p>and the browser shows http://page2.php?pig</p>
                    <!-- end div card-body -->
                    </div>
                <!-- end div card -->
                </div>
                <?php
            }
            // pony
            if (isset($_GET['pony'])){
                ?>
                <div class="card">
                    <img class="card-image" src="img/pony-square.jpg" alt="It is a picture of a pony.">
                    <div class="card-body">
                        <p>The pony says neigh<p> 
                        <audio controls class="audio-controls">
                        <source src="audio/pony.mp3" type="audio/mp3">
                        Your browser does not support the audio tag. 
                        </audio>
                        <p>and the browser shows http://page2.php?pony</p>
                    <!-- end div card-body -->
                    </div>
                <!-- end div card -->
                </div>
                <?php
            }
            // rooster
            if (isset($_GET['rooster'])){
                ?>
                <div class="card">
                    <img class="card-image" src="img/rooster-square.jpg" alt="It is a picture of a rooster.">
                    <div class="card-body">
                        <p>The rooster says cock-a-doodle-do<p> 
                        <audio controls class="audio-controls">
                        <source src="audio/rooster.mp3" type="audio/mp3">
                        Your browser does not support the audio tag. 
                        </audio>
                        <p>and the browser shows http://page2.php?rooster</p>
                    <!-- end div card-body -->
                    </div>
                <!-- end div card -->
                </div>
                <?php
            }
            // sheep
            if (isset($_GET['sheep'])){
                ?>
                <div class="card">
                    <img class="card-image" src="img/sheep-square.jpg" alt="It is a picture of a sheep.">
                    <div class="card-body">
                        <p>The sheep says bah<p> 
                        <audio controls class="audio-controls">
                        <source src="audio/sheep.mp3" type="audio/mp3">
                        Your browser does not support the audio tag. 
                        </audio>
                        <p>and the browser shows http://page2.php?sheep</p>
                    <!-- end div card-body -->
                    </div>
                <!-- end div card -->
                </div>
                <?php
            }
            // turkey
            if (isset($_GET['turkey'])){
                ?>
                <div class="card">
                    <img class="card-image" src="img/turkey-square.jpg" alt="It is a picture of a turkey.">
                    <div class="card-body">
                        <p>The turkey says meow<p> 
                        <audio controls class="audio-controls">
                        <source src="audio/turkey.mp3" type="audio/mp3">
                        Your browser does not support the audio tag. 
                        </audio>
                        <p>and the browser shows http://page2.php?turkey</p>
                    <!-- end div card-body -->
                    </div>
                <!-- end div card -->
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>
<div class="footer jumbotron">
    <?php require 'inc/project-2-footer.inc.php';?>
</div>
<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>