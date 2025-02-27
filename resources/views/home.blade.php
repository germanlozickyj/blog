<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Germán Lozickyj - Software Developer and DevOps</title>
    <meta name="description" content="Germán Lozickyj is a Software Developer and DevOps professional based in Buenos Aires, Argentina specializing in the TALL stack and cloud computing technologies.">
    <meta name="keywords" content="Germán Lozickyj, Software Developer, DevOps, TALL stack, Buenos Aires, Argentina, programming, development, cloud computing">
    <meta name="author" content="Germán Lozickyj">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:title" content="Germán Lozickyj - Software Developer and DevOps">
    <meta property="og:description" content="Germán Lozickyj is a Software Developer and DevOps professional based in Buenos Aires, Argentina specializing in the TALL stack and cloud computing technologies.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('./assets/avatarzoom.jpeg') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Germán Lozickyj - Software Developer and DevOps">
    <meta name="twitter:description" content="Germán Lozickyj is a Software Developer and DevOps professional based in Buenos Aires, Argentina specializing in the TALL stack and cloud computing technologies.">
    <meta name="twitter:image" content="{{ asset('./assets/avatarzoom.jpeg') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="icon" type="image/png" href="{{ asset('./assets/avatarzoom.jpeg') }}">
    <script src="https://kit.fontawesome.com/b90e9e4354.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-neutral-900">
    <header>
        <div class="flex justify-center pt-6">
            <div style="position:fixed;top:1px;left:1px;width:1px;height:0;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border-width:0;display:none"></div>
            <nav class="pointer-events-auto md:block">
                <ul class="flex rounded-full bg-neutral-800 px-3 text-sm font-medium text-zinc-300 shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur dark:bg-zinc-800/90 dark:text-zinc-200 dark:ring-white/10 border border-neutral-700">
                    <li>
                        <a class="relative block px-3 py-2 transition hover:text-teal-500 dark:hover:text-teal-400" href="#home">Home</a>
                    </li>
                    <li>
                        <a class="relative block px-3 py-2 transition hover:text-teal-500 dark:hover:text-teal-400" href="#articles">Articles</a>
                    </li>
                    <li>
                        <a class="relative block px-3 py-2 transition hover:text-teal-500 dark:hover:text-teal-400" href="#projects">Projects</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="ml-5 mt-16 space-y-8" id="home">
            <img class="rounded-full w-16 h-16 md:w-40 md:h-40" src="{{ asset('./assets/gl.jpeg') }}" />
            <h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl dark:text-zinc-100 pr-5">
                Germán Lozickyj Software Developer and Devops.
            </h1>
            <p class="mt-6 text-base text-zinc-600 dark:text-zinc-400 w-full md:w-2/3 pr-5">
                I'm Germán Lozickyj, a Software Developer and DevOps professional based in Buenos Aires, Argentina. I specialize in crafting solutions using the "TALL" stack and leveraging cloud computing technologies. Passionate about tech things, you can explore my posts below.
            </p>
            <div class="space-x-5">
                <a href="https://www.linkedin.com/in/germanlozickyj" target="_blank">
                    <i class="fab fa-linkedin text-zinc-600 dark:text-zinc-400 text-2xl"></i>
                </a>
                <a href="https://github.com/germanlozickyj" target="_blank">
                    <i class="fab fa-github text-zinc-600 dark:text-zinc-400 text-2xl"></i>
                </a>
                <a href="https://twitter.com/germanlozickyj" target="_blank">
                    <i class="fab fa-twitter text-zinc-600 dark:text-zinc-400 text-2xl"></i>
                </a>
            </div>
        </div>
    </header>
    <div class="sm:px-8 mt-24 md:mt-28">
        <div class="mx-auto w-full max-w-7xl lg:px-8">
            <div class="relative px-4 sm:px-8 lg:px-12">
                <div class="mx-auto max-w-2xl lg:max-w-5xl">
                    <div class="mx-auto grid max-w-xl grid-cols-1 gap-y-20 lg:max-w-none md:grid-cols-2">
                        <div class="flex flex-col gap-16" id="articles">
                        </div>
                        <div class="space-y-10 lg:pl-16 xl:pl-24">
                            <div class="rounded-2xl border border-zinc-100 p-6 dark:border-zinc-700/40" id="projects">
                                <h2 class="flex text-sm font-semibold text-neutral-700 dark:text-zinc-100">
                                    <i class="fas fa-suitcase text-3xl"></i>
                                    <span class="ml-5 text-white font-sans font-bold mt-2">Work</span>
                                </h2>
                                <ol class="mt-6 space-y-4">
                                    <li class="flex gap-4">
                                        <div class="relative mt-1 flex h-10 w-10 flex-none items-center justify-center rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0">
                                            <img src="{{ asset('./assets/snet.jpeg') }}" alt="socialnet s.a" loading="lazy" width="32" height="32" decoding="async" class="h-7 w-7 rounded-full">
                                        </div>
                                        <dl class="flex flex-auto flex-wrap gap-x-2">
                                            <dt class="sr-only">Company</dt>
                                            <dd class="w-full flex-none text-sm font-medium text-zinc-900 dark:text-zinc-100">Socialnet S.A</dd>
                                            <dt class="sr-only">Role</dt>
                                            <dd class="text-xs text-zinc-500 dark:text-zinc-400">Tech Lead</dd>
                                            <dt class="sr-only">Date</dt>
                                            <dd class="ml-auto text-xs text-zinc-400 dark:text-zinc-500" aria-label="2019 until Present">
                                                <time datetime="2021">2024</time> <span aria-hidden="true">—</span> <time datetime="2024">Present</time>
                                            </dd>
                                        </dl>
                                    </li>
                                    <li class="flex gap-4">
                                        <div class="relative mt-1 flex h-10 w-10 flex-none items-center justify-center rounded-full shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0">
                                            <img src="{{ asset('./assets/snet.jpeg') }}" alt="socialnet s.a" loading="lazy" width="32" height="32" decoding="async" class="h-7 w-7 rounded-full">
                                        </div>
                                        <dl class="flex flex-auto flex-wrap gap-x-2">
                                            <dt class="sr-only">Company</dt>
                                            <dd class="w-full flex-none text-sm font-medium text-zinc-900 dark:text-zinc-100">Socialnet S.A</dd>
                                            <dt class="sr-only">Role</dt>
                                            <dd class="text-xs text-zinc-500 dark:text-zinc-400">Backend Developer</dd>
                                            <dt class="sr-only">Date</dt>
                                            <dd class="ml-auto text-xs text-zinc-400 dark:text-zinc-500" aria-label="2019 until Present">
                                                <time datetime="2021">2021</time> <span aria-hidden="true">—</span> <time datetime="2024">2024</time>
                                            </dd>
                                        </dl>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sm:px-8 mt-18">
        <div class="mx-auto w-full max-w-7xl lg:px-8">
            <div class="relative px-4 sm:px-8 lg:px-12">
                <div class="mx-auto max-w-2xl lg:max-w-5xl">
                    <div class="rounded-2xl py-6">
                        <h2 class="flex text-sm font-semibold text-neutral-700 dark:text-zinc-100 items-center">
                            <i class="fas fa-code text-3xl"></i>
                            <span class="ml-5 text-xl text-teal-500 font-sans font-bold">GitHub Repositories</span>
                        </h2>
                        <ol class="mt-6 space-y-8">
                            @foreach ($repositories as $repository)
                                <li class="border border-zinc-200 dark:border-zinc-700/40 rounded-xl p-4 hover:shadow-lg transition-shadow">
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-lg font-bold text-zinc-900 dark:text-zinc-100">
                                            <a href="{{ $repository->url }}" target="_blank" class="hover:text-teal-500">{{ $repository->name }}</a>
                                        </h3>
                                        <span class="bg-zinc-100 text-zinc-800 dark:bg-zinc-800 dark:text-teal-500 rounded-full px-3 py-1 text-xs">{{ $repository->language ?? 'N/A' }}</span>
                                    </div>
                                    <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-400">{{ $repository->description ?? 'No description available.' }}</p>
                                    <div class="mt-4 flex items-center space-x-4 text-xs text-zinc-500 dark:text-zinc-400">
                                        <div class="flex items-center">
                                            <i class="fas fa-star mr-1 text-yellow-500"></i>
                                            <span>{{ $repository->stars }}</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-code-branch mr-1"></i>
                                            <span>{{ $repository->forks }}</span>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="mt-32 flex-none">
        <div class="sm:px-8">
            <div class="mx-auto w-full max-w-7xl lg:px-8">
                <div class="border-t border-zinc-100 pb-16 pt-10 dark:border-zinc-700/40">
                    <div class="relative px-4 sm:px-8 lg:px-12">
                        <div class="mx-auto max-w-2xl lg:max-w-5xl">
                            <div class="flex flex-col items-center justify-between gap-6 sm:flex-row">
                                <div class="flex flex-wrap justify-center gap-x-6 gap-y-1 text-sm font-medium text-zinc-800 dark:text-zinc-200">
                                    <a href="https://www.linkedin.com/in/germanlozickyj" target="_blank">
                                        <i class="fab fa-linkedin text-zinc-600 dark:text-zinc-400 text-2xl"></i>
                                    </a>
                                    <a href="https://github.com/germanlozickyj" target="_blank">
                                        <i class="fab fa-github text-zinc-600 dark:text-zinc-400 text-2xl"></i>
                                    </a>
                                    <a href="https://twitter.com/germanlozickyj" target="_blank">
                                        <i class="fab fa-twitter text-zinc-600 dark:text-zinc-400 text-2xl"></i>
                                    </a>
                                </div>
                                <p class="text-sm text-zinc-400 dark:text-zinc-500">© 2024 Germán Lozickyj. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
