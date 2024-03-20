<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Sidebar</title>
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

    .db-admin-page {
      background: #FFFFFF;
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      width: 100%;
      margin-left: 0;
      margin-right: 0;
      box-sizing: border-box;
    }

    .logo {
      margin-bottom: 98.2px;
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 246.8px;
      box-sizing: border-box;
    }

    .image-1 {
      background: url('https://fn12.com/api/clusters/cluster-fn12-prod-asia-southeast1/projects/XCzTBA6tcSRuLo78u15uuy/assets/images/d2a03e650ab9e47053d0f131eadf8779fa71266d?Expires=1711183449&KeyName=fn12-cdn&Signature=aV1MzKbsXN7uj7E_fgg4SRVsZBI=') 50% / cover no-repeat;
      width: 264px;
      height: 65px;
      margin-top: 60px;
    }

    .attendance-system {
      margin-right: 0.6px;
      overflow-wrap: break-word;
      font-family: 'Poppins';
      font-weight: 500;
      font-size: 23px;
      letter-spacing: 0.2px;
      color: #0E6E54;
    }

    .img-sidebar {
      box-shadow: 0px 4px 10px 7px rgba(0, 0, 0, 0.05);
      background: #FFFFFF;
      position: absolute;
      left: 0px;
      bottom: 0px;
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 313px;
      height: 100%;
      box-sizing: border-box;
    }

    .img-topbar {
      box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
      background: #548E40;
      position: relative;
      margin-bottom: 23px;
      display: flex;
      flex-direction: row;
      justify-content: flex-start;
      padding: 20px 0px;
      width: 100%;
      box-sizing: border-box;
    }


    .admin {
      margin: 6px 0;
      margin-left: 30px;
      margin-right: 30px;
      display: inline-block;
      overflow-wrap: break-word;
      font-family: 'Poppins';
      font-weight: 400;
      font-size: 25px;
      color: #ffffff;
    }

    .admin-cont {
      display: flex;
      align-items: center;
      flex-direction: row;
      justify-content: flex-end;
      position: relative;
      width: 100%;
    }

    .icon-user-circle {
      margin-left: 1300px;
      display: flex;
      flex-direction: row;
      justify-content: center;
      width: 50px;
      height: 50px;
      box-sizing: border-box;
    }

    .vector-4 {
      background-size: cover;
      width: 50px;
      height: 50px;
    }

    .sidebar {
      position: relative;
      display: flex;
      flex-direction: column;
      box-sizing: border-box;
    }

    button.attendance {
      border: none;
      background-color: rgb(255, 255, 255);
      font-family: 'Poppins';
      cursor: pointer;
      display: flex;
      justify-content: center;
      flex-direction: column;
      align-items: left;
      font-weight: 400;
      font-size: 25px;
      color: #000000;
      padding: 10px 66px;
      width: 100%;
      transition: background-color 0.3s ease;
      position: relative;
    }

    button.attendance:hover {
      background-color: #548E40;
      color: white;
    }

    button.attendance .icon {
      position: absolute;
      left: 20px;
      top: 50%;
      transform: translateY(-50%);
      width: 35px;
      height: 35px;
      filter: invert(0);
    }

    button.attendance:hover .icon {
      filter: brightness(0) invert(1);
    }

    button.crowd-control {
      border: none;
      background-color: rgb(255, 255, 255);
      font-family: 'Poppins';
      cursor: pointer;
      display: flex;
      justify-content: center;
      flex-direction: column;
      align-items: left;
      font-weight: 400;
      font-size: 25px;
      color: #000000;
      padding: 10px 66px;
      width: 100%;
      transition: background-color 0.3s ease;
      position: relative;
    }

    button.crowd-control:hover {
      background-color: #548E40;
      color: white;
    }

    button.crowd-control .icon {
      position: absolute;
      left: 20px;
      top: 50%;
      transform: translateY(-50%);
      width: 35px;
      height: 35px;
      filter: invert(0);
    }

    button.crowd-control:hover .icon {
      filter: brightness(0) invert(1);
    }

    button.tv-button {
      border: none;
      background-color: rgb(255, 255, 255);
      font-family: 'Poppins';
      cursor: pointer;
      display: flex;
      justify-content: center;
      flex-direction: column;
      align-items: left;
      font-weight: 400;
      font-size: 25px;
      color: #000000;
      padding: 10px 66px;
      width: 100%;
      transition: background-color 0.3s ease;
      position: relative;
    }

    button.tv-button:hover {
      background-color: #548E40;
      color: white;
    }

    button.tv-button .icon {
      position: absolute;
      left: 20px;
      top: 50%;
      transform: translateY(-50%);
      width: 35px;
      height: 35px;
      filter: invert(0);
    }

    button.tv-button:hover .icon {
      filter: brightness(0) invert(1);
    }

    button.lg {
      border: none;
      background-color: rgb(255, 255, 255);
      font-family: 'Poppins';
      cursor: pointer;
      display: flex;
      justify-content: center;
      flex-direction: column;
      align-items: left;
      font-weight: 400;
      font-size: 25px;
      color: #000000;
      padding: 10px 66px;
      width: 100%;
      transition: background-color 0.3s ease;
      position: relative;
    }

    button.lg:hover {
      background-color: #548E40;
      color: white;
    }

    button.lg .icon {
      position: absolute;
      left: 20px;
      top: 50%;
      transform: translateY(-50%);
      width: 35px;
      height: 35px;
      filter: invert(0);
    }

    button.lg:hover .icon {
      filter: brightness(0) invert(1);
    }

    button.active {
      background-color: #548E40;
      color: white;
    }

    button.attendance.active .icon,
    button.crowd-control.active .icon,
    button.tv-button.active .icon,
    button.lg.active .icon {
      filter: brightness(0) invert(1);
    }
  </style>
</head>

<body>
  <div class="db-admin-page">
    <div class="img-topbar">
      <div class="admin-cont">
        <div class="icon-user-circle">
          <img class="vector-4" src="images/acc.png" />
        </div>
        <div class="admin">
          Admin
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="img-sidebar">
    <div class="logo">
      <div class="image-1">
      </div>
      <span class="attendance-system">
        Attendance System
      </span>
    </div>
    <div class="container-26">
      <div class="sidebar">
        <div class="container-24">
          <div class="img-attendance">
            <button id="attendanceButton" class="attendance" onclick="redirectToAttendanceList()">
              <img class="icon" src="images/attendance.png" alt="Attendance Icon"> Attendance
            </button>
          </div>
          <div class="image-crowd-control">
            <button id="crowdControlButton" class="crowd-control" onclick="redirectToCrowdControl()">
              <object type="image/svg+xml" data="vectors/crowd.svg" class="icon"></object>
              <span class="icon-text">Crowd Control</span>
            </button>
          </div>
          <div class="image-tv-button">
            <button id="topVisitorButton" class="tv-button" onclick="redirectToTopVisitor()">
              <img class="icon" src="images/award.png" alt="Tv Icon"> Top Visitor
            </button>
          </div>
          <div class="image-lg">
            <button class="lg" onclick="logout()">
              <img class="icon" src="images/logout.png" alt="Lg Icon"> Logout
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script>
    // Function to handle logout
    function logout() {
      var confirmLogout = confirm("Are you sure you want to logout?");
      if (confirmLogout) {
        window.location.href = "fr-admin-page.html";
      }
    }

    function redirectToAttendanceList() {
      window.location.href = "admin_AttendanceList.php";
    }

    function redirectToCrowdControl() {
      window.location.href = "admin_crowdcontrol.php";
    }

    function redirectToTopVisitor() {
      window.location.href = "admin_topv.php";
    }

    function setActiveButton() {
      var path = window.location.pathname;
      var page = path.split("/").pop();

      // Remove active class from all buttons
      document.getElementById("attendanceButton").classList.remove("active");
      document.getElementById("crowdControlButton").classList.remove("active");
      document.getElementById("topVisitorButton").classList.remove("active");

      // Add active class to the corresponding button based on the current page
      if (page === "admin_AttendanceList.php") {
        document.getElementById("attendanceButton").classList.add("active");
      } else if (page === "admin_crowdcontrol.php") {
        document.getElementById("crowdControlButton").classList.add("active");
      } else if (page === "admin_topv.php") {
        document.getElementById("topVisitorButton").classList.add("active");
      }
    }

    // Call setActiveButton function when the page loads
    window.onload = setActiveButton;
  </script>
</body>

</html>