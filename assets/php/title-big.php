<?php
$id=$_GET['id'];
if(!is_numeric($id)){
echo "Data Error";
exit;
}
$result = $conn->query("SELECT * FROM posts where id=$id");
$result = $result->fetch_row();
if(empty($result)){
  $big_title = "Sorry, the post you are looking for does not exist!";
}else{
$count="SELECT *  FROM posts where id=?";

if($stmt = $conn->prepare($count)){
  $stmt->bind_param('i',$id);
  $stmt->execute();

 $result = $stmt->get_result();
 $row=$result->fetch_object();
 $big_title = $row->title;
}else{
  echo $connection->error;
  }
}
  ?>