<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Advanced</title>
</head>
<body>
    <header>
        <h1>Kalkulator Advanced</h1>
    </header>

    <main>
        <section>
            <h2>Operasi Lanjutan</h2>

            <!-- Power -->
            <form method="GET" action="{{ url('/advanced/power') }}">
                <label for="a">Angka 1:</label>
                <input type="number" name="a" id="a" required>
                <label for="b">Angka 2:</label>
                <input type="number" name="b" id="b" required>
                <button type="submit">Pangkat</button>
            </form>

            <!-- Square Root -->
            <form method="GET" action="{{ url('/advanced/sqrt') }}">
                <label for="a">Angka:</label>
                <input type="number" name="a" id="a" required>
                <button type="submit">Akar Kuadrat</button>
            </form>

            <!-- Logarithm -->
            <form method="GET" action="{{ url('/advanced/log') }}">
                <label for="a">Angka:</label>
                <input type="number" name="a" id="a" required>
                <button type="submit">Logaritma</button>
            </form>

            <!-- Percentage -->
            <form method="GET" action="{{ url('/advanced/percent') }}">
                <label for="a">Nilai:</label>
                <input type="number" name="a" id="a" required>
                <label for="b">Total:</label>
                <input type="number" name="b" id="b" required>
                <button type="submit">Persentase</button>
            </form>

            <!-- Factorial -->
            <form method="GET" action="{{ url('/advanced/factorial') }}">
                <label for="a">Angka:</label>
                <input type="number" name="a" id="a" required>
                <button type="submit">Faktorial</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Kalkulator Advanced - Sains</p>
    </footer>
</body>
</html>
