<title>User Details</title>
<?php 
if(isset($userData))
{
?>
 <div class="container">
        <div class="space">           
        </div>
    <div class="card">
        <div class="card-header h3">
            User Details
        </div>
        <div class="card-body">
            <form action="<?php echo base_url('index.php/Home/updateUserDetails') ?>" method="post">
            <div class="row form-group">
                    <div class="col-sm-2">
                       User Id
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="user_id" value="<?php echo $userData['user_id'] ?>" class="form-control" readonly>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        First Name
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="first_name" value="<?php echo $userData['first_name'] ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        Last Name
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="last_name" value="<?php echo $userData['last_name'] ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                       Mail Id
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mail_id" value="<?php echo $userData['mail_id'] ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                       Phone no
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="phone_no" value="<?php echo $userData['phone_no'] ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        State
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="state" value="<?php echo $userData['state'] ?>">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        Address
                    </div>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="address" id=""  rows="4"><?php echo $userData['address'] ?></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                       Pin Code
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pincode" value="<?php echo $userData['pincode'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10"></div>
                    <div class="col-sm-2">
                        <button class="btn btn-warning btn-block" type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
}
else{
?>

<div class="container">
        <div class="space">           
        </div>
    <div class="card">
        <div class="card-header h3">
            User Details
        </div>
        <div class="card-body">
            <form action="<?php echo base_url('index.php/Home/insertUserDetails') ?>" method="post">
            <div class="row form-group">
                    <div class="col-sm-2">
                       User Id
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="user_id" value="<?php $session=session();  echo $session->userId; ?>" class="form-control" readonly>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        First Name
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="first_name">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        Last Name
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="last_name">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                       Mail Id
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mail_id">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                       Phone no
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="phone_no">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        State
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="state">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        Address
                    </div>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="address" id=""  rows="4"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                       Pin Code
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pincode">
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


<?php
}
?>
    