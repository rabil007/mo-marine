<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Admin Login | M&amp;O Marine Service</title>
    <meta name="robots" content="noindex, nofollow"/>
    <base href="<?= base_url('/') ?>"/>
    <link rel="icon" type="image/png" href="<?= base_url('assets/images/logo.png') ?>"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/tailwind.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body class="bg-navy-950 min-h-screen flex items-center justify-center px-4">

    <div class="w-full max-w-md">

        <div class="text-center mb-8">
            <a href="/" class="inline-flex flex-col items-center gap-2 group">
                <img src="<?= base_url('assets/images/logo.png') ?>"
                     alt="M&O Marine Logo" width="252" height="314"
                     class="h-20 w-auto object-contain group-hover:scale-105 transition-transform duration-300"/>
                <div>
                    <div class="font-display font-black text-2xl text-transparent bg-clip-text bg-gradient-to-r from-white to-blue-300 tracking-wider">M&amp;O</div>
                    <div class="text-blue-300/70 text-xs font-bold tracking-widest uppercase">Marine Services</div>
                </div>
            </a>
            <p class="text-navy-300 text-sm mt-4">Admin Portal</p>
        </div>

        <div class="bg-navy-900 rounded-2xl border border-white/10 shadow-2xl p-8">

            <h1 class="font-display text-xl font-bold text-white mb-6 text-center">Sign in to your account</h1>

            <?php if (! empty($error)): ?>
            <div class="flex items-center gap-3 bg-red-500/10 border border-red-500/30 rounded-lg px-4 py-3 mb-6">
                <svg class="w-5 h-5 text-red-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <p class="text-red-300 text-sm"><?= esc($error) ?></p>
            </div>
            <?php endif; ?>

            <?php if (! empty($success)): ?>
            <div class="flex items-center gap-3 bg-green-500/10 border border-green-500/30 rounded-lg px-4 py-3 mb-6">
                <svg class="w-5 h-5 text-green-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <p class="text-green-300 text-sm"><?= esc($success) ?></p>
            </div>
            <?php endif; ?>

            <form action="<?= site_url('login') ?>" method="POST" novalidate>
                <?= csrf_field() ?>

                <div class="space-y-5">
                    <div>
                        <label for="email" class="block text-sm font-medium text-navy-200 mb-1.5">Email address</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="<?= esc(old('email')) ?>"
                            required
                            autocomplete="email"
                            placeholder="admin@mo-marine.com"
                            class="w-full bg-navy-800 border border-white/10 rounded-lg px-4 py-3 text-white placeholder-navy-400 text-sm focus:outline-none focus:ring-2 focus:ring-maritime-500 focus:border-transparent transition-all"
                        />
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-navy-200 mb-1.5">Password</label>
                        <div class="relative">
                            <input
                                type="password"
                                id="password"
                                name="password"
                                required
                                autocomplete="current-password"
                                placeholder="••••••••"
                                class="w-full bg-navy-800 border border-white/10 rounded-lg px-4 py-3 text-white placeholder-navy-400 text-sm focus:outline-none focus:ring-2 focus:ring-maritime-500 focus:border-transparent transition-all pr-11"
                            />
                            <button type="button" onclick="togglePassword()"
                                    class="absolute right-3 top-1/2 -translate-y-1/2 text-navy-400 hover:text-white transition-colors">
                                <svg id="eye-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <button type="submit"
                        class="mt-7 w-full bg-maritime-500 hover:bg-maritime-600 text-white font-semibold py-3.5 rounded-lg transition-all duration-200 hover:scale-[1.01] focus:outline-none focus:ring-2 focus:ring-maritime-500 focus:ring-offset-2 focus:ring-offset-navy-900 text-sm tracking-wide">
                    Sign In
                </button>
            </form>
        </div>

        <p class="text-center text-navy-500 text-xs mt-6">
            &copy; <?= date('Y') ?> M&amp;O Marine Services &amp; Ship Supplies Ltd
        </p>
    </div>

    <script>
    function togglePassword() {
        const input = document.getElementById('password');
        const icon  = document.getElementById('eye-icon');
        if (input.type === 'password') {
            input.type = 'text';
            icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 4.411m0 0L21 21"/>';
        } else {
            input.type = 'password';
            icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>';
        }
    }
    </script>
</body>
</html>
