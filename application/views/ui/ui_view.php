<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="icon" href="<?php echo base_url('assets/img/title logo.png'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/cards.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/music_section.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/music_table.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/mobile_view.css'); ?>">
    <title>DRIAN | PLAYLIST</title>
</head>

<body>
<!-- Header -->
<header class="header">
        <div class="left-section">
            <i class="fas fa-bars menu-icon" id = "sidebar"></i>
            <img src="<?php echo base_url('assets/img/solomusic.png'); ?>" alt=" Logo" class="logo">
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search">
            <button class="search-btn"><i class="fas fa-search"></i></button>
            <button class="mic-btn"><i class="fas fa-microphone"></i></button>

            <div class="search-icon" id="searchIcon">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" pointer-events="all">
                <path d="M10 4a6 6 0 100 12 6 6 0 000-12zm8 8l4 4" stroke="currentColor" stroke-width="2" fill="none"/>
            </svg>
        </div>
    </div>
    </div>
        </div>
        <div class="right-section">
            <i class="fas fa-video create-icon"></i>
            <i class="fas fa-thumbs-up like-icon"></i>
            <i class="fas fa-bell bell-icon"></i>
            <img src="https://example.com/life-bad.jpg" 
                 onerror="this.onerror=null; this.src='https://placehold.co/20x20?text=20x20';" 
                 alt="profile">
        </div>
    </header>
    <!-- End of Header -->
    
     <!-- Sidebar -->
    <div class="sidebar">
        <ul>
            <li><a href="#"><i class="fa-solid fa-house"></i><span>Home</span></a></li>
            <li><a href="#"><i class="fa-solid fa-compass"></i><span>Explore</span></a></li>
            <li><a href="#"><i class="fa-solid fa-video"></i><span>Subscriptions</span></a></li>
            <li><a href="#"><i class="fa-solid fa-clock"></i><span>Playlist</span></a></li>
            <li><a href="#"><i class="fa-solid fa-thumbs-up"></i><span>Latest</span></a></li>
        </ul>
        <!-- Sidebar Footer -->
    <div class="footer">
        <hr>
        <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Help</a></li>
        </ul>
        <img src="<?php echo base_url('assets/img/solomusic.png'); ?>" alt=" Logo" class="logo">
        <div class="social-icons">
    <div class="social-container"><a href="#"><i class="fa-brands fa-facebook"></i></a></div>
    <div class="social-container"><a href="#"><i class="fa-brands fa-twitter"></i></a></div>
    <div class="social-container"><a href="#"><i class="fa-brands fa-instagram"></i></a></div>
    <div class="social-container"><a href="#"><i class="fa-brands fa-youtube"></i></a></div>
</div>
    </div>
</div>
    </div>
    <!-- End of Sidebar -->
     <!-- Main -->  
     <main>
     <section class="genre-section">
    <h2>Genre</h2>
    <div class="genre-grid">
        <div class="genre-card">
            <img src="https://example.com/life-bad.jpg" 
                 onerror="this.onerror=null; this.src='https://placehold.co/50x50?text=50x50';" 
                 alt="Life isn't that bad">
            <p>Rock</p>
        </div>
        <div class="genre-card">
            <img src="https://example.com/malayalam.jpg" 
                 onerror="this.onerror=null; this.src='https://placehold.co/50x50?text=50x50';" 
                 alt="Malayalam">
            <p>Country Music</p>
        </div>
        <div class="genre-card">
            <img src="https://example.com/thougthery.jpg" 
                 onerror="this.onerror=null; this.src='https://placehold.co/50x50?text=50x50';" 
                 alt="Thoughtery">
            <p>Popular Music</p>
        </div>
        <div class="genre-card">
            <img src="https://example.com/hindi.jpg" 
                 onerror="this.onerror=null; this.src='https://placehold.co/50x50?text=50x50';" 
                 alt="Hindi">
            <p>OPM</p>
        </div>
        <div class="genre-card">
            <img src="https://example.com/latest-malayalam.jpg" 
                 onerror="this.onerror=null; this.src='https://placehold.co/50x50?text=50x50';" 
                 alt="Latest Malayalam">
            <p>Reggae</p>
        </div>
        <div class="genre-card">
            <img src="https://example.com/finshots.jpg" 
                 onerror="this.onerror=null; this.src='https://placehold.co/50x50?text=50x50';" 
                 alt="Finshots Daily">
            <p>Pop Music</p>
        </div>
        <div class="genre-card">
            <img src="https://example.com/trance.jpg" 
                 onerror="this.onerror=null; this.src='https://placehold.co/50x50?text=50x50';" 
                 alt="Trance">
            <p>Punk Rock</p>
        </div>
        <div class="genre-card">
            <img src="https://example.com/darkness.jpg" 
                 onerror="this.onerror=null; this.src='https://placehold.co/50x50?text=50x50';" 
                 alt="Hello darkness">
            <p>nigt core</p>
        </div>
        <div class="genre-card">
            <img src="https://example.com/darkness.jpg" 
                 onerror="this.onerror=null; this.src='https://placehold.co/50x50?text=50x50';" 
                 alt="Hello darkness">
            <p>Hiphop</p>
        </div>
        <div class="genre-card">
            <img src="https://example.com/darkness.jpg" 
                 onerror="this.onerror=null; this.src='https://placehold.co/50x50?text=50x50';" 
                 alt="Hello darkness">
            <p>Rap</p>
    </div>
</section>
<section class="music-section">
    <h2>Top Artist</h2>
    <div class="music-grid">
        <div class="music-card">
            <img src="https://example.com/image1.jpg" 
                 onerror="this.onerror=null; this.src='https://placehold.co/150x150?text=150x150';" 
                 alt="Life isn't that bad">
            <h3>title</h3>
        </div>

        <div class="music-card">
            <img src="https://example.com/image2.jpg" 
                 onerror="this.onerror=null; this.src='https://placehold.co/150x150?text=150x150';" 
                 alt="Malayalam">
            <h3>Title</h3>
        </div>

        <div class="music-card">
            <img src="https://example.com/image3.jpg" 
                 onerror="this.onerror=null; this.src='https://placehold.co/150x150?text=150x150';" 
                 alt="Thoughtery">
            <h3>Title</h3>
        </div>

        <div class="music-card">
            <img src="https://example.com/image4.jpg" 
                 onerror="this.onerror=null; this.src='https://placehold.co/150x150?text=150x150';" 
                 alt="Hindi">
            <h3>Title</h3>
        </div>

        <div class="music-card">
            <img src="https://example.com/image5.jpg" 
                 onerror="this.onerror=null; this.src='https://placehold.co/150x150?text=150x150';" 
                 alt="Latest Malayalam">
            <h3>Title</h3>
        </div>

        <div class="music-card">
            <img src="https://example.com/image6.jpg" 
                 onerror="this.onerror=null; this.src='https://placehold.co/150x150?text=150x150';" 
                 alt="Finshots Daily">
            <h3>Title</h3>
        </div>
    </div>
</section>
<section class="recommended-section">
    <h2>Recommended new tracks</h2>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>TITLE</th>
                    <th>ARTIST</th>
                    <th>ALBUM</th>
                    <th>TIME</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="track-info">
                            <img src="https://example.com/image1.jpg" 
                                 onerror="this.onerror=null; this.src='https://placehold.co/40x40';" 
                                 alt="High Alone">
                            <span>High Alone</span>
                        </div>
                    </td>
                    <td>Jackson Wang</td>
                    <td>High Alone</td>
                    <td>3:16</td>
                </tr>
                <tr>
                    <td>
                        <div class="track-info">
                            <img src="https://example.com/image2.jpg" 
                                 onerror="this.onerror=null; this.src='https://placehold.co/40x40';" 
                                 alt="Crush">
                            <span>Crush</span>
                        </div>
                    </td>
                    <td>AJ Tracey, Jorja Smith</td>
                    <td>Crush</td>
                    <td>3:18</td>
                </tr>
                <tr>
                    <td>
                        <div class="track-info">
                            <img src="https://example.com/image3.jpg" 
                                 onerror="this.onerror=null; this.src='https://placehold.co/40x40';" 
                                 alt="Remember My Name">
                            <span>Remember My Name</span>
                        </div>
                    </td>
                    <td>Sam Fender</td>
                    <td>Remember My Name</td>
                    <td>3:03</td>
                </tr>
                <tr>
                    <td>
                        <div class="track-info">
                            <img src="https://example.com/image4.jpg" 
                                 onerror="this.onerror=null; this.src='https://placehold.co/40x40';" 
                                 alt="Hey">
                            <span>Hey</span>
                        </div>
                    </td>
                    <td>Backstreet Boys</td>
                    <td>Hey</td>
                    <td>3:27</td>
                </tr>
                <tr>
                    <td>
                        <div class="track-info">
                            <img src="https://example.com/image5.jpg" 
                                 onerror="this.onerror=null; this.src='https://placehold.co/40x40';" 
                                 alt="TEN">
                            <span>TEN</span>
                        </div>
                    </td>
                    <td>Offset</td>
                    <td>TEN</td>
                    <td>2:08</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
    </main>
    
    <!-- End of Main -->
    <script src="<?php echo base_url('assets/js/home.js'); ?>"></script>
  
    <script src="<?php echo base_url('assets/js/sm_screen.js'); ?>"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>