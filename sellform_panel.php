<?php
include("navbar.php")
?>
<div class="row">
<div class="container px-4 px-lg-5">
<div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center"></br>
                        <h2 class='alert alert-success'  role='alert'>لیست خریداران </h2>
                        <hr class="divider"/>
                        </div>
                        <div></div>
<div></div>


<?php
include("connect.php");
$b=mysqli_query($a,"SELECT * FROM `sellform`");
mysqli_close($a);
?>
<div class="col-lg-10 mx-auto">
    <div class="table-responsive">
      <div class="table4">
      <div class="cell"> اسم محصول</div>
      <div class="cell"> نام کاربری</div>
      <div class="cell"> متراژ</div>
      <div class="cell"> قیمت</div>
      <div class="cell"> شماره تماس</div>
      <div class="cell"> آدرس</div>
      <div class="cell">ایمیل </div>
      <div class="cell">حذف محصول </div>

            <?php
            $row=mysqli_fetch_array($b);
            while($row)
            {
                ?>       
  <div class="cell"> <?php echo($row["name"]);  ?></div>
  <div class="cell"> <?php echo($row["username"]);  ?> </div>
  <div class="cell"><?php echo($row["meter"]);  ?> </div>
  <div class="cell"> <?php echo($row["ghymat"]);  ?> </div>
  <div class="cell"><?php echo($row["mobile"]);  ?>  </div>
  <div class="cell"><?php echo($row["address"]);  ?> </div>
  <div class="cell"> <?php echo($row["email"]);  ?></div>
  <div class="cell">          <button class="btn btn-outline-secondary"><a class="lk" href="selldelete.php?id=<?php echo($row["id"]); ?>" id="n1">delete</a></button></div>
            <?php
             $row=mysqli_fetch_array($b);
            }
            ?>
</div>
</div>
</br>
</br>

<?php
include("footer.php");
?>