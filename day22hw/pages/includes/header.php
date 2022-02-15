<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
<!--    <link rel="stylesheet" href="assets/css/style.css" />-->
</head>
<body>
<section class="py-5 border-bottom">
    <a href="index.php">
        <div class="col-md-12 border-0">
            <div class="first">
                <img src="assets/img/p_alo2.png" alt="Prothom Alo" class="pull-left"">
            </div>
        </div>
    </a>
    <div class="container ">
        <div class="row">


        </div>
    </div>
</section>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
    <div class="container">
        <a href="action.php?pages=home" class="navbar-brand"></a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="action.php?pages=all-news" class="nav-link">Home</a></li>
            <?php foreach ($categories as $category) { ?>
<!--              foreach  (array as array_object)-->
                <li class="nav-item">
                    <a href="action.php?pages=category-news&&category_id=<?php echo $category['id'] ?>" class="nav-link">
                        <?php echo $category['name']?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>


<section class="py-5">
    <div class="container border-0 bg-white">
        <div class="row">
            <div class="col-md-3 border-0">
                <div class="card border-0">
                    <div class="card-body text-dark text-white">
                        <h2 class="fs-20 font-weight-bold" style="font-size: 20px;">"ইসি গঠনে প্রস্তাবিত নাম সাবেক আমলাদের আধিক্য"</h2>
                        <p>অনুসন্ধান কমিটির সাচিবিক দায়িত্বে থাকা মন্ত্রিপরিষদ বিভাগের ওয়েবসাইটে গতকাল সোমবার রাত আটটার পর প্রস্তাবিত নামগু</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 border-0">
                <div class="card border-0">
                    <img src="assets/img/p1.jpg" alt="edu" class="card-img-top">
                    <div class="card-body">
                        <h2 class="fs-16 "></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 border-0">
                <div class="card border-0">
                    <div class="card-body bg-white text-dark">
                        <h2 class="fs-16 bg-white text-dark font-weight-bold" style="font-size: 20px;">"রিয়ালের সঙ্গে আজ দেখা হচ্ছে মেসির"</h2>
                        <p>আজ চ্যাম্পিয়নস লিগে রিয়াল মাদ্রিদের বিপক্ষে মাঠে নামবে পিএসজি। এ ছাড়া ম্যানচেস্টার সিটি মাঠে নামবে স্পোর্টিংয়ের বিপক্ষে। দুপুরে অস্ট্রেলিয়া–শ্রীলঙ্কার মধ্যকার টি–টোয়েন্টি ক্রিকেট দেখুন..</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 border-0">
                <div class="card border-0 bg-teal text-white">
                    <img src="assets/img/p2.jpg" alt="লেজার চিকিৎসার সুবিধা-অসুবিধা" class="card-img-top" style="height: 160px;">
                    <div class="card-body "style="font-size: 20px;>
                        <a href="#"><h2 class=" font-weight-bold">"লেজার চিকিৎসার সুবিধা-অসুবিধা"</h2></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>