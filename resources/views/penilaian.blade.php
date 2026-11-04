<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Data Mahasiswa {{ $universitas }}</title>
    <style>
        :root {
            color-scheme: light;
            font-family: Arial, Helvetica, sans-serif;
            color: #172554;
            background: #eaf4ff;
        }

        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
            padding: 48px 20px;
            background: linear-gradient(135deg, #eaf4ff 0%, #dceeff 100%);
        }

        .page {
            width: min(100%, 820px);
            margin: 0 auto;
        }

        .card {
            overflow: hidden;
            border: 1px solid rgba(148, 163, 184, 0.18);
            border-radius: 22px;
            background: #fff;
            box-shadow: 0 18px 50px rgba(30, 64, 175, 0.1);
        }

        .card-header {
            padding: 36px 40px 30px;
            color: #fff;
            background: linear-gradient(120deg, #2563eb, #3b82f6);
        }

        .eyebrow {
            margin: 0 0 10px;
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.13em;
            text-transform: uppercase;
            color: #dbeafe;
        }

        h1 {
            margin: 0;
            font-size: clamp(1.55rem, 4vw, 2.15rem);
            line-height: 1.25;
        }

        .university {
            margin: 12px 0 0;
            color: #eff6ff;
            font-size: 1rem;
        }

        .card-body {
            padding: 32px 40px 38px;
        }

        .year {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 28px;
            padding: 10px 15px;
            border-radius: 999px;
            background: #eff6ff;
            color: #1d4ed8;
            font-size: 0.95rem;
            font-weight: 700;
        }

        h2 {
            margin: 0 0 16px;
            font-size: 1.15rem;
            color: #1e293b;
        }

        .table-wrap {
            overflow-x: auto;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        thead {
            background: #f1f5f9;
        }

        th,
        td {
            padding: 15px 18px;
            border-bottom: 1px solid #e2e8f0;
        }

        th {
            color: #475569;
            font-size: 0.82rem;
            letter-spacing: 0.04em;
            text-transform: uppercase;
        }

        td {
            color: #334155;
        }

        tbody tr:last-child td {
            border-bottom: 0;
        }

        .number,
        .credits {
            width: 90px;
            text-align: center;
        }

        .credit-value {
            display: inline-block;
            min-width: 34px;
            padding: 5px 9px;
            border-radius: 8px;
            background: #eff6ff;
            color: #1d4ed8;
            font-weight: 700;
        }

        @media (max-width: 600px) {
            body {
                padding: 24px 14px;
            }

            .card-header {
                padding: 28px 24px 24px;
            }

            .card-body {
                padding: 26px 20px 30px;
            }

            th,
            td {
                padding: 13px 12px;
            }
        }
    </style>
</head>
<body>
    <main class="page">
        <section class="card" aria-labelledby="page-title">
            <header class="card-header">
                <p class="eyebrow">Informasi Akademik</p>
                <h1 id="page-title">Informasi Data Mahasiswa</h1>
                <p class="university">{{ $universitas }}</p>
            </header>

            <div class="card-body">
                <p class="year">Tahun Masuk: {{ $tahunMasuk }}</p>

                <h2>Daftar Mata Kuliah</h2>
                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th class="number" scope="col">No.</th>
                                <th scope="col">Mata Kuliah</th>
                                <th class="credits" scope="col">Jumlah SKS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mataKuliah as $index => $mata)
                                <tr>
                                    <td class="number">{{ $index + 1 }}</td>
                                    <td>{{ $mata }}</td>
                                    <td class="credits"><span class="credit-value">{{ $jumlahSks[$index] }}</span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
