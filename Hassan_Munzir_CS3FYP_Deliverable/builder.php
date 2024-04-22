<?php
session_start();
?> 

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/themes.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/autoComplete.min.js"></script>
<script src="https://unpkg.com/jspdf-invoice-template@1.4.0/dist/index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
</head>
<body>
    <header class="custom-header">
        <nav class="navbar navbar-expand-lg static-top navbar-dark">
            <div class="container">
                <h1 class="logo">CeeVeeIT</h1>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- NAVIGATION -->
                <div class="collapse navbar-collapse mt-md-3" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                        <button class="nav-link pl-0 pr-0" aria-label="Switch to My Resumes page"><a href="index.php">Home</a></button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link pl-0 pr-0" aria-label="Switch to My Resumes page"><a href="resumes.php">Create a Resume</a></button>
                        </li>
                       
                        <li class="nav-item">
                            <button class="nav-link pl-0 pr-0" id="theme-lavender-link" aria-label="Switch to page"><a href="help.php">Help</a></button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link pl-0 pr-0" id="theme-lavender-link" aria-label="Switch to page"><a href="login.php">Login</a></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <br>
    <br>
    <br>

<div class="container">
    <div class="card mb-3">
        <div class="card-body">
            <form autocomplete="off">
            <h2><i class="fas fa-user"></i> Personal Information</h2>
                <div class="form-group">
                    <label for="name">Enter your Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <label for="email">Enter your Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                </div>
                <div class="form-group">
                    <label for="phone">Enter your Phone number:</label>
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Your Phone number">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="card mb-3">
        <div class="card-body">
            <form autocomplete="off" action="qualifications.php" method="post">
            <h2><i class="fas fa-university"></i> Academic Information</h2>
                <div class="form-group">
                    <label for="university">University:</label>
                    <input type="text" class="form-control" id="university" name="university" placeholder="University">
                </div>
                <div class="form-group">
                    <label for="qualification">Qualifications:</label>
                    <select class="form-control" id="qualification" name="qualification">
                        <option value="" selected disabled>Select Qualification</option>
                        <option value="Phd">Phd</option>
                        <option value="Masters">Masters</option>
                        <option value="Bachelors">Bachelors</option>
                        <option value="A-Level/BTEC">A-Level/BTEC</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="grade">Grade(Achieved/Predicted):</label>
                    <select class="form-control" id="grade" name="grade">
                        <option value="" selected disabled>Select Grade</option>
                        <optgroup label="University Grades">
                            <option value="1st">1st class</option>
                            <option value="2:1">2:1</option>
                            <option value="2:2">2:2</option>
                            <option value="Pass">Pass</option>
                        </optgroup>
                        <optgroup label="UCAS Points">
                            <option value="120">AAA or equivalent (120 UCAS Points)</option>
                            <option value="112">AAB or equivalent (112 UCAS Points)</option>
                            <option value="104">ABB or equivalent (104 UCAS Points)</option>
                            <option value="96">BBB or equivalent  (96 UCAS Points)</option>
                            <option value="Other">Other</option>
                        </optgroup>
                    </select>

                    <button id="addQualificationBtn" type="button" class="btn btn-primary" onclick="addQualification()">Add</button>


                    <div class="form-group" id="qualification-id">
                    <label for="selected_qualification">Selected Qualifications:</label>
                    <input type="text" class="form-control" id="selected_qualification" name="selected_qualification" readonly style="width: 100%; height: 150px;">
                </div>

                </div>
             
            </form>
        </div>
    </div>
</div>

<style>
    body {
        font-family: 'Arial', sans-serif;
        line-height: 1.6;
        color: #333;
        background: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .custom-header .navbar {
        background-color: #333;
    }

    .navbar .navbar-brand {
        color: #ffffff;
        font-size: 20px; /* Larger brand name */
    }

    .navbar a{
        color: white;
    }


    .navbar .navbar-nav .nav-item .nav-link {
    
        font-size: 20px;
    }

    .navbar .navbar-nav .nav-item .nav-link:hover {
        color: #cddc39; /* Bright hover color */
    }

    .banner {
        color: white;
        background-image: url('interview.png');
        background-size: cover;
        background-position: center;
        height: 500px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
    }

    .banner h2 {
        font-size: 120px;
        margin: 0 0 10px;
    }

    .navbar .nav-item .nav-link.active {
        color: #dc3545 !important; /* Bright red color for the active page link */
    }

   

    .main-container {
        padding: 20px;
        background: #ffffff; /* Clear white background for content */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: -50px;
        border-radius: 8px;
    }

    .card {
        background: #f9f9f9;
        border: none;
    }

    .card h4 {
        color: #0062cc; /* Echoing primary color for headings */
    }

    .card-body p {
        font-size: 20px;
        color: #666; /* Dark gray text for readability */
    }

    .btn-primary {
        background-color: #0062cc;
        border-color: #005cbf;
    }

    .btn-primary:hover {
        background-color: #005cbf;
        border-color: #004085;
    }

    .custom-footer {
        background-color: #333;
        color: white;
        padding: 10px 20px;
        text-align: right;
    }

    
    
</style>


<div class="container">
    <div class="card mb-3">
        <div class="card-body">
            <form autocomplete="off" action="experience.php" method="post">
            <h2><i class="fas fa-briefcase"></i> Work Experience</h2>
                <div class="form-group">
                    <label for="company">Company:</label>
                    <input type="text" class="form-control" id="company" name="company" placeholder="Company Name">
                </div>
                <div class="form-group">
                    <label for="datefrom">Date From:</label>
                    <input type="date" class="form-control" id="datefrom" name="datefrom">
                </div>
                <div class="form-group">
                    <label for="dateto">Date To:</label>
                    <input type="date" class="form-control" id="dateto" name="dateto">
                </div>
                <div class="form-group">
                    <label for="autoComplete">Role:</label>
                    <input type="text" class="form-control" id="autoComplete" name="role">
                </div>
                <div class="form-group">
                    <label for="location">Location:</label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Location">
                </div>
                <div class="form-group">
                    <label for="experience">Work experience:</label>
                    <input type="text" class="form-control" id="experience" name="experience">
                </div>
                <div class="form-group">
                    <button id="addExperience" type="button" class="btn btn-primary" onclick="addWorkExperience()" >Add</button>
                </div>
                <div class="form-group">
                    
                </div>
                <div class="form-group" id="work-id">
                    <label for="selected_work_experience">Selected Work Experience:</label>
                    <input type="text" class="form-control" id="selected_work_experience" name="selected_work_experience" readonly style="width: 100%; height: 150px;">
                </div>
            </form>
        </div>
    </div>
</div>


<div class="container">
    <div class="card mb-3">
        <div class="card-body">
            <form autocomplete="off" action= "skills.php" method="post">
            <h2><i class="fas fa-lightbulb"></i> Skills and Hobbies</h2>
                <div class="form-group">
                    <input type="text" class="form-control" id="skills" name="skills">

                </div>
                <div class="form-group">
                <button type="button" class="btn btn-primary" onclick="addSkill()">Add</button>
                </div>
                <div class="form-group" id="skill-id">
                    <label for="selected_skills">Selected Skills:</label>
                    <input type="text" class="form-control" id="selected-skills" name="selected-skills" readonly>
                </div>
                <div class="form-group">
                    <label for="hobbies">Hobbies:</label>
                    <input type="text" class="form-control" id="hobbies" name="hobbies">
                    
                  
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-primary" onclick="addHobby()">Add</button>
                </div>
                <div class="form-group">
                    <label for="selected_hobbies">Selected Hobbies:</label>
                    <input type="text" class="form-control" id="selected-hobbies" name="selected-hobbies" readonly style="width: 100%; height: 150px;">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="card mb-3">
        <div class="card-body">
            <form autocomplete="off">
            <h2><i class="fas fa-users"></i> References</h2>
                <div class="form-group">
                    <label for="references">References:</label>
                    <input type="text" class="form-control" id="references" name="references" placeholder="References">
                </div>

                <div class="form-group">
                    <button type="button" class="btn btn-primary" onclick="addReference()">Add</button>
                </div>

                <div class="form-group">
                    <label for="selected_references">Selected References:</label>
                    <input type="text" class="form-control" id="selected-reference" name="selected-references" readonly style="width: 100%; height: 150px;">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="card mb-3">
        <div class="card-body">
           
        <h2><i class="fas fa-file-alt"></i> Choose your template</h2>
                <button type="button" title="Template1"class="btn btn-primary btn-submit" onclick="downloadPDF()"><img src="template1.png" style="width: 220px; height: 250px;"></button>
            
                <button type="button" title="Template2"class="btn btn-primary btn-submit" onclick="downloadPDF2()"><img src="template2.png" style="width: 220px; height: 250px;"></button>
                
                <button type="button" title="Template3"class="btn btn-primary btn-submit" onclick="downloadPDF3()"><img src="template3.png" style="width: 220px; height: 250px;"></button>
                
                <button type="button" title="Template"class="btn btn-primary btn-submit" onclick="downloadPDF4()"><img src="template4.png" style="width: 220px; height: 250px;"></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- FOOTER -->
<footer class="container-fluid custom-footer">
    <div class="container text-right">
        CeeVeeIT by Munzir Hassan - 2024
    </div>
</footer>

<script src="jobs.js"></script>
<script src="download.js"></script>

</body>
</html>



