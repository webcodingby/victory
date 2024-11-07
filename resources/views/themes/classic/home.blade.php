<h1>Главная страница - Тема Classic</h1>

<form action="{{ route('set.theme') }}" method="POST">
    @csrf
    <label for="theme">Выберите тему:</label>
    <select name="theme" id="theme">
        <option value="classic">Classic</option>
        <option value="cuba">Cuba</option>
    </select>
    <button type="submit">Сохранить</button>
</form>

