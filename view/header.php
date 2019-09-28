<!doctype html>
<html lang="en">
  <head>
	<title>Задачник</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/main.js"></script>
   	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
  <body>
  <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand">Задачник</a>
 <?php if (!isset($_COOKIE['user'])){ 
    echo '<button id="login" class="btn btn-info" data-toggle="modal" data-target="#LoginForm" style="margin-left:50px; width:200px">Войти</button>';
 }else{
    echo '<b>Привет, админ!</b> <button id="logOut" class="btn btn-danger" style="margin-left:50px; width:200px">Выйти</button>';
 }?>
</nav>
<div id="FormEditOverlay"></div>
<div id="Overlay"></div>
<div class="modal fade" id="LoginForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form id="Login">
                    <div class="form-group">
                        <label for="User">Логин</label>
                        <input type="text" class="form-control" id="User"
                            placeholder="Введите Ваш логин" required>
                    </div>
                    <div class="form-group">
                        <label for="Pass">Пароль</label>
                        <input type="text" class="form-control" id="Pass" placeholder="Введите пароль" required>
                    </div>
                    <button type="submit" class="btn btn-primary" id='Log_In'>Войти</button>
                    <div id="log"></div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>