<div class="container-fulid">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <a class="navbar-brand logo_text" href="index.php">
                    Renaissance
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                $SQLstring = "SELECT * FROM pyclass WHERE level=2 ORDER BY sort";
                $pyclass01 = $link->query($SQLstring);
                $i = 1;
                ?>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                Goods
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="goods.php">ALL</a>
                                <div class="dropdown-divider"></div>
                                <?php while ($pyclass01_Rows = $pyclass01->fetch()) {
                                ?>

                                    <a class="dropdown-item ch_text" href="#"><?php echo $pyclass01_Rows['cname']; ?></a>
                                <?php } ?>
                            </div>
                        </li>
                        <?php
                        $SQLstring = "SELECT * FROM pyclass WHERE level=3 ORDER BY sort";
                        $pyclass02 = $link->query($SQLstring);
                        $i = 1;
                        ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                Brands
                            </a>
                            <div class="dropdown-menu">
                                <?php while ($pyclass02_Rows = $pyclass02->fetch()) {
                                ?>
                                    <a class="dropdown-item" href="#"><?php echo $pyclass02_Rows['cname']; ?></a>
                                    <div class="dropdown-divider"></div>
                                <?php } ?>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                        <li class="nav-item">
                            <a class="nav-link disabled">|</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="far fa-user" style="padding-left:5px;"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-shopping-bag"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>