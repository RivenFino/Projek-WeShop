<?php
    include_once("function/helper.php");
    $page = isset($_GET['page']) ? $_GET['page'] : false;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Telkom Shop | Home</title>
        <link rel="stylesheet" href="<?php echo BASE_URL."css/style.css"; ?>" type="text/css"-->
        <link href="image/logo1.png" rel="shortcut icon">
        <!--link rel="stylesheet" href="css/style.css"-->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/> 
        <link rel="stylesheet" href="css/footer.css" type="text/css">
    </head>

    <body>
        <header>
            <div class="logo">
                <a href="<?php echo BASE_URL."index.php";?>">
                    <img src="<?php echo BASE_URL."image/logo.png";?>" alt="logo" height="auto" width="80">
                    <h1><span></span></h1>
                </a>
            </div>

            <div class="search">    
                <form action="" method="post">
                    <input type="text" name="search" placeholder="Cari sesuatu">
                    <button><span><img src="<?php echo BASE_URL."image/search.png";?>" alt="" height="20px" width="auto"></span></button>
                </form>
            </div>
            
            <div class="menu">
                
                <div class="keranjang">
                    <a href=""><img src="<?php echo BASE_URL."image/cart.png?>";?>" alt="Cart" height="20px" width="auto"></a>
                </div>
                    
                <div class="vertical-hr"></div>

                <div id="user" class="user">
                    <a href="<?php echo BASE_URL."index.php?page=login";?>"><span>Login</span></a>
                    <a href="<?php echo BASE_URL."index.php?page=register";?>"><span>Register</span></a>
                </div>
            </div>
        </header>
        <div id="container">
            <div class="content">
                <?php 
                    $filename = "$page.php";
                    if(file_exists($filename))
                    {
                        include_once($filename);
                    }
                    else
                    {
                        echo "Maaf, file tersebut tidak ada di dalam system";
                    }
                ?>
            </div>
        </div>

        <!-------------------------------------- Footer --------------------------------------------->

        <footer class="footer">
            <div class="container-footer">
                <div class="row">
                    <div class="footer-col">
                        <h4>Tentang kami</h4>
                        <ul>
                            <li><a href="#">Tim</a></li>
                            <li><a href="#">kontak kami</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Projek kami</h4>
                        <ul>
                            <li><a href="#">Blok 2</a></li>
                            <li><a href="#">Blok 3</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Media Sosial</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-tiktok"></i></a>
                            <a href="#"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                    <div class="footer-col">
                        <p>Copyright TelShop 2023</p>
                    </div>
                </div>
            </div>
        </footer>

    </body>
</html>