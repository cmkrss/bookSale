
 <?php
$session = session();
if ($session->registered == "no") {
      $newURL = base_url('index.php/Home/UserDetails');
      header("Location:" . $newURL);
      die();
} else {
}
?>
<style>
/* .form-control{
    background-color:unset !important;
    color:white !important;
} */
</style>
    <div class="container">
        <div class="space">
            
        </div>
    <!-- <div class="text-light"> --> <div class="card">
        <div class="card-header h3">
            Sell Book
        </div>
        <div class="card-body">
            <form action="<?php echo base_url('index.php/Home/insertBooks') ?>" method="post" enctype="multipart/form-data">
                <div class="row form-group">
                    <div class="col-sm-2">
                        Category of book
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="category">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        Book Name
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="book_name">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        Name of Author
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="author_name">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        Edition No
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="edition">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        Publisher
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="publisher">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        Asking Price
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="price">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        Cover Image
                    </div>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="image">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10"></div>
                    <div class="col-sm-2">
                        <button class="btn btn-primary btn-block" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>