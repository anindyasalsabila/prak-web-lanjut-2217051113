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
            background-color: #007bff; /* Warna header card */
            color: white;
        }
        .profile-picture {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
        .list-group-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .list-group-item strong {
            width: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-white text-center">
                        <h3>Profile</h3>
                    </div>
                    <div class="card-body text-center">
                        <!-- Gambar profil -->
                        <img src="{{ asset('upload/img/' . $user->foto) }}" alt="foto-profile" class="profile-picture">
                        
                        <!-- Teks rata tengah -->
                        <ul class="list-group text-center">
                            <li class="list-group-item">
                                <strong>Nama:</strong> 
                                <span>{{ $user->nama }}</span>
                            </li>
                            <li class="list-group-item">
                                <strong>NPM:</strong>
                                <span>{{ $user->npm }}</span>
                            </li>
                            <li class="list-group-item">
                                <strong>Kelas:</strong> 
                                <span>{{ $user->nama_kelas ?? 'Kelas tidak ditemukan' }}</span>
                            </li>
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
