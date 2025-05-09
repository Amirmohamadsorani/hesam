   
<?php
include("navbar.php")
?>
<div>
<?php
        include("connect.php");
        $b=mysqli_query($a,"SELECT * FROM `product`");
        mysqli_close($a);
?>
<table>
  <?php
  $counter = 0;
  $row=mysqli_fetch_array($b);
  while($row)
  {
    $counter++; ?>
              
              <td class="td01" > 
                <a href="sellform.php?id=<?php echo($row["id"]);?>">
      <img src="<?php echo($row["imageurl"]); ?>"  class="img-fluid img-thumbnail">
    </a>
</td>
<?php
             $row=mysqli_fetch_array($b);           
             if($counter % 3 == 0)
             echo("</tr><tr>");
          }
          if($counter % 3 != 0)
          { echo("</br>");
  echo("</tr>");
 
}
            ?>
                   
                  </table>
                </div>
                </div>
                    

                    <?php
include("footer.php");
?>
</div>
</body>
</html>