<?php include 'includes/header.php' ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <p class="header">DOTA Timer</p>
            </div>
        </div>

            <?php
                if ($f1 = fopen('sources/newsHeadline.txt', 'r')){
                    while (!feof($f1)) {
                        $lineHeader = fgets($f1);
                        echo "<div class=\"row\"> <div class=\"col newsHeadline\">" . strtoupper($lineHeader) . "</div> </div>";

                        if ($f2 = fopen('sources/newsContent.txt', 'r')) {
                            while (!feof($f2)) {
                                $lineContent = fgets($f2);
                                echo "<div class=\"row\"> <div class=\"col newsContent\">" . $lineContent . "</div> </div>";
                            }
                        }

                    }
                fclose($f1);
                fclose($f2);
                }
            ?>
    </div>

<?php include 'includes/footer.php' ?>