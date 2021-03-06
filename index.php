<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First</title>
    <link rel="stylesheet" href="scss/reset.css">
    <!-- <link rel="stylesheet" href="layout.css"> -->
    <link rel="stylesheet" href="scss/main.css">
    <link rel="stylesheet" href="scss/nav.css">
    <link rel="stylesheet" href="scss/nav-foot.css">
    <link rel="stylesheet" href="scss/font-awesome.min.css">
    <link rel="stylesheet" href="slick/slick.css"/>
    <link rel="stylesheet" href="slick/slick-theme.css"/>
</head>
<body>
<script type="text/javascript" src="jquery-3.5.1.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

<!-- <div class="your-class">
    <div>your content</div>
    <div>your content</div>
    <div>your content</div>
</div> -->
<div id="test"></div>
<script type="text/javascript" src="js/test.js"></script>
<?php include('nav.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<div class="container grid">
    <div class="content-right">
        <div class="title">Šiandienos įvykiai</div>
        <div class="box">
            <div class="event">
                <!-- foreach + kintamojo vardas is Migles/Justinos-->
                <div>
                <b>Data:</b> 2020.08.27<br>
                    <b>Įvykis:</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, dolores temporibus quaerat iure dolorem laborum!
                </div>
                <div>
                    <b>Data:</b> 2020.08.27<br>
                    <b>Įvykis:</b> Esse minus quis fugiat alias voluptates, blanditiis assumenda itaque, asperiores optio in quia, fuga obcaecati.
                </div>
                <div>
                    <b>Data:</b> 2020.08.27<br>
                    <b>Įvykis:</b> Perspiciatis! Explicabo, ullam? Voluptatibus tenetur quia quidem est ducimus nesciunt aliquam quaerat illo odio consectetur.
                </div>    
            </div>
        </div>
    </div>
    
    <div class="content-left">
        <div class="title">Artimiausi įvykiai</div>
        <div class="box green">
            <div class="event">
                <div>
                    <b>Data:</b> 2020.08.28<br>
                    <b>Įvykis:</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, dolores temporibus quaerat iure dolorem laborum!
                </div>
                <div>
                    <b>Data:</b> 2020.08.29<br>
                    <b>Įvykis:</b> Esse minus quis fugiat alias voluptates, blanditiis assumenda itaque, asperiores optio in quia, fuga obcaecati.
                </div>
                <div>
                    <b>Data:</b> 2020.08.29<br>
                    <b>Įvykis:</b> Perspiciatis! Explicabo, ullam? Voluptatibus tenetur quia quidem est ducimus nesciunt aliquam quaerat illo odio consectetur.
                </div>    
            </div>
        </div>
    </div>
</div>    
<div class="news-board" id="news"></div>
<div class="philosophy">
    <img class="tea" src="img/sea.jpg" alt="philosophy">
    <div class="text">
        <div class="welcome">Welcome to the Really Template</div>
        <div class="get-started">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae explicabo repudiandae omnis laboriosam quae accusamus.</div>
        <div class="read-more">READ MORE</div>
    </div>
</div>
<?php include('nav-foot.php'); ?>

<script type="text/javascript">
    $(document).ready(function(){
    //   $('.event').slick({
    //     setting-name: setting-value
    //   });
    $('.event').slick();
    });

</script>
<script src="js/main.js" type="module"></script>  
</body>
</html>