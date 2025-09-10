<div>
    <h1>Login</h1>

    <form action="/login" method="post">
        @csrf

        <input name="email" placeholder="email" value="{{ old('email') }}" />
        <input type="password" name="password" placeholder="senha" />

        <button>Logar</button>
    </form>
</div>
