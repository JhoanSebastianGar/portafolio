<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <nav>
        <img src="https://lh3.googleusercontent.com/ogw/ADea4I6o_D1wmxfjyWSBKdwdjPkJjntsHvjrJ_7YJe6fig=s32-c-mo" />
        <div class="navbar-left">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Sobre Nosotros</a></li>
                <li><a href="#">Proyectos</a></li>
                <li><a href="#">Contactenos</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="col-sm-12">
        <img src="data:image/png;base64,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"/>
        <span>Welcome</span>
        <button>Portafolio</button>
        <footer>
            
        </footer>
        </div>
    </div>
</body>

</html>