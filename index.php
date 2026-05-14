<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abdullah Alrashdi Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
    <div class="theme-switch" onclick="toggleTheme()">
        <span id="theme-icon">🌙</span>
    </div>

    <div class="menu-toggle" onclick="toggleSidebar()">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About Me</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact Me</a></li>
    </ul>
</nav>

<div id="sidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="toggleSidebar()">&times;</a>
    <a href="#home" onclick="toggleSidebar()">Home</a>
    <a href="#about" onclick="toggleSidebar()">About Me</a>
    <a href="#skills" onclick="toggleSidebar()">Skills</a>
    <a href="#projects" onclick="toggleSidebar()">Projects</a>
    <a href="#contact" onclick="toggleSidebar()">Contact Me</a>
</div>

<section id="home" class="hero">
    <div class="hero-content">
        <p class="accent-text">Hello, I'm </p>
        <?php
        $sql = "SELECT * FROM user_info LIMIT 1";
        $result = $conn->query($sql);
        if ($row = $result->fetch_assoc()) {
            echo "<h1>" . $row['name'] . "</h1>";
            $bio = $row['bio'];
        }
        ?>
        <h3 class="typewriter">Software Engineer</h3>
        <div class="hero-btns">
            <a href="#contact" class="btn btn-filled">Contact Me</a>
        </div>
    </div>
</section>

<section id="about">
    <h2 class="section-title">About Me</h2>
    <div class="container">
Software Engineering student at the University of Hail, 
dedicated to transforming complex ideas into 
high-performance functional systems
 With a solid foundation in project engineering and a collaborative mindset, I strive to build innovative solutions that balance technical excellence with real-world efficiency. 
</div>
</section>

<section id="skills">
    <h2 class="section-title">Skills</h2>
    <div class="skills-grid">
        <div class="skill-item"><h4>Software Engineering</h4><p>Full-Stack Development | Cyber Security</p></div>
        <div class="skill-item"><h4>Technologies</h4><p>PHP | MySQL | Java | Python</p></div>
    </div>
</section>

<section id="projects">
    <h2 class="section-title">Projects</h2>
    <div class="projects-grid">
        <?php
        $sql_p = "SELECT * FROM projects";
        $result_p = $conn->query($sql_p);
        while($proj = $result_p->fetch_assoc()) {
            echo "<div class='project-card'>";
            echo "<h3>" . $proj['project_name'] . "</h3>";
            echo "<p>" . $proj['description'] . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</section>

<section id="contact">
    <h2 class="section-title">Contact Me</h2>
    <form class="contact-form">
        <input type="text" placeholder="Name">
        <input type="email" placeholder="Email">
        <textarea placeholder="Message"></textarea>
        <button type="button" class="btn btn-filled">Send Message</button>
    </form>
</section>

<script src="script.js"></script>
</body>
</html>