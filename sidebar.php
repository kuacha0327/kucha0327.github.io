<div class="sidebar">
    <form name="search" id="search" action="goods.php" method="get">
        <div class="input-group">
            <input type="text" name="search_name" class="form-contorl" placeholder="Search..." value="<?php echo (isset($_GET['search_name'])) ? $_GET['search_name'] : ''; ?>" required style="width: 200px;">
            <span class="input-group-btn"><button class="btn btn-default" type="submit">
                    <i class="fas fa-search fa-lg"></i>
                </button></span>
        </div>
    </form>
</div>

<!-- 產品第一層 -->
<?php
$SQLstring = "SELECT * FROM pyclass WHERE level=1 ORDER BY sort";
$pyclass01 = $link->query($SQLstring);
$i = 1;
?>
<div class="accordion" id="accordionExample">

    <?php while ($pyclass01_Rows = $pyclass01->fetch()) {
    ?>
        <div class="card">
            <div class="card-header" id="headingOne<?php echo $i; ?>">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left qq" type="button" data-toggle="collapse" data-target="#collapseOne<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne<?php echo $i; ?>">
                        <i class="fas <?php echo $pyclass01_Rows['fonticon']; ?> fa-lg fa-fw"></i><?php echo $pyclass01_Rows['cname']; ?>
                    </button>
                </h2>
            </div>
            <?php
            if (isset($_GET['p_id'])) {
                $SQLstring = sprintf("SELECT uplink FROM pyclass,product WHERE pyclass.classid=product.classid AND p_id=%d", $_GET['p_id']);
                $classid_rs = $link->query($SQLstring);
                $data = $classid_rs->fetch();
                $ladder = $data['uplink'];
            } elseif (isset($_GET['level']) && $_GET['level'] == 1) {
                $ladder = $_GET['classid'];
            } elseif (isset($_GET['classid'])) {
                $SQLstring = "SELECT uplink FROM pyclass WHERE level=2 AND classid=" . $_GET['classid'];
                $classid_rs = $link->query($SQLstring);
                $data = $classid_rs->fetch();
                $ladder = $data['uplink'];
            } else {
                $ladder = 1;
            }
            ?>
            <!-- 產品第二層 -->
            <?php
            $SQLstring = sprintf("SELECT * FROM pyclass WHERE level=2 and uplink=%d ORDER BY sort", $pyclass01_Rows['classid']);
            $pyclass02 = $link->query($SQLstring);
            ?>
            <div id="collapseOne<?php echo $i; ?>" class="collapse  <?php echo ($i == $ladder) ? 'show' : ''; ?>" aria-labelledby="headingOne<?php echo $i; ?>" data-parent="#accordionExample">
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <?php while ($pyclass02_Rows = $pyclass02->fetch()) { ?>
                                <tr>
                                    <td><em class="fa <?php echo $pyclass02_Rows['fonticon']; ?>"></em> <a href="goods.php?classid=<?php echo $pyclass02_Rows['classid']; ?>"><?php echo $pyclass02_Rows['cname']; ?></a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php $i++;
    } ?>
</div>