<?php

$base_url= 'http://' . $_SERVER['HTTP_HOST'] . '/aula0607';

?>


<aside>
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">

        <div class="user">
            <div class="img-user">
                <img src="<?= $base_url?>/img/user.png" alt="User image">
            </div>
            <span class=" fs-4">
                <?php
                    echo $_SESSION['usuario_nome'];
                ?>
            </span>
        </div>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link active" aria-current="page">

                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">

                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <span>Orders</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    
                    <span>Products</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <span>Customers</span>
                </a>
            </li>

        </ul>
        <hr class="line">
        <div class="last-item">
            <a href="../../actions/logout.php" class="nav-link text-white">
                <i class="bi bi-box-arrow-left"></i>
                <span>Exit</span>
            </a>
        </div>
    </div>

</aside>