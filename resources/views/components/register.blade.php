<div class="card p-3 mb-3">
    <h2>Реєстрація</h2>
    <form>
        <div class="mb-2">
            <label for="first_name" class="form-label">Ім'я</label>
            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Іван">
        </div>
        <div class="mb-2">
            <label for="last_name" class="form-label">Прізвище</label>
            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Трунов">
        </div>
        <div class="mb-2">
            <label for="reg_password" class="form-label">Пароль</label>
            <input type="password" name="password" id="reg_password" class="form-control" placeholder="Придумайте пароль">
        </div>
        <div class="mb-3">
            <label class="form-label">Стать</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="gender_male" value="male">
                <label class="form-check-label" for="gender_male">
                    Чоловік
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="gender_female" value="female">
                <label class="form-check-label" for="gender_female">
                    Жінка
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Зареєструватися</button>
    </form>
</div>
