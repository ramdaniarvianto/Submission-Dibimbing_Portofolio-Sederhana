<?php 
require "functions.php";

$portofolio = query("SELECT * FROM portofolio");

if ( isset($_POST["submit"]) ) {
    if ( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('Thanks for leaving a message!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Failed to leave message. Check your input and try again.');
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio <?php echo $year; ?></title>
    <link rel="icon" href="assets/images/ramdani.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bricolage+Grotesque">
    <script src="https://kit.fontawesome.com/98721b54aa.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <!-- NAV LEFT -->
        <a href="index.php" class="nav-left">
            <div class="nav-l-img">
                <img src="assets/images/ramdani.jpg" alt="Ramdani Arvianto">
            </div>
            <div class="nav-l-text">
                <h4>Ramdani Arvianto <svg xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960" width="15px" fill="#0075FF"><path d="m347-72-75-124-141-32 13-144-96-108 96-108-13-144 141-32 75-124 133 57 133-57 75 124 141 32-13 144 96 108-96 108 13 144-141 32-75 124-133-57-133 57Zm29-91 104-44 104 44 58-97 110-25-10-111 74-84-74-84 10-111-110-25-58-97-104 44-104-44-58 97-110 24 10 112-74 84 75 84-11 112 110 25 58 96Zm104-317Zm-51 144 238-237-51-51-187 186-85-84-51 51 136 135Z"/></svg></h4>
                <p><?= greet(); ?></p>
            </div>
        </a>
        <!-- NAV RIGHT -->
        <div class="nav-right">
            <a href="#about"><i class="fa-solid fa-user"></i> About</a>
            <a href="#projects"><i class="fa-solid fa-folder"></i> Projects</a>
            <a href="#links"><i class="fa-solid fa-link"></i> Links</a>
        </div>
        <!-- CHECKBOX FOR SIDEBAR -->
        <input type="checkbox" name="coSidebar" id="coSidebar">
        <!-- SIDEBAR -->
        <div class="sidebar">
            <div class="sidebar-wrap">
                <div class="sidebar-title">
                    &nbsp;
                    <label for="coSidebar" class="closeSidebar"><i class="fa-solid fa-xmark"></i></label>
                </div>
                <div class="sidebar-links">
                    <a href="#about"><i class="fa-solid fa-user"></i> About</a>
                    <a href="#projects"><i class="fa-solid fa-folder"></i> Projects</a>
                    <a href="#links"><i class="fa-solid fa-link"></i> Links</a>
                </div>
            </div>
        </div>
        <!-- OVERLAY -->
        <label for="coSidebar" class="overSidebar"></label>
        <!-- OPEN SIDEBAR -->
        <label for="coSidebar" class="openSidebar"><i class="fa-solid fa-bars"></i></label>
    </nav>

    <main>
        <section class="about" id="about">
            <h2><i class="fa-solid fa-user"></i> About</h2>
            <div class="about-wrap">
                <div class="about-text">
                    <p>Hi, my name is Ramdani Arvianto. I’m an 8th-semester student majoring in Informatics Engineering at Sekolah Tinggi Ilmu Komputer Cipta Karya Informatika. On campus, I’m part of BEM (Badan Eksekutif Mahasiswa) as a member of Depkominfo (Departemen Kementerian Komunikasi dan Informasi). In Depkominfo, I contributed to developing a website for BEM. Currently, I have skills in HTML, CSS, JavaScript, and PHP, but I’m still in the process of mastering them. I wouldn’t say I’ve fully grasped these languages yet, but I’m constantly learning and improving to develop a deeper understanding and become more proficient in web development.</p>
                </div>
                <div class="about-skills">
                    <div class="skill">
                        <i class="fa-brands fa-html5"></i>
                    </div>
                    <div class="skill">
                        <i class="fa-brands fa-css3-alt"></i>
                    </div>
                    <div class="skill">
                        <i class="fa-brands fa-js"></i>
                    </div>
                    <div class="skill">
                        <i class="fa-brands fa-php"></i>
                    </div>
                </div>
            </div>
        </section>

        <section class="projects" id="projects">
            <h2><i class="fa-solid fa-folder"></i> Projects</h2>
            <div class="projects-wrap">
                <!-- MAKE A WISH -->
                <div class="project">
                    <img src="assets/images/wish.png" alt="Make a Wish" title="Make a Wish">
                    <div class="info">
                        <div class="project-details">
                            <span>Make a Wish</span>
                            <p>Sebuah proyek sederhana yang memungkinkan pengguna mengirimkan harapan mereka untuk tahun berjalan. Tahun di dalam pesan berubah secara otomatis setiap tahunnya, membuatnya selalu relevan. Dibangun untuk latihan dalam menangani input user dan penyimpanan data sederhana.</p>
                        </div>
                        <a href="http://make-a-wish.infinityfreeapp.com" target="_blank">View This Project</a>
                    </div>
                </div>
                <!-- KNOCK KNOCK -->
                <div class="project">
                    <img src="assets/images/login.png" alt="Knock Knock" title="knock Knock">
                    <div class="info">
                        <div class="project-details">
                            <span>Knock Knock</span>
                            <p>Sebuah sistem login dan registrasi sederhana. Semua pengguna yang masuk akan mengakses dashboard yang sama, karena belum ada sistem level akses. Hal ini memungkinkan siapa saja untuk melihat, mengedit, dan bahkan menghapus data yang ada. Di dalam dashboard, pengguna dapat mengupdate serta menghapus data. Proyek ini dibuat sebagai latihan dalam membangun sistem autentikasi dasar.</p>
                        </div>
                        <a href="http://knocknock.infinityfreeapp.com" target="_blank">View This Project</a>
                    </div>
                </div>
                <!-- DATA MAHASISWA -->
                <div class="project">
                    <img src="assets/images/mahasiswa.png" alt="Data Mahasiswa" title="Data Mahasiswa">
                    <div class="info">
                        <div class="project-details">
                            <span>Data Mahasiswa</span>
                            <p>Sebuah sistem pengelolaan data mahasiswa dengan fitur lengkap. Pengguna dapat menambahkan, mengedit, dan menghapus data mahasiswa. Sistem ini juga dilengkapi dengan fitur pagination untuk menampilkan data secara lebih rapi dan efisien. Dibangun untuk latihan dalam CRUD (Create, Read, Update, Delete) menggunakan PHP dan database.</p>
                        </div>
                        <a href="http://data-mahasiswa.infinityfreeapp.com" target="_blank">View This Project</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="comments">
            <h2><i class="fa-solid fa-comment"></i> Leave a Message</h2>
            <div class="comment-wrap">
                <form action="" method="POST" class="cw-form">
                    <div class="comment">
                        <label for="nama">Name</label>
                        <input type="text" name="nama" id="nama" autocomplete="off" required placeholder="Your Name">
                    </div>
                    <div class="comment">
                        <label for="komentar">Message</label>
                        <textarea name="komentar" id="komentar" required placeholder="Write your message here..."></textarea>
                    </div>
                    <button type="submit" name="submit">Leave Message</button>
                </form>
                <?php foreach ($portofolio as $porto) : ?>
                <div class="cw-comment">
                    <div class="cwc-wrap">
                        <div class="comment">
                            <p class="nama"><?= $porto["nama"]; ?> <svg xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960" width="15px" fill="#0075FF"><path d="m347-72-75-124-141-32 13-144-96-108 96-108-13-144 141-32 75-124 133 57 133-57 75 124 141 32-13 144 96 108-96 108 13 144-141 32-75 124-133-57-133 57Zm29-91 104-44 104 44 58-97 110-25-10-111 74-84-74-84 10-111-110-25-58-97-104 44-104-44-58 97-110 24 10 112-74 84 75 84-11 112 110 25 58 96Zm104-317Zm-51 144 238-237-51-51-187 186-85-84-51 51 136 135Z"/></svg></p>
                        </div>
                        <div class="comment">
                            <p class="komentar"><?= $porto["komentar"]; ?></p>
                        </div>

                        <div class="comment">
                            <p class="tanggal"><?= date("d M Y - H:i:s", strtotime($porto["timestamp"])); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <footer id="links">
        <!-- LINKEDIN -->
        <a href="https://www.linkedin.com/in/ramdaniarvianto/" target="_blank">LinkedIn <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#000000"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h560v-280h80v280q0 33-23.5 56.5T760-120H200Zm188-212-56-56 372-372H560v-80h280v280h-80v-144L388-332Z"/></svg></a>
        <!-- GITHUB -->
        <a href="https://github.com/ramdaniarvianto" target="_blank">GitHub <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#000000"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h560v-280h80v280q0 33-23.5 56.5T760-120H200Zm188-212-56-56 372-372H560v-80h280v280h-80v-144L388-332Z"/></svg></a>
        <!-- TIKTOK -->
        <a href="https://www.tiktok.com/@ramdaniarvianto" target="_blank">TikTok <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#000000"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h560v-280h80v280q0 33-23.5 56.5T760-120H200Zm188-212-56-56 372-372H560v-80h280v280h-80v-144L388-332Z"/></svg></a>
        <!-- INSTAGRAM -->
        <a href="https://www.instagram.com/ramdanlarvianto/" target="_blank">Instagram <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#000000"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h560v-280h80v280q0 33-23.5 56.5T760-120H200Zm188-212-56-56 372-372H560v-80h280v280h-80v-144L388-332Z"/></svg></a>
        <!-- YOUTUBE -->
        <a href="https://youtube.com/@ramdaniarvianto?si=4gxTHmSt90PBY52g" target="_blank">YouTube <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#000000"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h560v-280h80v280q0 33-23.5 56.5T760-120H200Zm188-212-56-56 372-372H560v-80h280v280h-80v-144L388-332Z"/></svg></a>
    </footer>
</body>
</html>