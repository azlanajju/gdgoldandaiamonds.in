<?php
session_start(); 

if (!isset($_SESSION['user_id']) || !isset($_SESSION['email'])) {
    header("Location: ../login.php");
    exit;
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Popups Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <!-- Dashboard -->
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
        <!-- Vertical Navbar -->
        <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
            <div class="container-fluid">
                <!-- Toggler -->
                <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Brand -->
                <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
                    <img src="../images/gdlogo.png" alt="Logo">
                    GD Gold & Diamonds
                </a>
                <!-- User menu (mobile) -->
                <div class="navbar-user d-lg-none">
   
                </div>
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">
                                <i class="bi bi-house"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="../Trending_Collections/TrendingCollections.php">
                                <i class="bi bi-bar-chart"></i> Trending Collections
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Collections/Collections.php">
                                <i class="bi bi-chat"></i> Collections
                                <span class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-auto">6</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="../CollectionItems/CollectionItems.php">
                                <i class="bi bi-bookmarks"></i> Collection Items
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Testimonials/Testimonials.php">
                                <i class="bi bi-people"></i> Testimonials
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Social Media/Social_media.php">
                                <i class="bi bi-people"></i> Social Media Links
                            </a>
                        </li>
                        <li class="nav-item active ">
                            <a class="nav-link active" href="../Popups/Popups.php">
                                <i class="bi bi-people"></i> Popups
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../Subscribers/Subscribers.php">
                                <i class="bi bi-people"></i> Subscribers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Faqs/Faqs.php">
                                <i class="bi bi-people"></i> Faqs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Users/Users.php">
                                <i class="bi bi-people"></i> Users
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="navbar-divider my-5 opacity-20">

                    <!-- Push content down -->
                    <div class="mt-auto"></div>
                    <!-- User (md) -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-person-square"></i> Account
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="../logout.php">
                            <i class="bi bi-box-arrow-left"></i> Logout
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Main content -->
        <div class="h-screen flex-grow-1 overflow-y-lg-auto">
            <header class="bg-surface-primary border-bottom pt-6">
                <div class="container-fluid">
                    <div class="mb-npx">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                                <h1 class="h2 mb-0 ls-tight">PopUps</h1>
                            </div>
                            <div class="col-sm-6 col-12 text-sm-end">
                                <div class="mx-n1">
                                    <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1">
                                        <span class=" pe-2">
                                            <i class="bi bi-pencil"></i>
                                        </span>
                                        <span>Edit</span>
                                    </a>
                                    <a href="./Add-Popups.php" class="btn d-inline-flex btn-sm btn-primary mx-1">
                                        <span class=" pe-2">
                                            <i class="bi bi-plus"></i>
                                        </span>
                                        <span>Create</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs mt-4 overflow-x border-0">
                            <li class="nav-item">
                                <a href="Popups.php" class="nav-link active">PopUps</a>
                            </li>
                            <li class="nav-item">
                                <a href="./Add-Popups.php" class="nav-link font-regular">Add New</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
            <!-- Main -->
            <div class="container mt-5">
                <h2>Popups List</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Popup ID</th>
                            <th>Image URL</th>
                            <th>Title</th>
                            <th>Link URL</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("../config.php");

                        // Fetch all popups from the database
                        $sql = "SELECT * FROM popups";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // Output data for each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>" . htmlspecialchars($row['popup_id']) . "</td>
                                        <td><a href='" . htmlspecialchars($row['popup_image']) . "' target='_blank'>View Image</a></td>
                                        <td>" . htmlspecialchars($row['title']) . "</td>
                                        <td><a href='" . htmlspecialchars($row['link_url']) . "' target='_blank'>Open Link</a></td>
                                        <td>" . htmlspecialchars($row['created_at']) . "</td>
                                        <td>
                                    <a href='Delete_Popups.php?id=" . $row['popup_id']  . "' class='btn d-inline-flex btn-sm btn-danger border-base mx-1'>
                                        <span class='pe-2'>
                                            <i class='bi bi-trash'></i>
                                        </span>
                                        <span>Delete</span>
                                    </a>
                                </td>
                                      </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>No popups found</td></tr>";
                        }

                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        </div>
    </div>
</body>

</html>