<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Check</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #f5f5f5;
        }
        .card {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .info-row {
            display: flex;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }
        .info-label {
            font-weight: bold;
            width: 200px;
        }
        .info-value {
            flex: 1;
        }
        .role-admin {
            color: #10b981;
            font-weight: bold;
        }
        .role-student {
            color: #3b82f6;
            font-weight: bold;
        }
        h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Current Logged In Account</h1>
        
        <div class="info-row">
            <div class="info-label">User ID:</div>
            <div class="info-value">{{ $user->id }}</div>
        </div>
        
        <div class="info-row">
            <div class="info-label">Name:</div>
            <div class="info-value">{{ $user->name }}</div>
        </div>
        
        <div class="info-row">
            <div class="info-label">Email:</div>
            <div class="info-value">{{ $user->email }}</div>
        </div>
        
        <div class="info-row">
            <div class="info-label">Role:</div>
            <div class="info-value">
                <span class="role-{{ $user->role }}">{{ strtoupper($user->role) }}</span>
            </div>
        </div>
        
        <div class="info-row">
            <div class="info-label">isAdmin():</div>
            <div class="info-value">{{ $user->isAdmin() ? 'TRUE' : 'FALSE' }}</div>
        </div>
        
        <div class="info-row">
            <div class="info-label">isStudent():</div>
            <div class="info-value">{{ $user->isStudent() ? 'TRUE' : 'FALSE' }}</div>
        </div>
        
        @if(!$user->isAdmin())
            <div style="margin-top: 30px; padding: 15px; background: #fef2f2; border-left: 4px solid #ef4444; border-radius: 4px;">
                <strong>⚠️ You are NOT logged in as an admin!</strong>
                <p>To access the admin dashboard, you need to:</p>
                <ol>
                    <li>Log out from the current account</li>
                    <li>Log in with the admin account: <strong>ghanashyambudhathoki0@gmail.com</strong></li>
                </ol>
                <a href="{{ route('logout') }}" 
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                   style="display: inline-block; margin-top: 10px; padding: 10px 20px; background: #ef4444; color: white; text-decoration: none; border-radius: 4px;">
                    Log Out Now
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        @else
            <div style="margin-top: 30px; padding: 15px; background: #f0fdf4; border-left: 4px solid #10b981; border-radius: 4px;">
                <strong>✓ You are logged in as an admin!</strong>
                <p>You should be able to access the admin dashboard.</p>
                <a href="{{ route('dashboard') }}" 
                   style="display: inline-block; margin-top: 10px; padding: 10px 20px; background: #10b981; color: white; text-decoration: none; border-radius: 4px;">
                    Go to Admin Dashboard
                </a>
            </div>
        @endif
    </div>
</body>
</html>
