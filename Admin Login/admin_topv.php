<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Top Visitor</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@275;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
        }

        .db-admin-tv {
            background: #FFFFFF;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            width: 100%;
            margin-left: 0;
            margin-right: 0;
            align-items: center;
            box-sizing: border-box;
        }

        .topv {
            margin: 0 0 1px 307px;
            display: inline-block;
            align-self: center;
            overflow-wrap: break-word;
            font-family: 'Poppins', sans-serif;
            font-weight: 200;
            font-size: 35px;
            margin-bottom: 15px;
            color: #000000;
        }

        .gr-button {
            cursor: pointer;
            align-items: center;
            padding: 7px 17px;
            margin-bottom: 10px;
            left: 370px;
            width: auto;
            transition: background-color 0.3s ease;
            border-radius: 40px;
            border: 1px solid #548E40;
            background: #ffffff;
            display: flex;
            flex-direction: row;
            justify-content: center;
            box-sizing: border-box;
            overflow-wrap: break-word;
            font-family: 'Poppins';
            font-weight: 400;
            font-size: 15px;
            color: #212121;
            position: absolute;
        }

        .f-button {
            border: none;
            background-color: #B4C7AE;
            font-family: 'Poppins';
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: 400;
            font-size: 15px;
            color: #212121;
            padding: 7px 17px;
            margin-bottom: 10px;
            left: 1260px;
            width: auto;
            transition: background-color 0.3s ease;
            border-radius: 40px;
            border: 1px solid #548E40;
            background: #FFFFFF;
            position: relative;
            flex-direction: row;
            box-sizing: border-box;
            overflow-wrap: break-word;
            justify-content: center;
        }

        .icon {
            margin-right: 10px;
            width: 30px;
            height: 30px;
        }

        button.gr-button:hover {
            background-color: #548E40;
            color: white;
        }

        button.gr-button .icon {
            filter: invert(0);
        }

        button.gr-button:hover .icon {
            filter: brightness(0) invert(1);
        }

        .filter-options {
            display: none;
            position: absolute;
            background-color: #ffffff;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            z-index: 1;
            padding: 8px 0;
            border-radius: 8px;
            top: 100%;
            left: 0;
        }

        .f-button:hover .filter-options {
            display: block;
        }

        .filter-option {
            padding: 8px 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .filter-option:hover {
            background-color: #548E40;
            color: #ffffff;
        }

        .tv-table {
            border-collapse: separate;
            margin-top: 30px;
            width: 100%;
            margin-right: 25px;
            height: auto;
        }

        .tv-table th,
        .tv-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            font-family: 'Poppins';
            justify-content: center;
            align-items: center;
            font-size: 18px;
        }

        .tv-table th {
            background-color: #B4C7AE;
            color: #1D2433;
            font-family: 'Poppins';
            font-weight: 400;
            font-size: 18px;
            text-align: center;
            vertical-align: middle;
        }

        .tv-table td {
            text-align: center;
        }

        .tv-table td:first-child {
            background-color: #d8d8d8;
        }

        th:first-child {
            border-top-left-radius: 8px;
            outline: none;
        }

        th:last-child {
            border-top-right-radius: 8px;
            outline: none;
        }

        .pagination {
            margin-top: 10px;
            margin-left: 860px;
        }

        .pagination a {
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
            font-family: 'Poppins';
            font-size: 18px;
            border: 1px solid #ddd;
            margin: 0 2px;
            transition: background-color 0.3s ease;
        }

        .pagination a:hover {
            background-color: #548E40;
            color: white;
        }

        .pagination a.active {
            background-color: #548E40;
            color: #fff;
            border: 1px solid #548E40;
        }

        .pagination a.active:hover {
            background-color: #548E40;
        }

        .pagination a.disabled {
            pointer-events: none;
            color: #ccc;
        }

        .container-26 {
            max-width: auto;
            width: 100%;
            padding: 0 15px;
            box-sizing: border-box;
        }

        .table-wrapper {
            margin: 0 auto;
            max-width: 50%;
            width: 50%;
            white-space: nowrap;
        }
    </style>
</head>

<body>
    <?php include ('admin_sidebar.php'); ?>
    <div class="db-admin-tv">
        <div class="topv">
            Top Visitor's of the Month
        </div>
        <div class="container-26">
            <button class="gr-button">
                <img class="icon" src="images/report.png" alt="Generate Report Icon">
                Generate Report
            </button>
            <button class="f-button">
                <img class="icon" src="images/filter.png" alt="Filter Icon">
                Filter by Month
                <div class="filter-options">
                    <div class="filter-option">January</div>
                    <div class="filter-option">February</div>
                    <div class="filter-option">March</div>
                    <!-- Add more options here -->
                </div>
            </button>
            <div id="tableWrapper" class="table-wrapper">
                <table id="tvTable" class="tv-table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Rank</th>
                            <th>Full Name</th>
                            <th>Department</th>
                            <th>No. of Visits</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Dummy data array 
                        $tvData = [
                            ["1", "raii", "CCS", "12"],
                            ["2", "raii", "CCS", "12"],
                            ["3", "raii", "CCS", "12"],
                            ["4", "raii", "CCS", "12"],
                            ["5", "raii", "CCS", "12"],
                            ["6", "raii", "CCS", "12"],
                            ["7", "raii", "CCS", "12"],
                            ["8", "raii", "CCS", "12"],
                            ["9", "raii", "CCS", "12"],
                            ["10", "raii", "CCS", "12"],
                            ["11", "raii", "CCS", "12"],
                            ["12", "raii", "CCS", "12"],
                            ["13", "raii", "CCS", "12"],
                            ["14", "raii", "CCS", "12"],
                            ["15", "raii", "CCS", "12"],
                            ["16", "raii", "CCS", "12"],
                            ["17", "raii", "CCS", "12"],
                            ["18", "raii", "CCS", "12"],
                            ["19", "raii", "CCS", "12"],
                            ["20", "raii", "CCS", "12"],
                            // Add more data rows as needed
                        ];

                        $rowsPerPage = 10;
                        $currentPage = isset ($_GET['page']) ? $_GET['page'] : 1;
                        $startIndex = ($currentPage - 1) * $rowsPerPage;

                        for ($i = $startIndex; $i < min($startIndex + $rowsPerPage, count($tvData)); $i++) {
                            echo "<tr>";
                            foreach ($tvData[$i] as $value) {
                                echo "<td>$value</td>";
                            }
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <div class="pagination">
                    <?php
                    if ($currentPage > 1) {
                        echo '<a href="?page=' . ($currentPage - 1) . '">Previous</a>';
                    } else {
                        echo '<a class="disabled">Previous</a>';
                    }
                    ?>
                    <?php
                    if (count($tvData) - ($currentPage * $rowsPerPage) > 0) {
                        echo '<a href="?page=' . ($currentPage + 1) . '">Next</a>';
                    } else {
                        echo '<a class="disabled">Next</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
</body>

</html>
