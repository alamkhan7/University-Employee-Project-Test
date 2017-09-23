<?php  

    // include_once './Connection.php' ;
   
    // //get search term
    // $searchTerm = $_GET['term'];
    

    // if ( preg_match("/\\d/",$searchTerm) ){
    //     /*If they searchTerm have numric then*/
    //     $query = ("SELECT Employee_Code FROM employee WHERE Employee_Code LIKE '%".$searchTerm."%' ");
    //     //get matched data from skills table
    //     if($query_result = mysqli_query($conn,$query)){
        
    //         while ($row = mysqli_fetch_assoc($query_result)){
    //             $data[] =$row['Employee_Code'] ;
    //         }
    //     }
    //     else{
    //         $data[] = "Error: server fault.";
    //     }
    // }
    // else{
    //     $query = ("SELECT Employee_Name FROM employee WHERE Employee_Name LIKE '%".$searchTerm."%' ");
    //     //get matched data from skills table
    //     if($query_result = mysqli_query($conn,$query)){
        
    //         while ($row = mysqli_fetch_assoc($query_result)){
    //             $data[] =$row['Employee_Name'] ;
    //         }
    //     }
    //     else{
    //         $data[] = "Error: server fault.";
    //     }
    // }


     $data = array(array());
     array_pop($data);

    
$new = array( "label" => "DATA MANAGEMENT SYSTEM", "value" => "4" ) ;
    
    
    array_push($data, $new) ;
    //return json data
    echo json_encode($data);
?>