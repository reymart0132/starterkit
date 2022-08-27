<?php
function printAllAccount($accounts){
//PRINT TABLE OPENING AND THEAD WITH TH
  foreach ($accounts as $account) {
    // CODE BLOCK FOR IF ADMIN OR NOT ADMIN. PRINT SECONDARY IF ADMIN AND INFO IF NOT ADMIN
    // if(){
    // }else{
    // }

    // echo uname
    // echo pword
    // echo fname
    // echo type
    echo "<td>".printAllLikes($account)."</td>";
    echo '</tr>';
  }
  echo '</table>';
}

function printAllLikes($account){
//CODE BLOCK FOR GETTING ALL LIKES OF AN ACCOUNT
}

function generatePage($accounts){
  $totalPageItems = count($accounts);
  $itemPerPage = 10;
$totalPage = ceil(/* ROUND UP FORMULA FOR TOTAL PAGE*/);
  echo '<ul class="pagination">';
  for ($i=1; $i <= $totalPage ; $i++) {
    echo "<li class='page-item'><a class='page-link'href='index.php?page=$i'>$i</a></li>";
  }
  echo '</ul>';
}
function generatesliceData($array,$pagenumber){
  $pagenumber = //formula to get page number is $GET page number -1 then the sum is multiplied by ten
  $slicedArray = array_slice($array,$pagenumber,10);
  return $slicedArray;
}
function getPageArray(){
  if(!empty($_GET['page'])){
    //GET PAGE
    return $page;
  }else{
    //VARIABLE TO PAGE 0
    return $page;
  }
}
 ?>
