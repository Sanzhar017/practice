<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ТОО "ЦИФРОВЫЕ РЕАЛИЗАЦИИ" - Юридические услуги</title>
    <!-- Подключение Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Подключение пользовательского CSS -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>

<!-- Шапка сайта -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">ТОО "ЦИФРОВЫЕ РЕАЛИЗАЦИИ"</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Услуги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Контакты</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- Основной контент -->
<main role="main" class="container mt-4">
    <div class="jumbotron">
        <h1 class="display-4">Добро пожаловать в ТОО "Цифровые Реализации"!</h1>
        <p class="lead">Мы предоставляем высококачественные юридические услуги и помогаем в подписании договоров, разработке правовых документов и защите ваших интересов.</p>
        <hr class="my-4">
        <p>Наши специалисты помогут вам решить любые юридические вопросы быстро и эффективно.</p>
        <a class="btn btn-primary btn-lg" href="{{route('contracts.index')}}" role="button">Подписание договоров</a>
        <a class="btn btn-primary btn-lg" href="{{route('companies.create')}}" role="button">Компании</a>
        <a class="btn btn-primary btn-lg" href="{{route('users.create')}}" role="button">Менеджера</a>
        <a class="btn btn-primary btn-lg" href="{{route('contypes.create')}}" role="button">Тип договора</a>

    </div>



    <section>
        <h2>Наши услуги</h2>
        <div class="row">
            <div class="col-md-4">

            </div>


            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://ckp.in.ua/ru/wp-content/uploads/sites/4/2021/07/successful-business-partners-discussing-contract-738x492.jpg" class="card-img-top" alt="Услуга 2">
                    <div class="card-body">
                        <h5 class="card-title">Подписание договоров</h5>
                        <p class="card-text">Оказываем услуги по проверке и подписанию договоров различной сложности.</p>
                    </div>
                </div>
            </div>

    </section>
</main>

<!-- Футер -->
<footer class="bg-dark text-white text-center py-3">
    <p>&copy; {{ date('Y') }} ТОО Цифровые Реализации. Все права защищены.</p>
    <p>
        <a href="#" class="text-white">Политика конфиденциальности</a> |
        <a href="#" class="text-white">Условия использования</a>
    </p>
</footer>

<!-- Подключение Bootstrap JS и зависимостей -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
