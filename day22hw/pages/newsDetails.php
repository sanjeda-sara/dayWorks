<?php include "pages/includes/header.php"; ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/img/<?php echo $newsDetails['image']; ?>" class="img-fluid" style="" alt="">
                </div>
                <div class="col-md-6">
                    <div>
                        <div class="card">
                            <div class="card card-body">
                                <h2 class="font-weight-bold"><?php echo $newsDetails['name']; ?></h2>
                                <p>Price: BDT <?php echo $newsDetails['price']; ?></p>
                                <p><?php echo $newsDetails['description']; ?></p>
                                <a href="javascript:void(0)" class="btn btn-outline-success"> Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "pages/includes/footer.php"; ?>
