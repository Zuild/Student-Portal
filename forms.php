<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>FORMS</title>
    <link rel="stylesheet" href="css/index2.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- SideBar-Menu CSS -->
    <link rel="stylesheet" href="css/index2.css">
    <script>
        $(document).ready(function() {
            $(".hamburger .hamburger__inner").click(function() {
                $(".wrapper").toggleClass("active")
            })

            $(".top_navbar .fas").click(function() {
                $(".profile_dd").toggleClass("active");
            });
        })
    </script>
</head>

<body>

    <div class="wrapper">
        <div class="top_navbar">
            <div class="hamburger">
                <div class="hamburger__inner">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>
            </div>
            <div class="menu">
                <div class="logo">
                    MIIT-TECH SCHOOL PORTAL
                </div>
                <div class="right_menu">
                    <ul>
                        <li><i class="fas fa-user"></i>
                            <div class="profile_dd">
                                <div class="dd_item">Profile</div>
                                <div class="dd_item">Change Password</div>
                                <div class="dd_item"><a href="logout.php">Logout</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="main_container">
            <div class="sidebar">
                <div class="sidebar__inner">
                    <div class="profile">
                        <div class="img">
                            <img src="images/miit.png" alt="profile_pic">
                        </div>
                        <div class="profile_info">
                            <p>Welcome</p>
                            <p class="profile_name">Alex John</p>

                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="index.php">
                                <span class="icon"><i class="fas fa-dice-d6"></i></span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="forms.php" class="active">
                                <span class="icon"><i class="fab fa-delicious"></i></span>
                                <span class="title">Forms</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon"><i class="fab fa-elementor"></i></span>
                                <span class="title">UI Elements</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon"><i class="fas fa-chart-pie"></i></span>
                                <span class="title">Charts</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon"><i class="fas fa-border-all"></i></span>
                                <span class="title">Tables</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container">

                <header class="intro">
                    <div class="action">
                        <a href="https://www.codehim.com/menu/css-sidebar-navigation-menu-with-icons/" title="Back to download and tutorial page" class="btn back">Back to Tutorial</a>
                        <a href="https://github.com/codingmarket07/SideBar-Menu-N19" title="View, Fork or Star on GitHub" class="btn github">View on GitHub</a>
                    </div>
                </header>


                <div class="item">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab a nesciunt doloribus. Explicabo minus cumque, molestiae tempore repellendus iusto enim maiores pariatur officiis perferendis excepturi, ut dolore laborum eligendi laudantium placeat aspernatur! Quos dolorum unde officiis labore est animi excepturi neque, provident, inventore nobis expedita facilis aspernatur, nihil in atque?
                </div>
                <div class="item">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab a nesciunt doloribus. Explicabo minus cumque, molestiae tempore repellendus iusto enim maiores pariatur officiis perferendis excepturi, ut dolore laborum eligendi laudantium placeat aspernatur! Quos dolorum unde officiis labore est animi excepturi neque, provident, inventore nobis expedita facilis aspernatur, nihil in atque?
                </div>
                <div class="item">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab a nesciunt doloribus. Explicabo minus cumque, molestiae tempore repellendus iusto enim maiores pariatur officiis perferendis excepturi, ut dolore laborum eligendi laudantium placeat aspernatur! Quos dolorum unde officiis labore est animi excepturi neque, provident, inventore nobis expedita facilis aspernatur, nihil in atque?
                </div>

            </div>
        </div>

    </div>
    <footer class="credit">Author: <a href="https://www.youtube.com/c/CodingMarket" rel="nofollow" target="_blank"><a title="Awesome web design code & scripts" href="https://www.codehim.com?source=demo-page" target="_blank"></a></footer>

</body>

</html>