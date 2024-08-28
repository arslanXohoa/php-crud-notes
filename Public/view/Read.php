<?php

namespace Public\view;
use App\controller\Controllers;

class Read extends Controllers{

public function show(){


  if ($this->users->num_rows > 0) {
    echo '<table class="table" id="myTable">
    <tbody>
    <tr>
    <th scope="col">Id</th>
    <th scope="col">Title</th>
    <th scope="col">Description</th>
    <th scope="col">Actions</th>
    </tr>';
    $id = 0;
  // output data of each row
  while($row = $this->users->fetch_assoc()) {
    $id = $id+1;
    echo "<tr><input type='hidden' id='nid' ><th scope='row'>" .$id. "</th><td>" .$row['title']. "</td>" ;
    echo "<td>" .$row['descript']. "</td>" ;
    echo "<td> <button class='delete btn btn-danger delete' id=" .$row['id']. ">Delete</button> <button type='button' class='edit btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal' id=".$row['id'].">
    Edit
  </button> </td></tr>" ;
    
   
  }
  echo "</tbody>
    </table>";
} else {
  echo "0 results";
}
// $this->conn->close();

}
}
?>