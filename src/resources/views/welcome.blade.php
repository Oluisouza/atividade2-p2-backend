<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Mural de Ideias</title>
    <style>
        body { background: #f1f5f9; font-family: sans-serif; display: flex; justify-content: center; align-items: center; min-height: 100vh; }
        .container { width: 500px; background: white; padding: 2rem; border-radius: 0.5rem; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1); }
        h1 { text-align: center; color: #1e293b; }
        form textarea { width: 100%; padding: 0.5rem; border: 1px solid #cbd5e0; border-radius: 0.25rem; box-sizing: border-box; }
        form button { display: block; width: 100%; background: #334155; color: white; padding: 0.75rem; border: none; border-radius: 0.25rem; margin-top: 1rem; cursor: pointer; }
        .idea { background: #f8fafc; border: 1px solid #e2e8f0; padding: 1rem; margin-top: 1rem; border-radius: 0.25rem; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Mural de Ideias</h1>

        <form action="{{ route('idea.store') }}" method="POST">
            @csrf
            <textarea name="content" rows="3" placeholder="Qual a sua ideia?"></textarea>
            <button type="submit">Publicar Ideia</button>
        </form>

        <div class="ideas-list">
            @forelse ($ideas as $idea)
                <div class="idea">
                    <p>{{ $idea->content }}</p>
                    <small>Publicado em {{ $idea->created_at->format('d/m/Y') }}</small>
                </div>
            @empty
                <p style="text-align: center; margin-top: 1rem;">Nenhuma ideia ainda. Seja o primeiro!</p>
            @endforelse
        </div>
    </div>
</body>
</html>