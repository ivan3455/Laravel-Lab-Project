@extends('layouts.app')

@section('content')
<main>
    <div class="card p-3 mb-3" style="width: 100%; max-width: 450px;">
        <h2>Авторизація</h2>

        <form>
            <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="example@mail.com">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Ваш пароль">
            </div>
            <button type="submit" class="btn btn-primary">Увійти</button>
        </form>
    </div>
</main>
@endsection

