<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/banklogo.png" type="image/x-icon">
    <title>VIEW USERS</title>

</head>
<?php
include 'Includes/Header.php';
?>

    <body>
        <h2 style="font-size: 45px;" class="text-center pt-4 ">User Details</h2>
        <script>
            // search
            const searchFunction = () => {
                let filter = document.querySelector(".searchInput ").value.toUpperCase();
                let tableData = document.querySelector("tbody ");
                let tr = tableData.querySelectorAll("tr ");
                let td;
                for (var i = 0; i < tr.length; i++) {
                    td = tr[i].querySelectorAll("td ")[1];
                    if (td) {
                        let textValue = td.textContent || td.innerHTML;
                        if (textValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = " ";
                        } else {
                            tr[i].style.display = "none ";


                        }
                    }
                }

            }
        </script>
        <section class="users ">
            <div class="search-box ">
                <input type="text " placeholder="search " class="searchInput " onkeyup="searchFunction() ">
                <a href="# " class="search-btn "><i class="fas fa-search "></i></a>
            </div>
            <table class="table-user user-title ">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Balance</th>

                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'config.php';
                    $sql = "select * from `users` ";
                    $res = mysqli_query($conn,$sql);
                    if($res){
                        while($row = mysqli_fetch_assoc($res)){
                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $balance = $row['balance'];
                            
                            echo '
                            <tr>
                            <td data-value="Id ">'.$id.'</td>
                            <td data-value="Name ">'.$name.'</td>
                            <td data-value="Email ">'.$email.'</td>
                            <td data-value="Balance ">'.$balance.'</td>
                            
                            </tr>';
                            
                        }
                    }
                    
                    ?>

                </tbody>

            </table>

        </section>







    </body>

</html>