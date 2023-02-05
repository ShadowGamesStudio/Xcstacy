<?php
    require("../../config/config.php");

    // insert reveiw into db

        $stars = $_POST['stars'];
        $review_msg = $_POST['review_msg'];

            if (empty($stars) && empty($review_msg)) {
                header("Location: ../../store/added mdma capsules 90mg review.html?error");
            }else {
                $add_review_sql = "INSERT INTO mdma_capsule_reviews(stars, review_msg)
                VALUES('$stars', '$review_msg');";
                mysqli_query($conn, $add_review_sql);
                header("Location: ../../store/added mdma capsules 90mg review.html?success");
            }
                


?>