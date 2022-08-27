<?php
function printAllAccount($accounts){
  echo '<table class="table">';
  echo '<thead>
        <th>Username</th>
        <th>Password</th>
        <th>Fullname</th>
        <th>User Type</th>
        <th>Like/s</th>
        </thead>';
  foreach ($accounts as $account) {
    if($account['type'] == 'admin'){
      echo '<tr class="bg-info">';
    }else{
      echo '<tr class="bg-secondary text-light">';
    }
    echo "<td>".$account['uname']."</td>";
    echo "<td>".$account['pword']."</td>";
    echo "<td>".$account['fname']."</td>";
    echo "<td>".$account['type']."</td>";
    echo "<td>".printAllLikes($account)."</td>";
    echo '</tr>';
  }
  echo '</table>';
}

function printAllLikes($account){
  $likeA='';
  if(count($account['likes'])>0){
    foreach ($account['likes'] as $like) {
      $likeB = $like.',';
      $likeA =$likeA.$likeB;
    }
    return rtrim($likeA, ',');
  }else{
    return "N/A";
  }
}

function generatePage($accounts){
  $totalPageItems = count($accounts);
  $itemPerPage = 10;
  $totalPage = ceil($totalPageItems / $itemPerPage);
  echo '<ul class="pagination">';
  for ($i=1; $i <= $totalPage ; $i++) {
    echo "<li class='page-item'><a class='page-link'href='index.php?page=$i'>$i</a></li>";
  }
  echo '</ul>';
}
function generatesliceData($array,$pagenumber){
  $pagenumber = ($pagenumber-1) * 10 ;
  $slicedArray = array_slice($array,$pagenumber,10);
  return $slicedArray;
}
function getPageArray(){
  if(!empty($_GET['page'])){
    $page = $_GET['page'];
    return $page;
  }else{
    $page = 0;
    return $page;
  }
}
 ?>
