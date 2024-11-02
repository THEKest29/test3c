<h1>Напиши вопрос</h1>
<form action="{{ route('quest.show') }}" method="POST">
    @csrf
    <input type="text" name="tema" id="tema" placeholder="тема вопроса" required>
    <input type="text" name="quest" id="quest" placeholder="вопрос" required>
    <button type="success">Отправить</button>
</form>
<h2>Вопросы</h2>
<ul>
    @foreach($quests as $quest)
    <li>
        <p>{{ $quest->tema }}</p>
        <p>{{ $quest->quest }}</p>
        <p>{{ $quest->created_at }}</p>
        <a href="{{ url('/quests/' . $quest->id) }}">Перейти к вопросу</a>
</li>
    @endforeach
</ul>
{{ $quests->links() }}