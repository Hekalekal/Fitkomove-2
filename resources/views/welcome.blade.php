@extends('layouts.app')

@section('title', 'Fitkomove - Limit is Just an Illusion')

@section('content')

    <section class="hero-section d-flex align-items-center text-center text-lg-start" style="min-height: 100vh;">
        <div class="container position-relative z-2">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-1 fw-bold mb-3" style="font-family: 'Teko', sans-serif; line-height: 0.9;">
                        LEVEL UP YOUR <br>
                        <span style="color: var(--primary-red);">FITNESS GAME</span>
                    </h1>
                    <p class="lead mb-5 w-75 d-none d-lg-block" style="color: #ccc;">
                        Platform monitoring performa olahraga berbasis data presisi. 
                        Analisis detak jantung, kalori, dan progres latihanmu dalam satu dashboard futuristik.
                    </p>
                    <div class="d-flex gap-3 justify-content-center justify-content-lg-start">
                        <a href="{{ route('register') }}" class="btn btn-red btn-lg px-5 py-3">MULAI SEKARANG</a>
                        <a href="#about" class="btn btn-outline-light btn-lg px-5 py-3 rounded-0" style="border: 2px solid white;">PELAJARI</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4 text-white animate-bounce">
            <i class="bi bi-mouse fs-3"></i>
            <span class="d-block small">Scroll</span>
        </div>
    </section>

    <section class="py-5 border-bottom border-secondary" style="background-color: var(--card-bg);">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-md-4 stat-box">
                    <div class="stat-number">10K+</div>
                    <div class="text-uppercase fw-bold text-secondary">Pengguna Aktif</div>
                </div>
                <div class="col-md-4 stat-box">
                    <div class="stat-number">500+</div>
                    <div class="text-uppercase fw-bold text-secondary">Program Latihan</div>
                </div>
                <div class="col-md-4 stat-box">
                    <div class="stat-number">1M+</div>
                    <div class="text-uppercase fw-bold text-secondary">Kalori Terbakar</div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-5 overflow-hidden">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="position-relative">
                        <div class="position-absolute top-0 start-0 w-100 h-100 border border-danger border-2" style="transform: translate(15px, 15px); z-index: -1;"></div>
                        <img src="https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             class="img-fluid w-100 grayscale-img" alt="Trainer" style="filter: grayscale(100%); transition: 0.3s;">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title">KENAPA <span style="color: var(--primary-red);">FITKOMOVE?</span></h2>
                    <p class="text-secondary mb-4">
                        Kami bukan sekadar aplikasi pencatat lari. Kami adalah ekosistem yang dirancang untuk atlet yang serius ingin berkembang. Dengan teknologi AI terbaru, kami memberikan insight yang tidak bisa diberikan aplikasi lain.
                    </p>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-danger me-3 fs-5"></i>
                            <span class="fw-bold">Real-time Heart Rate Monitoring</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-danger me-3 fs-5"></i>
                            <span class="fw-bold">Personalized AI Coach</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="bi bi-check-circle-fill text-danger me-3 fs-5"></i>
                            <span class="fw-bold">Komunitas Global Kompetitif</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="py-5" style="background-color: var(--card-bg);">
        <div class="container py-5">
            <div class="text-center">
                <h2 class="section-title">FITUR <span style="color: var(--primary-red);">UNGGULAN</span></h2>
                <p class="section-subtitle">Teknologi canggih dalam genggaman Anda.</p>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-md-4">
                    <div class="custom-card p-4 h-100 text-center">
                        <div class="display-4 text-danger mb-3"><i class="bi bi-fire"></i></div>
                        <h4 class="fw-bold">Calorie Burn</h4>
                        <p class="text-secondary small">Algoritma presisi tinggi menghitung setiap kalori yang Anda bakar.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="custom-card p-4 h-100 text-center">
                        <div class="display-4 text-danger mb-3"><i class="bi bi-graph-up-arrow"></i></div>
                        <h4 class="fw-bold">Analytics</h4>
                        <p class="text-secondary small">Grafik performa mingguan untuk memantau kemajuan fisik Anda.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="custom-card p-4 h-100 text-center">
                        <div class="display-4 text-danger mb-3"><i class="bi bi-trophy-fill"></i></div>
                        <h4 class="fw-bold">Leaderboard</h4>
                        <p class="text-secondary small">Bersaing dengan teman dan jadilah juara di papan peringkat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container py-5">
            <div class="text-center">
                <h2 class="section-title">KATA <span style="color: var(--primary-red);">MEREKA</span></h2>
                <p class="section-subtitle">Bergabung dengan ribuan atlet yang puas.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p class="fst-italic text-secondary">"Aplikasi gila! Trackingnya akurat banget, dan fitur dark modenya bikin mata nyaman pas lari malem."</p>
                        <div class="d-flex align-items-center mt-4">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="testimonial-avatar me-3">
                            <div>
                                <h6 class="fw-bold mb-0">Raka Pratama</h6>
                                <small class="text-danger">Marathon Runner</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p class="fst-italic text-secondary">"Suka banget sama fitur leaderboardnya. Jadi makin semangat ngegym biar rank naik terus tiap minggu."</p>
                        <div class="d-flex align-items-center mt-4">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" class="testimonial-avatar me-3">
                            <div>
                                <h6 class="fw-bold mb-0">Siti Aminah</h6>
                                <small class="text-danger">Gym Enthusiast</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p class="fst-italic text-secondary">"Simpel, cepat, dan gak ribet. UI-nya sporty banget, beda sama aplikasi kesehatan lain yang kaku."</p>
                        <div class="d-flex align-items-center mt-4">
                            <img src="https://randomuser.me/api/portraits/men/85.jpg" class="testimonial-avatar me-3">
                            <div>
                                <h6 class="fw-bold mb-0">Budi Santoso</h6>
                                <small class="text-danger">Cyclist</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5  text-center text-white position-relative overflow-hidden">
        <div class="container position-relative z-2">
            <h2 class="display-5 fw-bold mb-3" style="font-family: 'Teko', sans-serif;">SIAP MENGUBAH HIDUPMU?</h2>
            <p class="lead mb-4">Jangan tunggu besok. Tubuh atletis dimulai dari keputusan hari ini.</p>
            <a href="{{ route('register') }}" class="btn btn-dark btn-lg px-5 py-3 rounded-0 fw-bold border border-white">GABUNG SEKARANG</a>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    

    <footer class="footer-section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <a class="navbar-brand fs-2 fw-bold fst-italic footer-brand" href="#">
                        FIT<span>KOMOVE</span>
                    </a>
                    <p class="text-secondary mt-3 pe-lg-5">
                        Platform monitoring olahraga #1 di Indonesia. Kami membantu Anda mencapai potensi maksimal melalui data dan teknologi.
                    </p>
                    <div class="mt-4">
                        <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-youtube"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6">
                    <h5 class="footer-heading">Menu</h5>
                    <a href="#" class="footer-link">Beranda</a>
                    <a href="#about" class="footer-link">Tentang Kami</a>
                    <a href="#features" class="footer-link">Fitur</a>
                    <a href="#" class="footer-link">Harga</a>
                </div>

                <div class="col-lg-2 col-6">
                    <h5 class="footer-heading">Bantuan</h5>
                    <a href="#" class="footer-link">FAQ</a>
                    <a href="#" class="footer-link">Privacy Policy</a>
                    <a href="#" class="footer-link">Terms of Service</a>
                    <a href="#" class="footer-link">Kontak Support</a>
                </div>

                <div class="col-lg-4">
                    <h5 class="footer-heading">Newsletter</h5>
                    <p class="text-secondary small">Dapatkan tips latihan mingguan langsung ke inbox Anda.</p>
                    <form action="#" class="mt-3">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Email Anda..." style="border-right: none;">
                            <button class="btn btn-red" type="button">SUBSCRIBE</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="border-top border-secondary mt-5 pt-4 text-center">
                <small class="text-secondary">&copy; {{ date('Y') }} Fitkomove Inc. All rights reserved. Designed with 🔥 passion.</small>
            </div>
        </div>
    </footer>

@endsection