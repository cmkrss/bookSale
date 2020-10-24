<title>Home</title>
<div class="container-fluid">
    <div class="space">
    </div>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-9">
            <div class="row">
                <h1 class="text-light"> EXPLORE BOOKS </h1>
            </div>
            <div class="row">
                <div class="col-sm-3 less-pad">
                    <select name="" id="key" class="form-control form-group" >
                        <option value="category">Category</option>
                        <option value="book_name">Book Name</option>
                        <option value="author_name">Author Name</option>
                        <option value="publisher">Publisher</option>
                    </select>
                </div>
                <div class="col-sm-3 less-pad">
                    <input type="text" class="form-control form-group" autocomplete="off" name="author_name" placeholder="value" id="value">
                </div>
                <div class="col-sm-2 less-pad">
                    <button class="btn btn-secondary btn-block" onclick="findBooks()">Search</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="card d-none" style="opacity: 0.9" id="searchResult">
        <div class="card-body">
            <table id="example" class="table table-bordered table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>Book name</th>
                        <th>Category</th>
                        <th>Author Name</th>
                        <th>Edition no</th>
                        <th>Publisher</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Options</th> 

                    </tr>
                </thead>
                <tbody id="resultArea">              
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo base_url("assets/css/dataTables.bootstrap4.min.css"); ?>">
<script>
function findBooks() 
{
    var key = $("#key").val();
    var value = $("#value").val();
    let url = '<?php echo base_url('Home/findBooks/') ?>' + '/' + key +'/'+value;
    $.ajax({
        url: url,
        async: false, 
        success: function(response) 
        {
            var obj = JSON.parse(response);
            if (obj == null) 
            {
                alert('Book not found!!');
            }
            else 
            {
                var data="";
                for(var i=0;i<obj.length;i++)
                {
                    data+="<tr>"+
                    "<td>"+obj[i]['book_name']+"</td>"+
                    "<td>"+obj[i]['category']+"</td>"+
                    "<td>"+obj[i]['author_name']+"</td>"+
                    "<td>"+obj[i]['edition_no']+"</td>"+
                    "<td>"+obj[i]['publisher']+"</td>"+
                    "<td>₹"+obj[i]['price']+"</td>"+
                    "<td><img  src='<?php echo base_url() ?>/assets/bookImages/"+obj[i]['image']+"' height='50px'></td>"+
     "<td><a href='<?php echo base_url('index.php/Home/buyBook') ?>/"+obj[i]['id']+"/"+obj[i]['user_id']+"'><button class='btn btn-warning btn-block'>BUY</button></a>"+ 
                    "&nbsp;<button class='btn btn-warning btn-block' onclick='addBook("+obj[i]['id']+")'> <i class='fa fa-shopping-cart' aria-hidden='true'></i></button></td>"+ 
                    "</tr>";
                }
                $("#resultArea").html(data);                                          
               console.log(data); 
            }
        }
    });
    $('#example').DataTable();
    $('#searchResult').removeClass("d-none");
}

function addBook(key)
{
        //var key = $("#key").val();
        let url = '<?php echo base_url('Home/addCart/') ?>' + '/' + key ;
          $.ajax({
        url: url,
        async: false, 
        success: function(response) 
        {
            var obj = JSON.parse(response);
            if (obj == null) 
            {
                alert('Error');
            }
            else 
            {
               // obj[i]['book_name']
               alert('book successfully added to cart');
    
            }
        }
    });


}
</script>