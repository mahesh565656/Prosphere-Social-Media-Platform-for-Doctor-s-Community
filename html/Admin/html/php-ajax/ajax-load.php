<?php

$conn = mysqli_connect("localhost", "root", "", "doctor") or die("Connection Failed");

$sql = "SELECT * FROM usertable";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";

if (mysqli_num_rows($result) > 0) {
    $output = '<table class="table">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Email</th>
                        
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>';

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= '<tr>
                        <td><img class="rounded-circle" width="50px"  src="http://localhost/doctor/Client/html/'. $row["image"] . '" ><span class="fw-medium">' . $row["name"] . '</span></td>
                        <td>'. $row["email"] . '</td>
                       
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>';
    }
    $output .= "</tbody></table>";

    mysqli_close($conn);

    echo $output;
} else {
    echo "<h2>No Record Found.</h2>";
}
?>
