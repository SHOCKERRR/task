
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
    style="width:400px; margin:20px">
    Добавить задачу
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Добавление новой задачи</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="AddTasks">
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" class="form-control" id="Email" aria-describedby="emailHelp"
                            placeholder="Введите Ваш e-mail" required>
                    </div>
                    <div class="form-group">
                        <label for="Name">Имя</label>
                        <input type="text" class="form-control" id="Name" placeholder="Введите Ваше Имя" required>
                    </div>
                    <div class="form-group">
                        <label for="Task">Задача</label>
                        <input type="text" class="form-control" id="Task" placeholder="Введите задачу" required>
                    </div>
                    <button type="submit" class="btn btn-primary" id='AddTask'><i class="fas fa-plus"></i>Добавить задачу</button>
                    <div id="logT" style="margin-top:20px; font-size:18px"></div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

</body>

</html>