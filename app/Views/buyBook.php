<div class="container">
    <div class="space">
    </div>
    <div class="card form-group">
        <div class="card-header h3">
            Book Details
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <a href="<?php echo base_url('assets/bookImages') ?>/<?php echo $values['image'] ?>">
                    <img class="img-fluid" src="<?php echo base_url('assets/bookImages') ?>/<?php echo $values['image'] ?>" alt="">
                    </a>
                </div>
                <div class="col-sm-7">
                    <div class="row form-group">
                        <div class="col-sm-3">
                            Category of book
                        </div>
                        <div class="col-sm-9">
                            <?php echo $values['category'] ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            Book Name
                        </div>
                        <div class="col-sm-9">
                            <?php echo $values['book_name'] ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            Name of Author
                        </div>
                        <div class="col-sm-9">
                            <?php echo $values['author_name'] ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            Edition No
                        </div>
                        <div class="col-sm-9">
                            <?php echo $values['edition_no'] ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            Publisher
                        </div>
                        <div class="col-sm-9">
                            <?php echo $values['publisher'] ?>

                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            Asking Price
                        </div>
                        <div class="col-sm-9">
                            <?php echo $values['price'] ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header h3">
            Seller Info
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td><?php echo $SellerInfo['user_id'] ?></td>
                        <td>
                        <a href="mailto:<?php echo $SellerInfo['mail_id'] ?>"><?php echo $SellerInfo['mail_id'] ?></a></td>
                        <td><?php echo $SellerInfo['phone_no'] ?></td>
                        <td><?php echo $SellerInfo['state'] ?></td>
                        <td><?php echo $SellerInfo['address'] ?></td>
                        <td><?php echo $SellerInfo['pincode'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>