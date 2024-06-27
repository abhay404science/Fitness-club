
                <div class="card" style="margin-left:-10px;width:1230px;">
              <div class="card-header" style="margin-left:0px;;">
                <h3 style="font-weight:bold" class="card-title">About Section</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="width:1230px">
                <table class="table table-bordered"  style="width:1200px;">
                  <thead>
                    <tr>
                    <th scope="col">S.No</th>
      <th scope="col">Heading</th>
      <th scope="col">Description</th>
      <th scope="col">Video</th>
      <th scope="col">Edit</th>
    
                    </tr>
                  </thead>
                  <tbody>
    <?php
    $x = 0;
    $sql = "SELECT * FROM about where id = 1";
    $result = $con->query($sql);
    while ($row = $result->fetch_assoc()) {
      $id = $row['id'];
      $path = $row['query'];
      $query = $row['qid'];
      $path = $row['query'];
      $query = $row['qid'];
      $heading =  $row['heading'];
      $detail =  $row['caption'];
      $link = $row['Ylink'];
    //    echo $id;
    //    echo $row['image'];
  
    
    
    //    echo '<tr>';
    //    echo '$image';
       echo '<th scope="row">'.++$x.'</th>';
      echo '<td>'.$heading.'</td>';
      echo '<td>'.$detail.'</td>';
    
      echo   '<td><iframe class = "embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/'.$path.'?'.$query.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>';

       echo '<td><a href="aboutEdit.php?id='.$id.'"name="edit" value="add" class="btn btn-block btn-success"><i class="fas fa-edit"></i></a></td>';
      //  echo '<td><a   href="serviceDelete.php?id='.$id.'"name="delete" value="add" class="btn btn-block btn-danger nocyrus"><i class="fas fa-trash-alt"></i> </a></td>';
     echo '</tr>';

    }



    
    ?>
  
   
  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix" style="width:1230px">
              
              </div>