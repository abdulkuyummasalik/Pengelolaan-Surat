<!DOCTYPE html>
<html>

<head>
    <title>Surat Contoh</title>
    <style>
        /* Tambahkan CSS di sini untuk mengatur tampilan */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header img {
            max-width: 100px;
        }

        .recipient {
            margin-top: 20px;
        }

        .content {
            margin-top: 20px;
        }

        .footer {
            text-align: right;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="logo.png" alt="Logo">
        <h1>SMK WIKRAMA BOGOR</h1>
    </div>
    <div class="recipient">
        <p>Kepada:</p>
        <p>Yth. Bapa/Ibu Terlampir</p>
        <p>di</p>
        <p>Tempat</p>
    </div>
    <div class="content">
        <p>Dengan hormat,</p>
        <p>Bersama ini kami mengundang Bapak/Ibu untuk mengikuti rapat yang akan dilaksanakan pada:</p>
        <ul>
            <li>Hari, Tanggal : Rabu, 13 Desember 2023</li>
            <li>Pukul : 14.00 WIB s.d. Selesai</li>
            <li>Tempat : Ruang Kepala Sekolah</li>
            <li>Agenda : Pengelolaan Laboratorium</li>
            <li>Notulis : Dinda S.S.</li>
        </ul>
        <p>Demikian undangan ini kami sampaikan, atas perhatian dan kerja sama Bapak/Ibu kami ucapkan terima kasih.</p>
    </div>
    <div class="guru">
        @foreach ($guru as $g)
            <p>{{ $g->name }}</p>
        @endforeach
    </div>
    <div class="footer">
        <p>Hormat kami,</p>
        <p>Kepala SMK Wikrama Bogor</p>
        <p>(........................)</p>
    </div>
</body>

</html>
