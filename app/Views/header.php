<html>

<head>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script>
           var beep5 =new Audio();
           beep5.src ='beep5.mp3';
</script>
</head>
<body>
    <div class="menu-bar">
        <ul>
       
            <li class=""><a href="<?php echo base_url('index.php/Home/home') ?>"onmousedown="beep5.play();"><i class="fa fa-home fa-2x" aria-hidden="true"></i><b>Home</b></a></li>
            <li><a href="#"><i class="fa fa-users fa-2x" aria-hidden="true"></i><b>Customers</b></a>
                <div class="sub-menu-1">
                    <ul>
                        <li><a href="<?php echo base_url("index.php/home/sellBooks") ?>"><i class="fa fa-book fa-2x" aria-hidden="true"></i><b>Sale Books</b></a></li>
                    </ul>
                </div>
            </li>
    <!--         <li><a href="#"><i class="fa fa-inr" aria-hidden="true"></i>Price</a>
                <div class="sub-menu-1">
                    <ul>
                        <li><a href="#">0-100 </a></li>
                        <li><a href="#">100-250</a></li>
                        <li><a href="#">250-500</a></li>
                        <li><a href="#">500-750 </a></li>
                        <li><a href="#">750-1000</a></li>
                        <li><a href="#">1000-3000</a></li>
                        <li><a href="#">3000 above</a></li>
                    </ul>
                </div>
            </li> -->

            <li><a href="#"><i class="fa fa-phone fa-2x" aria-hidden="true"></i><b>Contact Us</b></a>
                <div class="sub-menu-1">
                    <ul>
                        <li><a href="https://cmkrss007.blogspot.com/2020/10/save-trees-save-environment.html"><i class="fa fa-low-vision fa-2x" aria-hidden="true"></i><b>Vision</b></a></li>
                        <li><a href="<?php echo base_url("index.php/home/feedback") ?>"><i class="fa fa-edit fa-2x" aria-hidden="true"></i><b>Feedback</b></a></li>
                    </ul>
                </div>
            </li>
            <li><a href="<?php echo base_url('index.php/Home/logout') ?>"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i><b>Log-out<b></a></li>
            <li><a href="#"><i class="fa fa-user-circle fa-2x"></i>
            <span class="text-danger h5" >
        <?php 
                    $session=session();
                    if(isset($session->userId))
                    {
                    echo $session->userId;
                    }
                    else{
                        $newURL=base_url();
                        header("Location:".$newURL);
                        die();
                        echo "logged out";
                    }
                     ?>
                     </span>
            </a>
                <div class="sub-menu-1">
                    <ul>
                        <li><a href="<?php echo base_url("index.php/home/userDetails") ?>"><i class="fa fa-user" aria-hidden="true"></i>User Details </a></li>
                        <li><a href="<?php echo base_url("index.php/home/myBooks") ?>"><i class="fa fa-book-reader"></i>My Books </a></li>


                    </ul>
                </div>
            </li>
        </ul>
        
    </div>

