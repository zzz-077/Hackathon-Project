<?php

include 'config.php';
// Check the connection
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

function getMainPosts($conn)
{
    if (isset($_GET['filterCat']) || isset($_GET['filterLoc']) || isset($_GET['filterBen'])) {
        $filterCat = isset($_GET['filterCat']) ? $_GET['filterCat'] : array();
        $filterLoc = isset($_GET['filterLoc']) ? $_GET['filterLoc'] : array();
        $filterBen = isset($_GET['filterBen']) ? $_GET['filterBen'] : array();

        $filterQuery = "SELECT * FROM SocialServiceTable WHERE 1=1";

        if (!empty($filterCat)) {
            $filterQuery .= " AND (";
            $orConditions = array();
            foreach ($filterCat as $value) {
                $orConditions[] = "categories LIKE '%" . $value . "%'";
            }
            $filterQuery .= implode(" OR ", $orConditions);
            $filterQuery .= ")";
        }

        if (!empty($filterLoc)) {
            $filterQuery .= " AND (";
            $orConditions = array();
            foreach ($filterLoc as $value) {
                $orConditions[] = "region LIKE '%" . $value . "%'";
            }
            $filterQuery .= implode(" OR ", $orConditions);
            $filterQuery .= ")";
        }

        if (!empty($filterBen)) {
            $filterQuery .= " AND (";
            $orConditions = array();
            foreach ($filterBen as $value) {
                $orConditions[] = "beneficiaries LIKE '%" . $value . "%'";
            }
            $filterQuery .= implode(" OR ", $orConditions);
            $filterQuery .= ")";
        }

        renderPostsIf($conn, $filterQuery);
    } else {
        renderPostsElse($conn);
    }
}

function renderPostsIf($conn, $filterQuery)
{
    $queryRun = mysqli_query($conn, $filterQuery);
    if (mysqli_num_rows($queryRun) > 0) {
        while ($row = mysqli_fetch_assoc($queryRun)) {
            // Render the posts as before
            echo '<div class="container-info" data-titlecontainer="' . $row['id'] . '">
            <div class="title" data-titlecontainer="' . $row['id'] . '">
                <div class="main-info" data-titlecontainer="' . $row['id'] . '">
                <p class="title-text" data-titlecontainer="' . $row['id'] . '">' . $row['title'] . '</p>
                <span class="more-info" data-titlecontainer="' . $row['id'] . '"><div class="small-section" data-titlecontainer="' . $row['id'] . '"><p class="span" data-titlecontainer="' . $row['id'] . '">ბენეფიციარები:</p> ' . $row['beneficiaries'] . '</div><div class="small-section" data-titlecontainer="' . $row['id'] . '"><p class="span" data-titlecontainer="' . $row['id'] . '">კატეგორია:</p> ' . $row['categories'] . '</div><div data-titlecontainer="' . $row['id'] . '" class="small-section"> <span class="span" data-titlecontainer="' . $row['id'] . '">ლოკაცია:</span> ' . $row['region'] . '</span></div>
                </div>
                <i class="fa-solid fa-caret-down plus-icon " id="icon-' . $row['id'] . '" data-titlecontainer="' . $row['id'] . '"></i>
            </div>
            <div class="description" id="' . $row['id'] . '" data-titlecontainer="' . $row['id'] . '">
                <p>
                ' . $row['service_description'] . '
                </p>
                <br />
                <a
                class="seeMorelink"
                target="_blank"
                href="' . $row['link'] . '"
                alt="დეტალურად ნახვა"
                >დეტალურად</a>
            </div>
    </div>';
        }
    } else {
        echo 'ინფორმაცია ვერ მოიძებნა';
    }
}

function renderPostsElse($conn)
{
    $products = "SELECT * FROM SocialServiceTable";
    $queryRun = mysqli_query($conn, $products);
    if (mysqli_num_rows($queryRun) > 0) {
        while ($row = mysqli_fetch_assoc($queryRun)) {
            echo '
     <div class="container-info" data-titlecontainer="' . $row['id'] . '">
             <div class="title" data-titlecontainer="' . $row['id'] . '">
                 <div class="main-info" data-titlecontainer="' . $row['id'] . '">
                 <p class="title-text" data-titlecontainer="' . $row['id'] . '">' . $row['title'] . '</p>
                 <span class="more-info" data-titlecontainer="' . $row['id'] . '"><div class="small-section" data-titlecontainer="' . $row['id'] . '"><p class="span" data-titlecontainer="' . $row['id'] . '">ბენეფიციარები:</p> ' . $row['beneficiaries'] . '</div><div class="small-section" data-titlecontainer="' . $row['id'] . '"><p class="span" data-titlecontainer="' . $row['id'] . '">კატეგორია:</p> ' . $row['categories'] . '</div><div data-titlecontainer="' . $row['id'] . '" class="small-section"> <span class="span" data-titlecontainer="' . $row['id'] . '">ლოკაცია:</span> ' . $row['region'] . '</span></div>
                 </div>
                 <i class="fa-solid fa-caret-down plus-icon " id="icon-' . $row['id'] . '" data-titlecontainer="' . $row['id'] . '"></i>
             </div>
             <div class="description" id="' . $row['id'] . '" data-titlecontainer="' . $row['id'] . '">
                 <p>
                 ' . $row['service_description'] . '
                 </p>
                 <br />
                 <a
                 class="seeMorelink"
                 target="_blank"
                 href="' . $row['link'] . '"
                 alt="დეტალურად ნახვა"
                 >დეტალურად</a>
             </div>
     </div>';
        }
    }
}
