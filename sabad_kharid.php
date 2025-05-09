<?php
include("navbar.php")
?>
<?php
$id = $_SESSION["id"];
include("connect.php");
$b = mysqli_query($a, "SELECT * FROM `sellform` WHERE `idk`='$id'");
mysqli_close($a); 
?>
</br>
</br>

</br>

<div class="row">
    <div class="container px-4 px-lg-5">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center"></br>
                    <h2 class='alert alert-success' role='alert'>سبد خرید</h2>
                    <hr class="divider"/>
                </div>

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
      <div class="cell"> قیمت کل </div>
    

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
  <div class="cell"><?php echo($row["totalprice"]);  ?> </div>
            <?php
             $row=mysqli_fetch_array($b);
            }
            ?>
</div>
</div>
</div>
</br>
</br>
            </div>
        </div>
    </div>
</div>

<?php
include("footer.php");
?>

</body>
</html>
