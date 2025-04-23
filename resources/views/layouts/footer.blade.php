<footer class="bg-dark text-white-50 py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h5>{{ config('app.name') }}</h5>
                <p class="small">{{ env('APP_DESCRIPTION', 'A web project built with Laravel.') }}</p>
            </div>
            <div class="col-md-3">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="/" class="link-light">Home</a></li>
                    <li><a href="/#about" class="link-light">Tentang Kami</a></li>
                    <li><a href="/#contact" class="link-light">Hubungi Kami</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Follow Us</h5>
                <ul class="list-unstyled">
                    <li><a href="https://facebook.com" target="_blank" class="link-light"><i class="bi bi-facebook"></i> Facebook</a></li>
                    <li><a href="https://twitter.com" target="_blank" class="link-light"><i class="bi bi-twitter"></i> Twitter</a></li>
                    <li><a href="https://instagram.com" target="_blank" class="link-light"><i class="bi bi-instagram"></i> Instagram</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Alamat</h5>
                <p class="small">Blang Pulo, Kota Lhokseumawe, Aceh, Indonesia</p>
            </div>
        </div>
        <hr class="my-2">
        <p class="small text-center">&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
    </div>
</footer>
