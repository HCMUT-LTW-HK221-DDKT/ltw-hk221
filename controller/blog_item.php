<?php
    require_once "database.php";
    $query = "select * from blog";
    $res = mysqli_query($conn,$query);

    while ($row = mysqli_fetch_assoc($res)){
        $id = $row['id'];
        $date = $row['date'];
        $desc = $row['description'];
        $img = $row['img'];
        $url = $row['url'];
?>

    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="blog__item">
            <a
                href="#">
                <div class="blog__item__pic set-bg"
                    data-setbg="img/<?=$img?>"
                    style="background-image: url(&quot;img/<?=$img?>&quot;);">
                </div>
            </a>
            <div class="blog__item__text">
                <span><img src="img/calendar.png" alt> <?php echo $date?></span>
                <a
                    href="#">
                    <h5><?php echo $desc?>
                    </h5>
                </a>
                <a href="<?=$url?>"
                    class="btn-read">Xem thêm</a>
            </div>
        </div>
    </div>

<?php
    }
?>