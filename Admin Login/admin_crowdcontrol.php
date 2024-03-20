<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Crowd Control</title>
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
    .db-admin-crowdcontrol {
        background: #FFFFFF;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        width: 100%;
        margin-left: 0;
        margin-right: 0;
        align-items: center; 
        box-sizing: border-box;
        padding: 20px; 
    }
    .crowdcontrol {
        display: inline-block;
        align-self: center;
        margin-left: 280px;
        overflow-wrap: break-word;
        font-family: 'Poppins', sans-serif;
        font-weight: 200;
        font-size: 35px;
        margin-bottom: 20px;
        color: #000000;
    }
    .button-board {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-left: 340px;
        margin-right: 30px;
        gap: 15px; 
    }
    .number-button {
        width: 120px;
        height: 120px; 
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid #000000; 
        border-radius: 5px; 
        background-color: #EAEAEA; 
        font-family: 'Poppins';
        font-weight: 400;
        font-size: 25px; 
    }
  </style>
</head>
<body>
    <?php include('admin_sidebar.php'); ?>
    <div class="db-admin-crowdcontrol">
        <div class="crowdcontrol">
          Crowd Control Board
        </div>
    </div>
    <div class="button-board">
            <?php
                for ($i = 1; $i <= 40; $i++) {
                    echo '<div class="number-button">' . $i . '</div>';
                }
            ?>
    </div>
</body>
</html>