 //resources/views/layout/auth.blade.php
<!DOCTYPE html> 
<html lang="ja"> 
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title') - {{ config('app.name') }}</title>
	<style> 
		* { box-sizing: border-box; margin: 0; padding: 0; } 
		body { background-color: #f5f5f5; font-family: sans-serif; display: flex; justify-content: center; align-items: center; min-height: 100vh; } 
		.auth-box { background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width: 100%; max-width: 400px; }
		.auth-title { text-align: center; margin-bottom: 1.5rem; color: #333; } 
		.alert-error { background-color: #fee2e2; color: #991b1b; padding: 1rem; border-radius: 4px; margin-bottom: 1rem; border: 1px solid #fca5a5; } 
		.form-group { margin-bottom: 1.25rem; } 
		.form-group label { display: block; margin-bottom: 0.5rem; font-weight: bold; color: #4b5563; } 
		.form-control { width: 100%; padding: 0.75rem; border: 1px solid #d1d5db; border-radius: 4px; font-size: 1rem; } 
		.form-control:focus { outline: none; border-color: #2563eb; box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.2); }
		.form-control.is-invalid { border-color: #dc2626; background-color: #fef2f2; } 
		.error-message { color: #dc2626; font-size: 0.875rem; margin-top: 0.25rem; } 
		.input-hint { display: block; color: #6b7280; font-size: 0.8rem; margin-top: 0.25rem; } 
		.btn-submit { width: 100%; background-color: #2563eb; color: white; padding: 0.75rem; border: none; border-radius: 4px; font-size: 1rem; font-weight: bold; cursor: pointer; transition: background-color 0.2s; } .btn-submit:hover { background-color: #1d4ed8; } 
		.auth-footer { text-align: center; margin-top: 1.5rem; font-size: 0.9rem; } 
		.auth-footer a { color: #2563eb; text-decoration: none; } .auth-footer a:hover { text-decoration: underline; } 
		.required { color: #dc2626; margin-left: 2px; }
	</style>
</head>
<body> 
	<div class="auth-box">

		<h1 class="auth-title">@yield('title')</h1>

		@if(session('error'))
		<div class="alert-error">
			{{ session('error') }}
		</div>
		@endif

		@yield('content')
	</div>
</body> 
</html> 
