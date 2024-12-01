<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Resmi</title>
    <style>
        * {
            font-family: 'Times New Roman', Times, serif;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #f8f9fa;
            color: #000;
            line-height: 1.6;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            background: #fff;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            border-bottom: 2px solid #000;
            padding-bottom: 15px;
            margin-bottom: 20px;
            gap: 2rem;
        }

        .logo img {
            width: 80px;
        }

        .title {
            flex: 1;
            /* text-align: center; */
            margin-left: 10px;
            margin-right: 10px;
        }

        .title h1 {
            font-size: 20px;
            text-transform: uppercase;
            font-weight: bold;
            margin-bottom: 5px;
            border-bottom: 2px solid #000;
        }

        .title p {
            font-size: 14px;
        }

        .detail {
            text-align: right;
            font-size: 12px;
            line-height: 1.4;
        }

        .header-info {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 20px;
        }

        .header-info div {
            flex: 1;
            margin-bottom: 10px;
        }

        .content {
            margin-top: 20px;
            text-align: justify;
            font-size: 14px;
        }

        .content ul {
            margin-left: 20px;
            padding-left: 20px;
            list-style-type:none;
        }

        .footer {
            margin-top: 40px;
            text-align: right;
        }

        .signature-space {
            margin-top: 80px;
        }

        .guru {
            text-align: left;
            font-size: 14px;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                text-align: center;
            }

            .detail {
                text-align: center;
                margin-top: 10px;
            }

            .header-info {
                flex-direction: column;
                text-align: left;
            }

            .content ul {
                margin-left: 10px;
            }
        }

        @media (max-width: 480px) {
            .logo img {
                width: 60px;
            }

            .title h1 {
                font-size: 18px;
            }

            .title p {
                font-size: 12px;
            }

            .content {
                font-size: 13px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">
                <img src="https://smkwikrama.sch.id/assets2/wikrama-logo.png" alt="Logo WK">
            </div>
            <div class="title">
                <h1>SMK WIKRAMA BOGOR</h1>
                <p>Bisnis dan Manajemen</p>
                <p>Teknologi Informasi dan Komunikasi</p>
                <p>Pariwisata</p>
            </div>
            <div class="detail">
                <p>Jl. Raya Wangun Kel. Sindangsari Bogor</p>
                <p>Telp/Faks: (0251) 8242411</p>
                <p>Email: prohumasi@smkwikrama.sch.id</p>
                <p>Website: www.smkwikrama.sch.id</p>
            </div>
        </header>
        <main>
            <div class="header-info">
                <div>
                    <p>No: 220604-1/0002/SMK WIKRAMA BOGOR/XII/2023</p>
                    <p>Hal: <b>Rapat Rutin</b></p>
                </div>
                <div>
                    <p>17 Desember 2023</p>
                    <br>
                    <p>Kepada Yth. Bapak/Ibu Terlampir</p>
                    <p>di</p>
                    <p>Tempat</p>
                </div>
            </div>
            <div class="content">
                <p>Dengan hormat,</p>
                <p>Bersama ini kami mengundang Bapak/Ibu untuk mengikuti rapat yang akan dilaksanakan pada:</p>
                <ul>
                    <li>Hari, Tanggal: Rabu, 13 Desember 2023</li>
                    <li>Pukul: 14.00 WIB s.d. Selesai</li>
                    <li>Tempat: Ruang Kepala Sekolah</li>
                    <li>Agenda: Pengelolaan Laboratorium</li>
                    <li>Notulis: Dinda S.S.</li>
                </ul>
                <p>Demikian undangan ini kami sampaikan. Atas perhatian dan kerja sama Bapak/Ibu, kami ucapkan terima kasih.</p>
            </div>
            <br>
            <div class="guru">
                <p>Dinda S.S.</p>
                <p>Asma S.Kom</p>
            </div>
            <div class="footer">
                <p>Hormat kami,</p>
                <p>Kepala Sekolah</p>
                <div class="signature-space">
                    <p>............................</p>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
