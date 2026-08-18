<?php
    $_SESSION['student_access'] = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Source+Sans+3:wght@400;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Source Sans 3', system-ui, sans-serif;
            min-height: 100vh;
            background: linear-gradient(160deg, #0a0a0a 0%, #1a1a1a 50%, #111111 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #ffffff;
            overflow-x: hidden;
        }

        .navbar {
            width: 100%;
            padding: 0.6rem 1.5rem;
            display: flex;
            justify-content: center;
            background: rgba(255, 255, 255, 0.03);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            position: sticky;
            top: 0;
            z-index: 100;
            backdrop-filter: blur(8px);
        }

        .buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            padding: 0.45rem 1.5rem;
            font-family: 'Source Sans 3', system-ui, sans-serif;
            font-size: 0.95rem;
            font-weight: 600;
            text-decoration: none;
            color: #000000;
            background: #ffffff;
            border-radius: 50px;
            border: 2px solid #ffffff;
            box-shadow: 0 4px 12px rgba(255, 255, 255, 0.1);
            transition: transform 0.25s ease, box-shadow 0.25s ease, background 0.25s ease, color 0.25s ease;
            opacity: 0;
            transform: translateY(-20px) scale(0.85);
            animation: bounceIn 0.7s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        }

        .btn:nth-child(1) {
            animation-delay: 0.1s;
        }

        .btn:hover {
            transform: translateY(-2px) scale(1.05);
            background: transparent;
            color: #ffffff;
            box-shadow: 0 6px 16px rgba(255, 255, 255, 0.15);
        }

        .btn:active {
            transform: translateY(0) scale(1.02);
        }

        .content {
            text-align: center;
            max-width: 700px;
            padding: 2.5rem 20px 3rem;
            width: 100%;
            flex: 1;
        }

        /* Profile Section */
        .profile-section {
            margin-bottom: 2.5rem;
        }

        .profile-pic {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
            border: 3px solid rgba(255, 255, 255, 0.25);
            margin: 0 auto 1.2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: rgba(255, 255, 255, 0.4);
            overflow: hidden;
        }

        .profile-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .student-name {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 2.4rem;
            font-weight: 700;
            margin-bottom: 0.6rem;
            color: #ffffff;
        }

        .short-description {
            font-size: 1.1rem;
            color: #a3a3a3;
            max-width: 480px;
            margin: 0 auto 1.8rem;
            line-height: 1.5;
        }

        h1 {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 1.8rem;
            color: #ffffff;
            letter-spacing: -0.5px;
        }

        /* Cards */
        .info-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 18px;
            padding: 1.8rem 1.8rem;
            text-align: left;
            margin-bottom: 1.5rem;
        }

        .section-title {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1.1rem;
            color: #ffffff;
            padding-bottom: 0.6rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 0.7rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.06);
            font-size: 1.1rem;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            color: #a3a3a3;
            font-weight: 400;
        }

        .param {
            color: #ffffff;
            font-weight: 600;
            text-align: right;
        }

        /* Skills & Interests */
        .skills-list {
            display: flex;
            flex-wrap: wrap;
            gap: 0.7rem;
        }

        .skill-tag {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.18);
            padding: 0.4rem 1rem;
            border-radius: 50px;
            font-size: 0.95rem;
            color: #e5e5e5;
        }

        /* Footer - DO NOT CHANGE */
        footer {
            width: 100%;
            background: rgba(255, 255, 255, 0.03);
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            padding: 2.5rem 1.5rem 1.8rem;
            text-align: center;
        }

        .footer-content {
            max-width: 700px;
            margin: 0 auto;
        }

        .footer-title {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 1.4rem;
            margin-bottom: 1.2rem;
            color: #ffffff;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 0.45rem;
            margin-bottom: 1.8rem;
            color: #a3a3a3;
            font-size: 0.95rem;
        }

        .contact-info a {
            color: #e5e5e5;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .contact-info a:hover {
            color: #ffffff;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 1.2rem;
            margin-bottom: 1.5rem;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            color: #ffffff;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 600;
            transition: all 0.25s ease;
        }

        .social-links a:hover {
            background: #ffffff;
            color: #000000;
            transform: translateY(-3px);
        }

        .copyright {
            font-size: 0.85rem;
            color: #737373;
            margin-top: 0.5rem;
        }

        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: translateY(-30px) scale(0.7);
            }
            60% {
                opacity: 1;
                transform: translateY(8px) scale(1.08);
            }
            80% {
                transform: translateY(-3px) scale(0.98);
            }
            100% {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* Mobile Responsive */
        @media (max-width: 600px) {
            .content {
                padding: 2rem 16px 2.5rem;
            }

            .profile-pic {
                width: 110px;
                height: 110px;
                font-size: 2.4rem;
            }

            .student-name {
                font-size: 1.9rem;
            }

            .short-description {
                font-size: 1rem;
            }

            h1 {
                font-size: 1.8rem;
            }

            .info-card {
                padding: 1.4rem 1.2rem;
            }

            .info-row {
                flex-direction: column;
                gap: 0.25rem;
                text-align: center;
                padding: 0.8rem 0;
            }

            .param {
                text-align: center;
            }

            .navbar {
                padding: 0.5rem 1rem;
            }

            .social-links {
                gap: 0.9rem;
            }
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="buttons">
            <a href="/student" class="btn">Home</a>
        </div>
    </nav>

    <div class="content">

        
        <div class="profile-section">
            <div class="profile-pic">
                <img src="<?= base_url('assets/profile.jpg') ?>" alt="Student profile picture">
            </div>

            <div class="student-name"><?= $name ?></div>
            <p class="short-description">
                Hey there! I'm <?= $name ?>, a 3rd-year Information Technology student at Mindoro State University. I love exploring things in related to technology.
        </div>

        <h1>Student Information</h1>

        <div class="info-card">
            <div class="section-title">Personal Information</div>
            <div class="info-row">
                <span class="info-label">Student ID</span>
                <span class="param"><?= $student_id ?></span>
            </div>
            <div class="info-row">
                <span class="info-label">Email</span>
                <span class="param"><?= $email ?></span>
            </div>
        </div>

        <div class="info-card">
            <div class="section-title">Academic Details</div>
            <div class="info-row">
                <span class="info-label">Course</span>
                <span class="param"><?= $course ?></span>
            </div>
            <div class="info-row">
                <span class="info-label">Year Level</span>
                <span class="param"><?= $year ?></span>
            </div>
            <div class="info-row">
                <span class="info-label">Section</span>
                <span class="param"><?= $section ?></span>
            </div>
        </div>

        <div class="info-card">
            <div class="section-title">Skills & Interests</div>
            <div class="skills-list">
                <span class="skill-tag">Cisco</span>
                <span class="skill-tag">PHP</span>
                <span class="skill-tag">Team Collaboration</span>
                <span class="skill-tag">Critical Thinking</span>
                <span class="skill-tag">C#</span>
                <span class="skill-tag">MySQL</span>
            </div>
        </div>

    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-title">Contact Me</div>
            
            <div class="contact-info">
                <div>Email: <a href="mailto:jurenmaliglig@gmail.com">jurenmaliglig@gmail.com</a></div>
                <div>Phone: <a href="tel:+063 993 987 8279">+063 993 987 8279</a></div>
                <div>Address: Baco Oriental Mindoro</div>
            </div>

            <div class="social-links">
                <a href="https://www.facebook.com/jurenendayamaliglig21" title="Facebook">FB</a>
                <a href="https://twitter.com/jurenmaliglig" title="Twitter / X">X</a>
                <a href="https://www.instagram.com/juren_mlglg?igsh=Z2VpZWoxb242dW9l" title="Instagram">IG</a>
                <a href="https://www.linkedin.com/" title="LinkedIn">IN</a>
            </div>

            <div class="copyright">
                &copy; <?= date('Y') ?> Student Information.
            </div>
        </div>
    </footer>

</body>
</html>