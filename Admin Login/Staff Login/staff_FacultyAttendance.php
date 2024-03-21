<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Attendance</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@275;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
        }

        .db-staff-page {
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
            font-family: 'Poppins', sans-serif;
            font-weight: 200;
            font-size: 35px;
            margin-bottom: 15px;
            color: #000000;
        }

        .attendance-table {
            border-collapse: separate;
            margin-top: 30px;
            width: 1050px;
            height: auto;
            margin-right: 55px;
        }

        .attendance-table th,
        .attendance-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            font-family: 'Poppins';
            justify-content: center;
            align-items: center;
            font-size: 15px;
        }

        .attendance-table th {
            background-color: #B4C7AE;
            color: white;
            font-family: 'Poppins';
            font-weight: 400;
            font-size: 18px;
            text-align: center;
            vertical-align: middle;
            outline: none;
            color: #1D2433;
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
            margin-right: 54px;
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

        .search {
            border-radius: 40px;
            border: 1px solid #548E40;
            background: #FFFFFF;
            position: relative;
            display: flex;
            right: 55px;
            flex-direction: row;
            padding: 10px 0 9px 20px;
            width: 255px;
            box-sizing: border-box;
        }

        .magnifying-glass-1 {
            margin: 2px 11px 4px 0;
            display: flex;
            flex-direction: row;
            justify-content: center;
            width: 15px;
            height: 15px;
            box-sizing: border-box;
        }

        .vector-11 {
            width: 15px;
            height: 15px;
        }

        .search-for-something {
            overflow-wrap: break-word;
            font-family: 'Poppins';
            font-weight: 400;
            font-size: 14px;
            color: rgba(120, 120, 120, 0.82);
            border: none;
            outline: none;
        }

        .search-icon {
            align-items: center;
        }

        a.addButton {
            cursor: pointer;
            align-items: center;
            padding: 7px 40px;
            margin-bottom: 10px;
            left: 370px;
            width: 120px;
            transition: background-color 0.3s ease;
            border-radius: 40px;
            border: 1px solid #B4C7AE;
            background: #B4C7AE;
            display: flex;
            flex-direction: row;
            justify-content: center;
            box-sizing: border-box;
            overflow-wrap: break-word;
            font-family: 'Poppins';
            font-weight: 400;
            font-size: 15px;
            color: black;
            position: absolute;
            text-decoration: none;
        }

        .plus {
            margin-right: 10px;
            width: 30px;
            height: 30px;
        }

        .addButton {
            border-radius: 25px;
            background: #FFFFFF;
        }

        a.addButton:hover {
            background-color: #548E40;
            color: white;
        }

        a.addButton .plus {
            filter: invert(0);
            border-radius: 25px;
            background: #FFFFFF;
        }

        .attendance-table td {
            text-align: center;
        }

        .edit {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 35px;
            border: 2px solid transparent;
            border-radius: 25%;
            text-align: center;
            line-height: 1;
            margin-right: 5px;
            text-decoration: none;
            background-color: #B4C7AE;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
            transition: background-color 0.3s ease;
        }

        .out {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 35px;
            border: 2px solid transparent;
            border-radius: 25%;
            text-align: center;
            line-height: 1;
            margin-right: 5px;
            text-decoration: none;
            background-color: #FFA1A1;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
            transition: background-color 0.3s ease;
        }

        .edit:hover,
        .out:hover,
        .material-icons:hover {
            background-color: black;
            color: white;
        }

        .material-icons {
            font-size: 24px;
            color: black;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            max-width: 600px;
            max-height: 660px;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            padding: 20px;
            background-color: #89B785;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            text-align: center;
        }

        .divider {
            margin: 20px 0;
            border: none;
            border-top: 3px solid whitesmoke;
        }

        .form {
            padding: 0 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border-radius: 25px;
            border: 1px solid #ccc;
        }

        .date-time-container {
            display: flex;
            justify-content: space-between;
        }

        .custom-date-input,
        .form-control-no {
            width: 250px;
        }

        .date-field,
        .control-container {
            flex: 1;
            margin-right: 10px;
        }

        .form-control-no {
            margin-bottom: 20px;
            display: block;
            width: 250px;
            padding: 10px;
            border-radius: 25px;
            border: 1px solid #ccc;
        }

        .control-container label {
            margin-top: 20px;
        }


        .time-fields {
            flex: 2;
            display: flex;
            flex-direction: column;
        }

        .form-time-in,
        .form-time-out {
            margin-bottom: 20px;
        }

        .form-time-in label,
        .form-time-out label {
            flex: 1;
        }

        .form-time-in input,
        .form-time-out input {
            flex: 1;
            margin-right: 10px;
            width: 100%;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .save-btn {
            padding: 10px 20px;
            border-radius: 25px;
            width: 40%;
            background-color: whitesmoke;
            color: black;
        }

        .cancel-btn {
            padding: 10px 20px;
            border-radius: 25px;
            width: 40%;
            background-color: black;
            color: white;
            border-color: white;
        }

        .select-container {
            position: relative;
            margin-bottom: 20px;
        }

        .dept-container {
            position: relative;
            margin-bottom: 20px;
        }

        .arrow-down {
            position: absolute;
            top: 70%;
            right: 10px;
            transform: translateY(-50%);
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid #000;
        }

        .arrow-down1 {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid #000;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #tableWrapper {
            overflow-x: auto;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <?php include ('staff_sidebar.php'); ?>
    <div class="db-staff-page">
        <div class="attendance-list">
            Faculty Attendance
        </div>
        <div class="add-button">
            <a href="#" class="addButton" onclick="toggleModal()">
                <img class="plus" src="images/plus.png" alt="Plus Icon"> Add
            </a>
        </div>
        <div class="search">
            <object class="search-icon" type="image/svg+xml" data="vectors/search.svg"></object>
            <input id="searchInput" type="text" class="search-for-something" onkeyup="searchTable()"
                placeholder="Search for something">
        </div>
        </button>
        <div id="tableWrapper" style="overflow-x:auto;">
            <table id="attendanceTable" class="attendance-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Full Name</th>
                        <th>Student No.</th>
                        <th>Department</th>
                        <th>Time In</th>
                        <th>Time Out</th>
                        <th>Remarks</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Dummy data array 
                    $attendanceData = [
                        ["2024-03-15", "John Doe", "123456", "IT", "08:00 AM", "05:00 PM", ""],
                        ["2024-03-16", "Jane Smith", "789012", "HR", "09:00 AM", "04:00 PM", ""],
                        ["2024-03-15", "John Doe", "123456", "IT", "08:00 AM", "05:00 PM", ""],
                        ["2024-03-16", "Jane Smith", "789012", "HR", "09:00 AM", "04:00 PM", ""],
                        ["2024-03-15", "John Doe", "123456", "IT", "08:00 AM", "05:00 PM", ""],
                        ["2024-03-16", "Jane Smith", "789012", "HR", "09:00 AM", "04:00 PM", ""],
                        ["2024-03-15", "John Doe", "123456", "IT", "08:00 AM", "05:00 PM", ""],
                        ["2024-03-16", "Jane Smith", "789012", "HR", "09:00 AM", "04:00 PM", ""],
                        ["2024-03-15", "John Doe", "123456", "IT", "08:00 AM", "05:00 PM", ""],
                        ["2024-03-16", "Jane Smith", "789012", "HR", "09:00 AM", "04:00 PM", ""],
                        ["2024-03-16", "Jane Smith", "789012", "HR", "09:00 AM", "04:00 PM", ""],
                        ["2024-03-15", "John Doe", "123456", "IT", "08:00 AM", "05:00 PM", ""],
                        ["2024-03-16", "Jane Smith", "789012", "HR", "09:00 AM", "04:00 PM", ""],
                        // Add more data rows as needed
                    ];

                    $rowsPerPage = 10;
                    $currentPage = isset ($_GET['page']) ? $_GET['page'] : 1;
                    $startIndex = ($currentPage - 1) * $rowsPerPage;
                    for ($i = $startIndex; $i < min($startIndex + $rowsPerPage, count($attendanceData)); $i++) {
                        echo "<tr>";
                        foreach ($attendanceData[$i] as $value) {
                            echo "<td>$value</td>";
                        }
                        // Add edit and delete buttons
                        echo '<td style="text-align: center; display: flex; justify-content: center; align-items: center;">
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="out" title="Out" data-toggle="tooltip"><i class="material-icons">login</i></a>
                            </td>';
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
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
    <div class="modal" id="myModal">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h1 class="form-title">Faculty Attendance</h1>
        <hr class="divider">
        <form class="form" id="attendanceForm">
            <div class="date-time-container">
                <div class="date-field">
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" class="form-control custom-date-input" disabled>
                </div>
                <div class="time-fields">
                    <div class="form-time-in">
                        <label for="timeIn">Time In:</label>
                        <input type="time" id="timeIn" name="timeIn" class="form-control" disabled>
                    </div>
                    <div class="form-time-out">
                        <label for="timeOut">Time Out:</label>
                        <input type="time" id="timeOut" name="timeOut" class="form-control" disabled>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" class="form-control">
            </div>
            <div class="form-group">
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" class="form-control">
            </div>
            <div class="dept-container">
                <label for="department">Department:</label>
                <select id="department" name="department" class="form-control">
                    <option value="CBAA">CBAA</option>
                    <option value="CCS">CCS</option>
                    <option value="COED">COED</option>
                    <option value="COE">COE</option>
                </select>
                <div class="arrow-down"></div>
            </div>
            <div class="button-container">
                <button class="save-btn" onclick="">Save</button>
                <button type="button" class="cancel-btn" data-dismiss="modal">Cancel</button>
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function () {
            $(document).on("click", ".edit", function () {
                alert("Edit button clicked");
            });

            $(document).on("click", ".out", function () {
                var row = $(this).closest("tr");
                row.find("td:nth-child(7)").text("OUT");
                alert("Thank you for visiting the library!");

                row.find(".edit, .out").prop("disabled", true);
            });
        });


        function handleKeyPress(event) {
            if (event.keyCode === 13) {
                searchTable();
            }
        }

        //Search and Filter the table
        function searchTable() {
            var input, filter, table, tr, td, i, txtValue, found;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("attendanceTable");
            tr = table.getElementsByTagName("tr");

            var noResultsAlertShown = true;

            for (i = 0; i < tr.length; i++) {
                found = false;

                // Skip filtering the table headers
                if (tr[i].getElementsByTagName("th").length === 0) {
                    for (var j = 0; j < tr[i].cells.length; j++) {
                        td = tr[i].cells[j];
                        if (td) {
                            txtValue = td.textContent || td.innerText;
                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                found = true;
                                break;
                            }
                        }
                    }

                    if (found) {
                        tr[i].style.display = "";
                        noResultsAlertShown = false;
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }

            if (noResultsAlertShown) {
                noResultsMessage.style.display = "";
            }
        }

        // Get the modal
        var modal = document.getElementById("myModal");

        // Function to toggle modal visibility
        function toggleModal() {
            modal.style.display = "block";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        // Initialize Bootstrap modal
        $(document).ready(function () {
            var myModal = new bootstrap.Modal(document.getElementById('myModal'));

            function toggleModal() {
                myModal.toggle();
            }

            $('.close').click(function () {
                myModal.hide();
            });

            $('.cancel-btn').click(function () {
                myModal.hide();
            });

            $('.addButton').click(function () {
                toggleModal();
            });
        });
    </script>
</body>

</html>