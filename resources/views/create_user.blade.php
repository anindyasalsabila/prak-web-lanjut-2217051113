<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebLanjut</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        label {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
<form action="{{ route('user.store') }}" method="POST"> 
        @csrf
        <label for = "nama" >Nama: </label>
        <input type = "text" id = "nama" name = "nama">
                @foreach($errors->get('nama') as $msg)
                <p class="text-danger">{{ $msg }}</p>
                @endforeach

        <label for = "npm" >NPM: </label>
        <input type = "text" id = "npm" name = "npm">
                @foreach($errors->get('npm') as $msg)
                <p class="text-danger">{{ $msg }}</p>
                @endforeach

        <label for = "id_kelas" >Kelas: </label><br>
        <select name="kelas_id" id="kelas_id" required>
                @foreach($kelas as $kelasItem)
                <option value = "{{$kelasItem->id}}">{{$kelasItem->nama_kelas}}</option>
                @endforeach
        </select>
        <input type="submit" value ="submit">
    </form>
</body>
</html>
