<?php
$linkActiveTags = 'class="nav-link active" aria-current="page"';
$linkTags = 'class="nav-link"';
?>
            </div>
        </main>
        <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">TennisMatch.me</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a
                                <?php echo ($page == 'home' ? $linkActiveTags : $linkTags);?>
                                href="index.php"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a href="faq.php" <?php echo ($page == 'faq' ? $linkActiveTags : $linkTags);?>>FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a href="privacy-policy.php" <?php echo ($page == 'privacy' ? $linkActiveTags : $linkTags);?>
                                >Privacy Policy</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>
