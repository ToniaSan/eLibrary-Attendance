<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Attendance List</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@275;300;400;500;600;700;800&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <style>
    body, html {
        margin: 0;
        padding: 0;
    }
    .db-admin-page {
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
    .attendance-list {
        margin: 0 0 1px 307px;
        display: inline-block;
        align-self: center;
        overflow-wrap: break-word;
        font-family: 'Poppins';
        font-weight: 500;
        font-size: 35px;
        margin-bottom: 15px;
        color: #000000;
    }
    .generate-report-button {
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
    .filter-button {
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
        left: 860px;
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
    button.generate-report-button:hover {
        background-color: #548E40;
        color: white;
    }
    button.generate-report-button .icon {
        filter: invert(0); 
    }
    button.generate-report-button:hover .icon {
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

    .filter-button:hover .filter-options {
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
    .attendance-table {
        border-collapse: collapse;
        margin-top: 30px;
        width: 1050px; 
        margin-right: 25px;
        height: auto;
    }
    .attendance-table th, .attendance-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
        font-family: 'Poppins';
        justify-content: center;
        align-items: center;
        font-size: 15px;
    }
    .attendance-table th {
        background-color: #548E40;
        color: white;
        font-family: 'Poppins';
        font-weight: 400;
        font-size: 18px;
        text-align: center; 
        vertical-align: middle; 
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
    </style>
</head>
<body>
    <?php include('admin_sidebar.php'); ?>
    <div class="db-admin-page">
        <div class="attendance-list">
          Attendance List
        </div>
          <div class="container-25">
            <button class="generate-report-button">
              <img class="icon" src="images/report.png" alt="Generate Report Icon">
              Generate Report
            </button>
            <button class="filter-button">
              <img class="icon" src="images/filter.png" alt="Filter Icon">
              Filter by Month
              <div class="filter-options">
                <div class="filter-option">January</div>
                <div class="filter-option">February</div>
                <div class="filter-option">March</div>
                <!-- Add more options here -->
              </div>
            </button>
          <table class="attendance-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Purpose</th>
                        <th>Full Name</th>
                        <th>Student No.</th>
                        <th>Department</th>
                        <th>Company/School</th>
                        <th>Time In</th>
                        <th>Time Out</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Dummy data array 
                    $attendanceData = [
                        ["2024-03-15", "Meeting", "John Doe", "123456", "IT", "ABC Company", "08:00 AM", "05:00 PM", ""],
                        ["2024-03-16", "Training", "Jane Smith", "789012", "HR", "XYZ School", "09:00 AM", "04:00 PM", ""],
                        ["2024-03-15", "Meeting", "John Doe", "123456", "IT", "ABC Company", "08:00 AM", "05:00 PM", ""],
                        ["2024-03-16", "Training", "Jane Smith", "789012", "HR", "XYZ School", "09:00 AM", "04:00 PM", ""],
                        ["2024-03-15", "Meeting", "John Doe", "123456", "IT", "ABC Company", "08:00 AM", "05:00 PM", ""],
                        ["2024-03-16", "Training", "Jane Smith", "789012", "HR", "XYZ School", "09:00 AM", "04:00 PM", ""],
                        ["2024-03-15", "Meeting", "John Doe", "123456", "IT", "ABC Company", "08:00 AM", "05:00 PM", ""],
                        ["2024-03-16", "Training", "Jane Smith", "789012", "HR", "XYZ School", "09:00 AM", "04:00 PM", ""],
                        ["2024-03-15", "Meeting", "John Doe", "123456", "IT", "ABC Company", "08:00 AM", "05:00 PM", ""],
                        ["2024-03-16", "Training", "Jane Smith", "789012", "HR", "XYZ School", "09:00 AM", "04:00 PM", ""],["2024-03-16", "Training", "Jane Smith", "789012", "HR", "XYZ School", "09:00 AM", "04:00 PM", ""],
                        ["2024-03-15", "Meeting", "John Doe", "123456", "IT", "ABC Company", "08:00 AM", "05:00 PM", ""],
                        ["2024-03-16", "Training", "Jane Smith", "789012", "HR", "XYZ School", "09:00 AM", "04:00 PM", ""],
                        // Add more data rows as needed
                    ];

                    $rowsPerPage = 10;
                    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                    $startIndex = ($currentPage - 1) * $rowsPerPage;

                    for ($i = $startIndex; $i < min($startIndex + $rowsPerPage, count($attendanceData)); $i++) {
                        echo "<tr>";
                        foreach ($attendanceData[$i] as $value) {
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
                if (count($attendanceData) - ($currentPage * $rowsPerPage) > 0) {
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