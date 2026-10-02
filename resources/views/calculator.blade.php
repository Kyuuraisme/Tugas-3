<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Kalkulator Laravel</h1>
    </header>

    <main>
        <section>
            <h2>Operasi Dasar</h2>
            <form method="GET" action="{{ url('/count/hasil') }}">
                <label for="a">Angka 1:</label>
                <input type="number" name="a" id="a" required>

                <label for="b">Angka 2:</label>
                <input type="number" name="b" id="b" required>

                <label for="operator">Operator:</label>
                <select name="operator" id="operator">
                    <option value="tambah">Tambah (+)</option>
                    <option value="kurang">Kurang (-)</option>
                    <option value="kali">Kali (×)</option>
                    <option value="bagi">Bagi (÷)</option>
                </select>

                <button type="submit">Hitung</button>
            </form>
        </section>
        
    </main>
</body>
</html>