<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style id="headerinfo">
        header {
          background-color:rgb(5, 62, 4);
        color: #fff;
        /* padding: 20px; */
        text-align: center;
        }
        .logobox img{
        height: 100px;
        }

        h1 {
          font-size: 24px;
          margin: 0;
        }
    
        p {
          font-size: 16px;
          margin: 10px 0;
        }
    
        section {
          padding: 20px;
          text-align: center;
        }
    
        h2 {
          font-size: 20px;
          margin: 0;
        }
        .feature {
          display: inline-block;
          width: 350px;
                margin: 50px;
                border: #24262b solid;
                padding:10vh ;
              }
        .feature p{
          font-style: italic;
        }
        .feature h3{
          font-family: 'Courier New', Courier, monospace;
        }
        .head {
          display: flex;
          justify-content: space-around;
          align-items: center;
        
        }
        .head a{
          color: black;
        }
        li{
          text-decoration: none;
        }
        .head button{
          font-size:larger;
          border-radius: 1vh;
          padding: 2vh;
          width: 18vw;
        
        
        }
</style>
</head>
<body>
<header>
    <div class="logobox">
      <img src="logo1.jpg" alt="logo">
  </div>
    <h1>Farming Assistance</h1>
    <p>Get the support you need for successful farming</p>
    <div class="head">
      <button><a href="admin.php">Dashboard</a></button>
      <button><a href="showUsers.php">Users</a></button>
      <button><a href="showAppointment.php">appoinments</a></button>

      <button><a href="enquiries.php">Enquiries</a></button>
      <button><a href="addExpert.php">Add Experts</a></button>
      
    </div>
  </header>
        </div>
    </div>
</body>
</html>