<?php
include "Auth/connection.php";
include "Auth/controllerUserData.php";
$email=$_SESSION['email'];
$output="";
$result = mysqli_query($con, "SELECT * FROM posts WHERE added_by='$email' WHERE ORDER BY post_id DESC LIMIT 1 ");
if (mysqli_num_rows($result) > 0) {
    while ($people = mysqli_fetch_array($result)) {
        $output .= '       
                        <div class="card-body">
                          <div class="row align-items-left mb-1">
                            <div class="col-md-1">
                              <div class="user-avatar">
                                <img src="<?php if (isset($people["post_image"])) {
                                            echo $people["post_image"];
                                          } ?>" alt="Upload Image" class="d-block rounded" height="50" width="50" id="uploadedAvatar" />
                              </div>
                            </div>
                            <div class="col-md-9">
                              <div>
                                <h6><?php echo $people["added_by"]; ?></h6>
                                <p style="font-size: small;"><?php //echo $people["Designation"]; 
                                                              ?></p>
                              </div>
                            </div>
                            <div class="col-md-2">
                              <button type="button" class="btn btn-primary">Follow</button>
                            </div>
                          </div>

                          <div class="card mb-4">
                            <h5 class="card-header"></h5>
                            <div class="card-body">
                              <div class="user-avatar">
                                <img src="<?php if (isset($people["post_image"])) {
                                            echo $people["post_image"];
                                          } ?>" alt="Upload Image" class="d-block rounded" height="" width="100%" id="uploadedAvatar" />
                              </div>
                              <div>
                                <p><?php echo $people["text"]; ?></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      ';
    }
    $output .= "</div>";

    mysqli_close($con);

    echo $output;
} else {
    echo "<h2>No Record Found.</h2>";
}
                


// if(mysqli_num_rows($result) > 0 ){
//   $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
//               <tr>
//                 <th width="60px">Id</th>
//                 <th>Name</th>
//                 <th width="90px">Edit</th>
//                 <th width="90px">Delete</th>
//               </tr>';

//               while($row = mysqli_fetch_assoc($result)){
//                 $output .= "<tr><td align='center'>{$row["id"]}</td><td>{$row["first_name"]} {$row["last_name"]}</td><td align='center'><button class='edit-btn' data-eid='{$row["id"]}'>Edit</button></td><td align='center'><button Class='delete-btn' data-id='{$row["id"]}'>Delete</button></td></tr>";
//               }
//     $output .= "</table>";

//     mysqli_close($conn);

//     echo $output;
// }else{
//     echo "<h2>No Record Found.</h2>";
// }
