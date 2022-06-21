<?php require('module/head.inc.php') ?>
<?php require('module/Indexstyle.inc.php') ?>
</style>
<?php require('module/header.inc.php')?>
<?php require('module/bodyIndex.inc.php') ?>
<?php require('module/script.inc.php') ?>
<script>
    document.querySelector('nav').classList.toggle("navbar-light");
    document.querySelector('nav').classList.toggle("navbar-dark");
    navbar = document.querySelector(".navbar")
    text = document.querySelectorAll(".textNav")
    window.onscroll = () => {

        if (
            document.documentElement.scrollTop > 150
        ) {
            navbar.style.backgroundColor = "white";
            text.forEach((e) => {
                e.style.color = "black";
            })
        } else {
            text.forEach((e) => {
                e.style.color = "white";
            })
            navbar.style.backgroundColor = "transparent";
        }
    };
</script>