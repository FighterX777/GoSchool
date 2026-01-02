<?php include("../assets/noSessionRedirect.php"); ?>
<?php include("./verifyRoleRedirect.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Panel</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="shortcut icon" href="./images/logo.png">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        header {
            position: relative !important;
        }
        main {
            padding: 2rem;
        }
        .bus-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        .bus-card {
            background: var(--color-white);
            padding: 1.5rem;
            border-radius: 1rem;
            box-shadow: 0 2rem 3rem var(--color-light);
            border-left: 4px solid #54cb54;
            transition: all 0.3s ease;
        }
        .dark-theme .bus-card {
            background: var(--color-dark);
        }
        .bus-card:hover {
            box-shadow: none;
        }
        .bus-card h3 {
            margin-bottom: 0.5rem;
            color: var(--color-dark);
        }
        .dark-theme .bus-card h3 {
            color: var(--color-white);
        }
        .bus-card h4 {
            color: var(--color-dark);
            font-size: 1rem;
        }
        .dark-theme .bus-card h4 {
            color: var(--color-white);
        }
        .bus-card p {
            color: var(--color-dark) !important;
        }
        .dark-theme .bus-card p {
            color: var(--color-white) !important;
        }
        .bus-card small {
            color: var(--color-dark) !important;
        }
        .dark-theme .bus-card small {
            color: var(--color-white) !important;
        }
        .bus-card .text-muted {
            color: var(--color-dark) !important;
        }
        .dark-theme .bus-card .text-muted {
            color: var(--color-white) !important;
        }
        .bus-card strong {
            color: var(--color-dark) !important;
        }
        .dark-theme .bus-card strong {
            color: var(--color-white) !important;
        }
        .bus-route-item {
            padding: 0.8rem 1rem;
            border-left: 3px solid var(--color-light);
            margin-left: 1rem;
            margin-bottom: 0.5rem;
            position: relative;
            background: var(--color-background);
            border-radius: 0.5rem;
            color: var(--color-dark);
        }
        .dark-theme .bus-route-item {
            background: var(--color-dark-variant);
            color: var(--color-white);
        }
        .bus-route-item strong {
            color: var(--color-dark);
        }
        .dark-theme .bus-route-item strong {
            color: var(--color-white);
        }
        .bus-route-item:before {
            content: '';
            position: absolute;
            left: -8px;
            top: 50%;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #54cb54;
            border: 2px solid var(--color-white);
        }
        .dark-theme .bus-route-item:before {
            border-color: var(--color-dark);
        }
        .bus-route-item:last-child {
            border-left-color: transparent;
        }
        .staff-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.8rem 1rem;
            margin-bottom: 0.5rem;
            background: var(--color-background);
            border-radius: 0.5rem;
            border-left: 3px solid var(--color-primary);
            color: var(--color-dark);
        }
        .dark-theme .staff-info {
            background: var(--color-dark-variant);
            color: var(--color-white);
        }
        .staff-info strong {
            color: var(--color-dark);
        }
        .dark-theme .staff-info strong {
            color: var(--color-white);
        }
        .btn {
            padding: 0.8rem 1.5rem;
            border-radius: 0.5rem;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .btn-primary {
            background: var(--color-primary);
            color: white;
        }
        .btn-primary:hover {
            background: var(--color-primary-variant);
        }
        .alert {
            padding: 1.5rem;
            border-radius: 1rem;
            margin-bottom: 1rem;
        }
        .alert-info {
            background: #e3f2fd;
            color: #1976d2;
        }
        .alert-warning {
            background: #fff3e0;
            color: #f57c00;
        }
        .pending-container {
            text-align: center;
            padding: 3rem;
        }
        .pending-img {
            max-width: 300px;
        }
        @media screen and (max-width: 768px) {
            .bus-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="./images/logo.png" alt="">
            <h2>S<span class="danger">M</span>S</h2>
        </div>
        <div class="navbar">
            <a href="index.php">
                <span class="material-icons-sharp">home</span>
                <h3>Home</h3>
            </a>
            <a href="timetable.php">
                <span class="material-icons-sharp">today</span>
                <h3>Time Table</h3>
            </a>
            <a href="exam.php">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Examination</h3>
            </a>
            <a href="workspace.php">
                <span class="material-icons-sharp">description</span>
                <h3>Workspace</h3>
            </a>
            <a href="password.php">
                <span class="material-icons-sharp">password</span>
                <h3>Change Password</h3>
            </a>
            <a href="logout.php">
                <span class="material-icons-sharp">logout</span>
                <h3>Logout</h3>
            </a>
        </div>
        <div id="profile-btn" style="display: none;">
            <span class="material-icons-sharp">person</span>
        </div>
        <div class="theme-toggler">
            <span class="material-icons-sharp active">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>
        </div>
    </header>

    <main>
        <h1><i class='bx bxs-bus'></i> Bus Service</h1>
        <div>
            
            <?php
            $uid = $_SESSION['uid'];
            
            $query = "SELECT * FROM students WHERE id=?";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, "s", $uid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            
            if (mysqli_num_rows($result) > 0) {
                $student = mysqli_fetch_assoc($result);
                
                if ($student["request"] == "") {
                    echo '<div class="alert alert-info">
                            <h3>No Bus Service Requested</h3>
                            <p>Click the button below to request bus service</p>
                            <button type="button" data-uid="' . $uid . '" id="request" class="btn btn-primary">
                                <i class="bx bxs-bus"></i> Request For Bus
                            </button>
                          </div>';
                          
                } else if ($student["request"] == "accepted") {
                    $sql = "SELECT * FROM buses";
                    $busResult = mysqli_query($conn, $sql);
                    
                    if ($busResult && mysqli_num_rows($busResult) > 0) {
                        echo '<div class="bus-grid">';
                        while ($bus = mysqli_fetch_assoc($busResult)) {
                            echo '<div class="bus-card">
                                        <h3><i class="bx bxs-bus"></i> ' . htmlspecialchars($bus['bus_title']) . '</h3>
                                        <p style="margin-top: 0.5rem;"><small class="text-muted">Bus No: <strong>' . htmlspecialchars($bus['bus_number']) . '</strong></small></p>
                                        
                                        <h4 style="margin-top: 1.5rem; margin-bottom: 0.8rem;">Bus Route:</h4>
                                        <div>';
                            
                            // Fetch bus stops
                            $busId = $bus['bus_id'];
                            $stopQuery = "SELECT * FROM bus_root WHERE bus_id=? ORDER BY serial ASC";
                            $stopStmt = mysqli_prepare($conn, $stopQuery);
                            mysqli_stmt_bind_param($stopStmt, "s", $busId);
                            mysqli_stmt_execute($stopStmt);
                            $stopResult = mysqli_stmt_get_result($stopStmt);
                            
                            if (mysqli_num_rows($stopResult) > 0) {
                                while ($stop = mysqli_fetch_assoc($stopResult)) {
                                    echo '<div class="bus-route-item">
                                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                                <strong>' . htmlspecialchars($stop['location']) . '</strong>
                                                <small class="text-muted">' . htmlspecialchars($stop['arrival_time']) . '</small>
                                            </div>
                                          </div>';
                                }
                            } else {
                                echo '<p style="margin-left: 1rem;"><small class="text-muted">No route information available</small></p>';
                            }
                            
                            echo '</div>';
                            
                            // Fetch bus staff
                            $staffQuery = "SELECT * FROM bus_staff WHERE bus_id=?";
                            $staffStmt = mysqli_prepare($conn, $staffQuery);
                            mysqli_stmt_bind_param($staffStmt, "s", $busId);
                            mysqli_stmt_execute($staffStmt);
                            $staffResult = mysqli_stmt_get_result($staffStmt);
                            
                            if (mysqli_num_rows($staffResult) > 0) {
                                echo '<h4 style="margin-top: 1.5rem; margin-bottom: 0.8rem;">Staff:</h4>';
                                while ($staff = mysqli_fetch_assoc($staffResult)) {
                                    $icon = $staff['role'] == 'driver' ? 'bxs-user' : 'bxs-user-detail';
                                    echo '<div class="staff-info">
                                            <div><i class="bx ' . $icon . '"></i> <strong>' . ucfirst($staff['role']) . ':</strong> ' . htmlspecialchars($staff['name']) . '</div>
                                            <div><small class="text-muted">' . htmlspecialchars($staff['contact']) . '</small></div>
                                          </div>';
                                }
                            }
                            
                            echo '      <a href="buslocation.php?bus_id=' . $busId . '" class="btn btn-primary" style="margin-top: 1rem; display: inline-block;">
                                            <i class="bx bx-map"></i> Track Bus
                                        </a>
                                  </div>';
                        }
                        echo '</div>';
                    } else {
                        echo '<div class="alert alert-warning">No buses available at the moment</div>';
                    }
                    
                } else {
                    echo '<div class="pending-container">
                            <img src="images/pending.gif" class="pending-img" alt="Pending">
                            <h3>Request Pending</h3>
                            <p><small class="text-muted">Your bus service request is being processed</small></p>
                          </div>';
                }
            }
            
            mysqli_close($conn);
            ?>
        </div>
    </main>
    <script src="app.js"></script>
    <script>
        const requestBtn = document.getElementById("request");
        if (requestBtn) {
            requestBtn.addEventListener("click", function(event) {
                if (confirm("Do you really want to apply for bus service?")) {
                    const id = event.target.getAttribute("data-uid");
                    
                    fetch("fetch-data/send-request.php", {
                        method: "POST",
                        headers: { "Content-Type": "application/json" },
                        body: JSON.stringify({ id: id })
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                        window.location.reload();
                    })
                    .catch(error => console.error("Error:", error));
                }
            });
        }
    </script>
</body>
</html>
