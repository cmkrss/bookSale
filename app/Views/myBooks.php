<div class="container">
    <div class="space">
    </div>
    
    <div class="card form-group">
        <div class="card-header h3">
            My Cart
        </div>
        <div class="card-body">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Book name</th>
                        <th>Category</th>
                        <th>Author Name</th>
                        <th>Edition no</th>
                        <th>Publisher</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Option</th>
                        <th>remove</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($cart as $book)
                    {
                        echo "<tr>";
                        echo "<td>".$book['book_name']."</td>";
                        echo "<td>".$book['category']."</td>";
                        echo "<td>".$book['author_name']."</td>";
                        echo "<td>".$book['edition_no']."</td>";
                        echo "<td>".$book['publisher']."</td>";
                        echo "<td>".$book['price']."</td>";
                        echo "<td><a href='".base_url('assets/bookImages')."/".$book['image'] ."'><img height='50px' src='".base_url('assets/bookImages')."/".$book['image']."'></a></td>";
                        echo "<td><a href='".base_url('index.php/Home/buyBook')."/".$book['id']."/".$book['user_id']."'><button class='btn btn-warning btn-block'>BUY</button></a></td>"; 
                        echo "<td><a href='".base_url('index.php/Home/deleteCart')."/".$book['cart_id']."/"."'><button class='btn btn-warning btn-block'>Remove</button></a></td>"; 

                        echo "</tr>";
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card form-group">
        <div class="card-header h3">
            My Books
        </div>
        <div class="card-body">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Book name</th>
                        <th>Category</th>
                        <th>Author Name</th>
                        <th>Edition no</th>
                        <th>Publisher</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>remove</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($book_list as $book)
                    {
                        echo "<tr>";
                        echo "<td>".$book['book_name']."</td>";
                        echo "<td>".$book['category']."</td>";
                        echo "<td>".$book['author_name']."</td>";
                        echo "<td>".$book['edition_no']."</td>";
                        echo "<td>".$book['publisher']."</td>";
                        echo "<td>".$book['price']."</td>";
                        echo "<td><a href='".base_url('assets/bookImages')."/".$book['image'] ."'><img height='50px' src='".base_url('assets/bookImages')."/".$book['image']."'></a></td>";
                        echo "<td><a href='".base_url('index.php/Home/deleteMybook')."/".$book['id']."'><button class='btn btn-warning btn-block'>Remove</button></a></td>"; 
                        echo "</tr>";
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>


</div>