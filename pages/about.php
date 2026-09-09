<?php 

require __DIR__ . "/includes/session.php";
$pageTitle = "О нас - Портфолио";

require __DIR__ . "/includes/header.php" ?>
    <main>
        <h1>About Me</h1>

        <p>Hello! I’m a dedicated <b>Backend Developer</b> and <b>Linux Systems Administrator</b> passionate about building robust web applications, high-performance automated systems, and reliable server infrastructure.</p>
        <p>With a strong foundation in modern backend architecture and systems management, I design clean, scalable solutions that solve real-world problems.</p>

        <h2>What I Do</h2>

        <ul>
            <li>
                <div>
                    <b>Backend Development (PHP 8+):</b>
                </div>
                <p>Building structured, maintainable, and object-oriented backend systems. Experienced in working with advanced file stream handling, custom exception architectures, and maintaining high code quality through static analysis tools like PHPStan.</p>
            </li>
            
            <li>
                <div>
                    <b>Automated Systems & Trading Bots (Python):</b>
                </div>
                <p>Developing high-frequency and asynchronous applications using Python. Built real-time trading bots powered by asyncio, WebSockets, MySQL database integration (aiomysql), structured logging (loguru), and automated Telegram notification systems.</p>
            </li>

            <li>
                <div>
                    <b>Linux & Server Administration:</b>
                </div>
                <p>Hands-on experience configuring and managing Debian Linux environments. Skilled in server setup, process management with GNU Screen, remote application deployment on VPS platforms (DigitalOcean), and low-level system utilities including Android Debug Bridge (ADB) management.</p>
            </li>

            <li>
                <div>
                    <b>Frontend & Web Interfaces:</b>
                </div>
                <p>Crafting clean, responsive UI components using HTML5, CSS3, and modern JavaScript libraries to ensure seamless user interactions.</p>
            </li>

            <li>
                <div>
                    <b>Data Analysis & Quantitative Logic:</b>
                </div>
                <p>A keen interest in market mechanics and quantitative data analysis, applying tools like Volume Profile (VPFR/VPVR), Open Interest, Cumulative Volume Delta (CVD), and order flow metrics to design automated execution and risk-management logic.</p>
            </li>
        </ul>
        
        <h2>Tech Stack & Tools</h2>
        <ul>
            <li>
                <b>Languages:</b> PHP, Python, JavaScript, HTML5, CSS3, SQL
            </li>
            <li>
                <b>Backend & Async:</b> PHP 8+, asyncio, aiomysql, WebSockets
            </li>
            <li>
                <b>Databases:</b> MySQL
            </li>
            <li>
                <b>DevOps & OS:</b> Debian Linux, DigitalOcean VPS, Bash / Terminal, GNU Screen, ADB
            </li>
            <li>
                <b>Code Quality & Utilities:</b> PHPStan, Loguru
            </li>
        </ul>

        <h2>My Approach</h2>
        <p>I believe in <b>clean code, modular architecture, and continuous learning</b>. Whether it’s optimizing a database query, structuring a robust backend API, or managing server environments, I focus on delivering reliability, safety, and performance.</p>
        <p>Currently continuously sharpening my engineering skills and improving my technical English to collaborate effectively on international projects.</p>

        <h2>Let's Connect</h2>
        <p>If you are looking for a reliable developer to bring your ideas to life, build custom backend solutions, or automate complex processes, feel free to reach out!</p>
    </main>
<?php require "./includes/footer.php" ?>