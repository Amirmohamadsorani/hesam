
<?php
include("navbar.php")
?>
<?php
?>
<div class="row">
<div class="container px-4 px-lg-5">
<div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center"></br>
                    </br>
                    </br>
                        <h2 class='alert alert-success'  role='alert'>لیست محصولات</h2>
                        <hr class="divider" />
                        <?php
include("connect.php");
$b=mysqli_query($a,"SELECT * FROM `product`");
mysqli_close($a);
?>
<div class="table">


            <?php
            $row=mysqli_fetch_array($b);
            while($row)
            {
                ?>
                   
     </td>
    </tr>
  </div>
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-13">
        <img src="<?php echo($row["imageurl"]); ?>" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="d-flex justify-content-center">
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"> <?php echo($row["name"]);  ?></h5>
          <p class="card-text"><?php echo($row["explane"]);  ?></p>
          <p class="card-text"><small class="text-body-secondary"><?php echo($row["ghymat"]);  ?> </small></p>
          <button class="btn btn-outline-secondary"><a class="lk" href="cityedit.php?id=<?php echo($row["id"]); ?>" id="n2">edit</a></button>
          <button class="btn btn-outline-secondary"><a class="lk" href="citydelete.php?id=<?php echo($row["id"]); ?>" id="n1">delete</a></button>
        </div>
      </div>
    </div>
    
    </div>
    <?php
    $row=mysqli_fetch_array($b);
            }
            ?>
    </div>
    </div>
    </div>
  </div>
    </div>
</div>
</div>
                </div>
            </div>
</div>
</div>
<?php
include("footer.php");
?>
