@extends('errors::layout')

@section('title', __('Under Maintenance'))

@section('message')
    <style>
        body {
            background: radial-gradient(circle at center, #1e3a8a, #172554);
            /* Gradasi Biru Gelap */
            color: #fff;
            font-family: 'figtree', sans-serif;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            text-align: center;
            padding: 20px;
        }

        /* Animasi Floating Icon */
        .icon-wrapper {
            margin-bottom: 30px;
            animation: float 3s ease-in-out infinite;
        }

        .icon-wrapper svg {
            width: 120px;
            height: 120px;
            fill: #60a5fa;
            /* Biru Muda */
            filter: drop-shadow(0 0 15px rgba(96, 165, 250, 0.5));
        }

        h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            letter-spacing: -1px;
        }

        p {
            font-size: 1.1rem;
            color: #94a3b8;
            max-width: 500px;
            margin: 0 auto 30px;
        }

        /* Efek Berdenyut pada tombol/badge */
        .status-badge {
            display: inline-block;
            padding: 8px 20px;
            background: rgba(96, 165, 250, 0.1);
            border: 1px solid #60a5fa;
            border-radius: 50px;
            color: #60a5fa;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }
    </style>

    <div class="container">
        <div class="icon-wrapper">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M12,15.5A3.5,3.5 0 0,1 8.5,12A3.5,3.5 0 0,1 12,8.5A3.5,3.5 0 0,1 15.5,12A3.5,3.5 0 0,1 12,15.5M19.43,12.97C19.47,12.65 19.5,12.33 19.5,12C19.5,11.67 19.47,11.35 19.43,11.03L21.54,9.37C21.73,9.22 21.78,8.95 21.66,8.73L19.66,5.27C19.54,5.05 19.27,4.97 19.05,5.05L16.56,6.05C16.04,5.65 15.44,5.32 14.87,5.07L14.5,2.42C14.46,2.18 14.25,2 14,2H10C9.75,2 9.54,2.18 9.5,2.42L9.13,5.07C8.56,5.32 7.96,5.65 7.44,6.05L4.95,5.05C4.73,4.97 4.46,5.05 4.34,5.27L2.34,8.73C2.22,8.95 2.27,9.22 2.46,9.37L4.57,11.03C4.53,11.35 4.5,11.67 4.5,12C4.5,12.33 4.53,12.65 4.57,12.97L2.46,14.63C2.27,14.78 2.22,15.05 2.34,15.27L4.34,18.73C4.46,18.95 4.73,19.03 4.95,18.95L7.44,17.95C7.96,18.35 8.56,18.68 9.13,18.93L9.5,21.58C9.54,21.82 9.75,22 10,22H14C14.25,22 14.46,21.82 14.5,21.58L14.87,18.93C15.44,18.68 16.04,18.35 16.56,17.95L19.05,18.95C19.27,19.03 19.54,18.95 19.66,18.73L21.66,15.27C21.78,15.05 21.73,14.78 21.54,14.63L19.43,12.97Z" />
            </svg>
        </div>

        <div class="status-badge">System Maintenance</div>
        <h1>Kami Akan Segera Kembali</h1>
        <p>Mohon maaf atas ketidaknyamanannya, kami sedang melakukan pemeliharaan sistem untuk meningkatkan layanan kami.
        </p>
    </div>
@endsection
