<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Menambahkan warna latar belakang halaman */
        body {
            background-color: #f0f8ff; /* Warna biru muda */
        }
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            
        }
        .card-header {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
           
        }
        .profile-picture {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-black text-center">
                        <h3>Profile</h3>
                    </div>
                    <div class="card-body text-center">
                        <!-- Gambar profil -->
                        <img src="https://img.wattpad.com/4c907674db67ecca4a4872c3a1b34189d02be019/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f776174747061642d6d656469612d736572766963652f53746f7279496d6167652f41307458744761675a782d6235413d3d2d32372e313566373433336662316539363430303737363237343032353137392e6a7067?s=fit&w=720&h=720.jpg" class="profile-picture mb-4" alt="Profile Picture">
                        
                        <!-- Teks rata tengah -->
                        <ul class="list-group text-center">
                            <li class="list-group-item"><strong>Anindya Salsabila</strong></li>
                            <li class="list-group-item"><strong>B</strong></li>
                            <li class="list-group-item"><strong>2217051113</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>