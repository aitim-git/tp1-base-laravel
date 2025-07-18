<!DOCTYPE html>
<html>
<head>
 <title>Connexion</title>
 <style>
 body { font-family: Arial, sans-serif; max-width: 400px; margin: 0
auto; padding: 20px; }
 .form-group { margin-bottom: 15px; }
 input { width: 100%; padding: 8px; box-sizing: border-box; }
 button { background: #007bff; color: white; border: none; padding:
10px; width: 100%; }
 .error { color: red; font-size: 14px; }
 </style>
</head>
<body>
 <h1>Connexion</h1>
 <form method="POST" action="{{ route('login') }}">
 @csrf
 <div class="form-group">
 <label>Email</label>
 <input type="email" name="email" value="{{ old('email') }}"
required>
 @error('email') <div class="error">{{ $message }}</div>
@enderror
 </div>
 <div class="form-group">
 <label>Mot de passe</label>
 <input type="password" name="password" required>
 @error('password') <div class="error">{{ $message }}</div>
@enderror
 </div>
 <div class="form-group">
    <label>
 <input type="checkbox" name="remember"> Se souvenir de moi
 </label>
 </div>
 <button type="submit">Se connecter</button>
 </form>
 @if (Route::has('password.request'))
 <p><a href="{{ route('password.request') }}">Mot de passe oublié ?
</a></p>
 @endif
</body>
</html>