<?php
/**
 * Created by PhpStorm.
 * User: semprathlon
 * Date: 2/22/16
 * Time: 10:35
 */
?>
<div class="IndexPage">
    <header class="Hero WelcomeHero">
        <div class="container">
            <div class="containerNarrow"><h2 class="Hero-title">欢迎访问江南大学程序设计竞赛网站</h2>
                <div class="Hero-subtitle"></div>
            </div>
        </div>
    </header>
    <div id="IndexPageContainer" class="container">
        <nav id="IndexPage-nav" class="IndexPage-nav sideNav">
            <?php
            include_once "sidebar.php";
            ?>
        </nav>
        <div id="IndexPage-list" class="IndexPage-results  sideNavOffset">
            <?php
            include_once "list.php";
            ?>
        </div>
    </div>
</div>