<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Управление договорами</title>

    <!-- Подключение Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            padding: 20px;
        }

        .table-actions {
            display: flex;
            gap: 10px;
        }

        .form-label {
            font-weight: bold;
        }

        .header {
            margin-bottom: 20px;
        }

        footer {
            margin-top: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
<header class="header">
    <h1 class="text-center">Управление договорами</h1>
</header>

<main class="container">
    @yield('content')
</main>

<footer>
    <p>© 2024, Юридический отдел</p>
</footer>

<!-- Подключение Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
