<?php
public function viewPendingVer(){
  $config = new config;
  $con = $config->con();
  $user = new User();
  $id1 = $user->data()->id;
  $sql = "SELECT * FROM `tbl_verification` WHERE `remarks` = 'PENDING' AND `assignee` = '$id1'";
  $data = $con-> prepare($sql);
  $data ->execute();
  $rows =$data-> fetchAll(PDO::FETCH_OBJ);
      // var_dump($rows);

   // paginationqueryhere
   $limit = 10;

   if (!isset($_GET['Ppage'])) {
         $page = 1;
     } else{
         $page = $_GET['Ppage'];
   }

   if(isset($_GET['Ppage']) > 1){
     $_GET['V1page'] = 1;
     $_GET['PRpage'] = 1;
     $_GET['V2page'] = 1;
     $_GET['Rpage'] = 1;
   }

   $start = ($page-1)*$limit;

   $total_results = $data->rowCount();
   $total_pages = ceil($total_results/$limit);

   $sql2 = "SELECT * FROM `tbl_verification` WHERE `remarks` = 'PENDING' AND `assignee` = '$id1' LIMIT $start,$limit";
   $data2 = $con-> prepare($sql2);
   $data2 ->execute();
   $rows2 =$data2-> fetchAll(PDO::FETCH_OBJ);

   echo '<table class="table table-bordered table-sm table-hover table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl mb-5" style="width:100%;">';
   echo '<thead class="thead" style="background-color:#DC65A1;">';
   echo '
   <th class="text-center" style= "font-weight:bold; color:white;">Full Name</td>
   <th class="text-center" style= "font-weight:bold; color:white;">College</td>
   <th class="text-center" style= "font-weight:bold; color:white;">Course</td>
   <th class="text-center" style= "font-weight:bold; color:white;">Status</td>
   <th class="text-center" style= "font-weight:bold; color:white;">Graduation Date</td>
   <th class="text-center" style= "font-weight:bold; color:white;">Date Received</td>
   <th class="text-center" style= "font-weight:bold; color:white;">Due Date</td>
   <th class="text-center" style= "font-weight:bold; color:white;" colspan="2">Actions</td>
   ';
   echo '</thead>';

   foreach ($rows2 as $row) {
     echo '<tr>';
       // echo '<td class="text-center">'.$row ->id.'</td>';
       $type = $row->formtype;
       $due= $row->Due_Date;
       $due2 = strtotime($due);
       $date_diff = 60*60*24*2;

       if ($due2 < time()+$date_diff) {
         echo '<td class="text-center" style="color:white; background-color:#ff5757">'.$row->fullname.'</td>';
         echo '<td class="text-center" style="color:white; background-color:#ff5757">'.$row->college.'</td>';
         echo '<td class="text-center" style="color:white; background-color:#ff5757">'.$row->course.'</td>';
         echo '<td class="text-center" style="color:white; background-color:#ff5757">'.$row->status.'</td>';
         echo '<td class="text-center" style="color:white; background-color:#ff5757">'.$row->dategrad.'</td>';
         echo '<td class="text-center" style="color:white; background-color:#ff5757">'.$row->date_recieved.'</td>';
         echo '<td class="text-center" style="color:white; background-color:#ff5757">'.$row->duedate.'</td>';
         echo '<td class="text-center" style="color:white; background-color:#ff5757"><a class="btn bg-light btn-outline-success" href="pending.php?printed='.$row->id.'&id='.$user->data()->id.'&tab=view">Printed </a></br></td>';
         echo '<td class="text-center"  style="color:white; background-color:#ff5757"><a class="btn bg-light btn-outline-success" href="editTransaction.php?pid='.$row->pid.'&id='.$user->data()->id.'&tab=view&act=pending">Edit</a></br></td>';

           echo '</tr>';
      }else {
          echo '<td class="text-center" style="color:white; background-color:#DC65A1">'.$row->fullname.'</td>';
          echo '<td class="text-center" style="color:white; background-color:#DC65A1">'.$row->college.'</td>';
          echo '<td class="text-center" style="color:white; background-color:#DC65A1">'.$row->course.'</td>';
          echo '<td class="text-center" style="color:white; background-color:#DC65A1">'.$row->status.'</td>';
          echo '<td class="text-center" style="color:white; background-color:#DC65A1">'.$row->dategrad.'</td>';
          echo '<td class="text-center" style="color:white; background-color:#DC65A1">'.$row->date_recieved.'</td>';
          echo '<td class="text-center" style="color:white; background-color:#DC65A1">'.$row->duedate.'</td>';z
       echo '<td class="text-center style="color:#DC65A1;" style="color:white;"><a class="btn bg-light btn-outline-success" href="pending.php?printed='.$row->id.'&id='.$user->data()->id.'&tab=view">Printed </a></br></td>';
       echo '<td class="text-center"><a class="btn btn-outline-success" href="editTransaction.php?pid='.$row->pid.'&id='.$user->data()->id.'&tab=view&act=pending">Edit</a></br></td>';
       echo '</tr>';
       }
     }
     echo '</table>';

     echo '<ul class="pagination  ml-2 ">';
     for ($p=1; $p <=$total_pages; $p++) {
      echo '<li id = "pagelink" class="page-item">';
      echo  '<a class= "page-link" href="?tab=view&Ppage='.$p.'">'.$p;
      echo  '</a>';
      echo '</li>';
     }
     echo '</ul>';

     echo '
     <div class="container-fluid mt-4">
      <form class="" action="" method="get">
        <div class="row">
          <div class="col-sm">
            <label for="dateFrom">From:</label>
            <input  class="form-control" type="date" name="dateFrom" id="startDate"  onkeydown="return false"  data-date-format="YYYY MMMM DD" placeholder="dd-mm-yyyy">
          </div>
          <div class="col-sm">
            <label for="dateTo">To:</label>
            <input  class="form-control" type="date" name="dateTo" id="endDate"  onkeydown="return false" placeholder="dd-mm-yyyy">
          </div>
          <div class="col-sm">
            <label for="criteria">Filter By:</label>
            <select class="form-control" name="criteria">
             <option value="FirstName">First Name</option>
              <option value="LastName">Last Name</option>
              <option value="Course">Course</option>
              <option value="Status">Status</option>
            </select>
          </div>
          <div class="col-sm mt-2">
            <label for="search"></label>
            <input class="form-control" type="text" name="search" placeholder="Search Here.."/>
          </div>
          <div class="col-sm mt-4 pt-2">
            <label for="submit"></label>
            <input type="submit" class="btn text-white" name="submitPending" value="Submit" style="background-color:#DC65A1;">
          </div>
        </div>
      </form>
  </div>';

}
 ?>
