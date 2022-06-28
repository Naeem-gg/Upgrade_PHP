<html>  
    <head>  
        <style>
             .d
        {
            display:block;
            width:250px;
            /* background-color:red; */
        }
        a
        {
            background-color:grey;
            border-radius:10px;
            margin-left:60px;
            /* margin:0px auto; */
            padding:15px;
            text-decoration:none;
            color:white;
            font-size:18px;

        }
        div 
        {
            /* background-color:red; */
            margin:0px auto;
            width:50%;
            height:100px;
        }
        
        </style>
    <title> Pagination </title>  
    </head>  
    <body>  
      
    <?php  
      
        //database connection  
        $conn = new mysqli('localhost', 'naeem', 'Navjivan','lang');  
        if($conn->connect_error)
        {
            die("Unable to connect");
        }
        else
        {
            $results_per_page = 3;  
            $q = "SELECT * FROM langs";  
            $r = $conn->query($q);
            // print_r($r->num_rows);
            $total_results = $r->num_rows;
            // echo $total_results;
            // $row = $r->fetch_array();
            // print_r($row);
                // print_r($toral_results);
                                    
                $num_pages = ceil($total_results/$results_per_page);
                // $_GET['page']=1;
            //    print_r($_GET['page']);
                if(!isset($_GET['page']))
                {
                    $page=1;
                }
                else
                {
                    $page = $_GET['page'];
                }
                    $page_first_result = ($page-1) * $results_per_page;  
                    // echo $page_first_result;
                    $query = "SELECT * FROM langs ORDER BY srno ASC  LIMIT " . $page_first_result . ',' . $results_per_page;  


        }
            $result = $conn->query($query);

            // $row = $result->fetch_assoc();
            // print_r($row);
            echo "<table align=center border=1 cellspacing=0 cellpadding=20 style='width:60%; margin-top:100px;'>";
            echo "<tr><th>Sr No</th><th>Language Name</th><th>Year</th><th>Image</th><th class='d'>Description</th><th>Time</th><th>Delete</th><th>Update</th></tr>";
            while ($row = $result->fetch_assoc()) 
            {  
                echo "<tr>";
                echo "<td>";
                $s=$_SESSION['srno']=$row['srno'];
                echo $row["srno"];
                echo "</td>";
                
                echo "<td>";
                echo $row["lang_name"];
                echo "</td>";
                
                echo "<td>";
                echo $row["year"];
                echo "</td>";
                
                echo "<td>";
                echo "<img src={$row["lang_logo"]} width=100>";
                echo "</td>";

                echo "<td class='d'>";
                echo $row["lang_desc"];
                echo "</td>";
                
                echo "<td>";
                echo $row["date"];
                echo "</td>";
                echo  "<td><button onclick='del($s);'>Delete</button></td>";

                echo  "<td><button onclick='upd();'>Update</button></td>";

                
                echo "</tr>";
            }  
            echo "</table>
            
            <br><br><div>";
            if($page>1)
            {
                $prev=$page-1;
                echo "<a href=?page=$prev >Prev</a>";
            }
            
            for($page = 1; $page<= $num_pages; $page++) {  
                echo '<a href = "pagination.php?page=' . $page . '">' . $page . ' </a>';  
            
            }
            
            if($_GET['page']<$num_pages)
            {   
                echo "<h1>{$_GET['page']}</h1>";

                // echo "<h1>$total_results<br>$num_pages</h1>";
                $next=$_GET['page']+1;
                echo "<a href=?page=$next >Next</a>"; 
            }  
            echo "</div>";
          
      /*
        //define total number of results you want per page  
      
        //find the total number of results stored in the database  
        $result = mysqli_query($conn, $query);  
        $number_of_result = mysqli_num_rows($result);  
      
        //determine the total number of pages available  
        $number_of_page = ceil ($number_of_result / $results_per_page);  
      
        //determine which page number visitor is currently on  
        if (!isset ($_GET['page']) ) {  
            $page = 1;  
        } else {  
            $page = $_GET['page'];  
        }  
      
        //determine the sql LIMIT starting number for the results on the displaying page  
        $page_first_result = ($page-1) * $results_per_page;  
      
        //retrieve the selected results from database   
        $query = "SELECT *FROM alphabet LIMIT " . $page_first_result . ',' . $results_per_page;  
        $result = mysqli_query($conn, $query);  
          
        //display the retrieved result on the webpage  
        while ($row = mysqli_fetch_array($result)) {  
            echo $row['id'] . ' ' . $row['alphabet'] . '</br>';  
        }  
      
      
        //display the link of the pages in URL  
        for($page = 1; $page<= $number_of_page; $page++) {  
            echo '<a href = "index2.php?page=' . $page . '">' . $page . ' </a>';  
        }  
      */
    ?>  
    </body>  
    </html>  