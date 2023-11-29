<div class="row mt-2 mx-auto">
    <div class="col-md-12">
        <?php

        if (isset($_GET['totalRows_rs'])) {
            $totalRows_rs = $_GET['totalRows_rs'];
        } else {
            $all_rs = $link->query($queryFirst);
            $totalRows_rs = $all_rs->rowCount();
        }
        $totalPages_rs = ceil($totalRows_rs / $maxRows_rs) - 1;

        $prev_rs = "&laquo;";
        $next_rs = "&raquo;";
        $separator = "|";
        $max_links = 20;
        $pages_rs = buildNavigation($pageNum_rs, $totalPages_rs, $prev_rs, $next_rs, $separator, $max_links, true, 3, "rs");

        ?>



        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <!-- <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li> -->
                <?php echo $pages_rs[0] . $pages_rs[1] . $pages_rs[2]; ?>
            </ul>
        </nav>
    </div>
</div>