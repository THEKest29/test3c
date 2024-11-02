<a href="/quests">Вернуться</a>
<div>
<h1> {{ $quests->tema }} </h1>
<h2> {{ $quests->quest }} </h2>
</div>
<h2>Ответь</h2>
<form action="{{ route('answers.learn') }}" method="POST">
    <input type="text" name="text" id="text" placeholder="Ответ" required>
    <button type="success">Отправить</button>
</form>
<ul>
    @foreach($answers as $answer)
    <li>
        <p> {{ $answer->text }} </p>
</li>
    @endforeach
</ul>