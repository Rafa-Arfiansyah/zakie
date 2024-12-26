<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Prestasi</title>
    <?php
    require_once 'backend/ctgvalidasi.php';
    ?>

    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: system-ui, -apple-system, sans-serif;
}

body {
    min-height: 100vh;
    display: flex;
    background-image: url(../Asset/Background\ landscape.png);
    background-size: cover;
    background-position: center;
        }


.sidebar {
    width: 280px;
    background: rgba(30, 58, 138, 0.5);
    backdrop-filter: blur(10px);
    padding: 24px;
}

.user-profile {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 16px 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    margin-bottom: 24px;
}

.user-avatar {
    width: 48px;
    height: 48px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
}

.username {
    color: white;
    font-size: 1.1rem;
    flex-grow: 1;
}

.collapse-arrow {
    color: white;
    font-size: 1.5rem;
}

.menu-item {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px 20px;
    margin: 10px 0;
    background: white;
    border-radius: 8px;
    color: #2D2669;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
        }

.menu-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.main-content {
    flex: 1;
     padding: 32px;
}


.main-content {
    flex: 1;
    padding: 40px;
    position: relative;
    overflow-y: auto;
    display: flex;
    flex-direction: column;
}


.search-input {
    width: 100%;
    padding: 16px 24px;
    border-radius: 12px;
    border: none;
    background: white;
    font-size: 1rem;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    width: 939px;
    margin: 0 auto; /* Tengah horizontal */
    margin-bottom: 10px;
}

.page-title {
    color: #ffffff;
    font-size: 1.8rem;
    margin-bottom: 8px;
    font-weight: bold;
}

.subtitle {
    color: #ffffff;
    font-size: 2rem;
    margin-bottom: 30px;
    font-weight: 600;

}

.competition-card {
    background: white;
    border-radius: 16px;
    padding: 20px;
    margin-bottom: 16px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    max-width: 1200px;
}

.competition-info {
    flex: 1;
}

.competition-title {
    color: #7B68EE;
    font-size: 1.8rem;
    margin-bottom: 8px;
    font-weight: 600;
}

.competition-meta {
    display: flex;
    gap: 20px;
    color: #666;
    font-size: 0.9rem;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #7B68EE;
}

.validate-button {
    background: #6A5ACD;
    color: white;
    border: none;
    padding: 12px 32px;
    border-radius: 8px;
    font-weight: 500;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
}

.validate-button:hover {
    background: #483D8B;
}

.menu-icon {
            width: 24px;
            height: 24px;
            fill: #2D2669;
        }


    </style>
</head>
<body>
    <div class="sidebar">
        <div class="user-profile">
            <div class="user-avatar"></div>
            <span class="username">Username</span>
            <span class="collapse-arrow">≪</span>
        </div>
        
        <a href="dashboarddosen.php" class="menu-item">
            <svg class="menu-icon" viewBox="0 0 24 24">
                <path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"/>
            </svg>
            Beranda
        </a>

        <a href="#" class="menu-item">
            <svg class="menu-icon" viewBox="0 0 24 24">
                <path d="M19 3H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm0 16H5V5h14v14z"/>
                <path d="m13.293 6.293-4 4-2.293-2.293-1.414 1.414L8.293 12l1.414 1.414L14 8.414l4.293 4.293 1.414-1.414L13.293 6.293z"/>
            </svg>
            Validasi & Daftar Prestasi
        </a>

        <a href="#" class="menu-item">
            <svg class="menu-icon" viewBox="0 0 24 24">
                <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"/>
                <path d="M11 11h2v6h-2zm0-4h2v2h-2z"/>
            </svg>
            Agenda Kompetisi
        </a>

        <a href="rankpresdosen.html" class="menu-item">
            <svg class="menu-icon" viewBox="0 0 24 24">
                <path d="M20 12a8 8 0 0 0-8-8v8l5.657 5.657A7.95 7.95 0 0 0 20 12z"/>
                <path d="M12 4a8 8 0 0 0 0 16 8 8 0 0 0 0-16zm0 14a6 6 0 1 1 0-12 6 6 0 0 1 0 12z"/>
            </svg>
            Peringkat Mahasiswa
        </a>
    </div>

        <div class="main-content">
            <input type="text" class="search-input" placeholder="Search">
            <h1 class="page-title">Daftar Prestasi</h1>
            <?php while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)): ?>
            <div class="competition-card">
                <div class="competition-info">
                    <h3 class="competition-title"><?php echo htmlspecialchars($row['judul_kompetisi']); ?></h3>
                    <div class="competition-meta">
                        <span class="meta-item">Tingkat: <?php echo htmlspecialchars($row['tingkat_kompetisi']); ?></span>
                        <span>|</span>
                        <span class="meta-item">Jenis: <?php echo htmlspecialchars($row['jenis_kompetisi']); ?></span>
                    </div>
                </div>
                <button type="button" class="validate-button" onclick="window.location.href='Validasi.php?id=<?php echo $row['id_kompetisi']; ?>'">
                    Validasi
                </button>

            </div>
        <?php endwhile; ?>
        </div>
    </div>
</body>
</html>