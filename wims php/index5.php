<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style5.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">ELORA</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#dashboard">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#internships">
            <i class='bx bx-box' ></i>
            <span class="links_name">Internships</span>
          </a>
        </li>
        <li>
          <a href="#students">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Students</span>
          </a>
        </li>
        <li>
          <a href="#add">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Add Internships</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        
        <li class="log_out">
          <a href="signout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
    
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Internships</div>
            <div class="number">40</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Students</div>
            <div class="number">138</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Company</div>
            <div class="number">12</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Applied Internships</div>
            <div class="number">11</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>

   
  </section>
  
  <!--internships-->
  <section class="internships" id="internships">
    <nav>
        <h1 class="title">Internships</h1>
    
    </nav>
  </section>
  
  <!--students-->
  <section class="students" id="students">
    <nav>
        <h1 class="title">Students</h1>
    
    </nav>
  </section>
  
  <!--students-->
  <section class="add" id="add">
    <nav>
        <h1 class="title">Add Internships</h1>
          <div class="max-width">
                
                  <div class="column right">
                      <div class="text">Add Internships</div>
                      <form action="#">
                          <div class="fields">
                              <div class="field name">
                                  <input type="text" placeholder="Name of Company" required>
                              </div>
                              <div class="field email">
                                  <input type="email" placeholder="Duration" required>
                              </div>
                              <div class="field email">
                                <input type="email" placeholder="Duration" required>
                            </div>
                          </div>
                          <div class="field">
                              <input type="text" placeholder="Subject" required>
                          </div>
                          <div class="field textarea">
                              <textarea cols="30" rows="10" placeholder="Details.." required></textarea>
                          </div>
                          <div class="button-area">
                              <button type="submit">Send</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
    
    </nav>
  </section>

 <!--students-->
 <section class="students" id="students">
  <nav>
      <h1 class="title">Messages</h1>
      
  
  </nav>
</section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

 
