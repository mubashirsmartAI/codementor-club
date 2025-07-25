@extends('layouts.app')

@section('content')
<!-- Animations CSS -->
<style>
.fade-in {
  opacity: 0;
  animation: fadeIn 1.2s ease-out forwards;
}
.fade-in.delay-1 { animation-delay: .2s; }
.fade-in.delay-2 { animation-delay: .4s; }
.fade-in.delay-3 { animation-delay: .6s; }
.fade-in.delay-4 { animation-delay: .8s; }
.fade-in.delay-5 { animation-delay: 1s; }
.fade-in.delay-6 { animation-delay: 1.2s; }
.fade-in.delay-7 { animation-delay: 1.4s; }
.fade-in.delay-8 { animation-delay: 1.6s; }
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(40px); }
  to { opacity: 1; transform: none; }
}
.card-animate {
  opacity: 0;
  animation: fadeInUpCard 1s cubic-bezier(.23,1.01,.32,1) forwards;
}
.card-animate.delay-1 { animation-delay: .2s; }
.card-animate.delay-2 { animation-delay: .4s; }
.card-animate.delay-3 { animation-delay: .6s; }
.card-animate.delay-4 { animation-delay: .8s; }
.card-animate.delay-5 { animation-delay: 1s; }
.card-animate.delay-6 { animation-delay: 1.2s; }
.card-animate.delay-7 { animation-delay: 1.4s; }
.card-animate.delay-8 { animation-delay: 1.6s; }
@keyframes fadeInUpCard {
  from { opacity: 0; transform: translateY(60px) scale(.98); }
  to { opacity: 1; transform: none; }
}
</style>

<!-- Hero Section with Bootstrap only -->
<div class="py-5 fade-in" style="background: linear-gradient(90deg, #0a2540 0%, #00c6d7 100%); color: white;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0 fade-in delay-1">
                <img src="https://dummyimage.com/120x60/fff/000&text=Logo" alt="Logo" class="mb-3" style="height: 60px; background: white; border-radius: 12px; padding: 6px; box-shadow: 0 2px 12px rgba(0,0,0,0.08);">
                <h1 class="display-3 fw-bold mb-3" style="letter-spacing:-1px;">Build MVPs Faster<br>with <span style="color:#00c6d7;">Codementor Club</span></h1>
                <p class="lead mb-4">Your one-stop solution for rapid MVP development, expert engineers, and AI-powered automation. Join the club and launch your product in days, not months.</p>
                <div class="d-flex flex-wrap gap-2 mb-4">
                    <a href="{{ route('search') }}" class="btn btn-primary btn-lg">Hire Now</a>
                    <a href="{{ route('membership') }}" class="btn btn-outline-light btn-lg">Join Club</a>
                    <a href="{{ route('book-call') }}" class="btn btn-link btn-lg text-white">Book A Call</a>
                </div>
                <div class="d-flex flex-wrap gap-2 align-items-center mt-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a7/React-icon.svg" alt="React" style="height:32px; background:white; border-radius:6px; padding:2px;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png" alt="JS" style="height:32px; background:white; border-radius:6px; padding:2px;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/1/17/Google-flutter-logo.png" alt="Flutter" style="height:32px; background:white; border-radius:6px; padding:2px;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/75/Django_logo.svg" alt="Django" style="height:32px; background:white; border-radius:6px; padding:2px;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" alt="Laravel" style="height:32px; background:white; border-radius:6px; padding:2px;">
                </div>
            </div>
            <div class="col-lg-6 text-center fade-in delay-2">
                <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=600&q=80" alt="MVP Development" class="img-fluid rounded-4 shadow-lg border border-3 border-white" style="max-width:90%;">
            </div>
        </div>
    </div>
</div>

<!-- Trusted Clients -->
<div class="py-4 fade-in delay-3" style="background: #f8fafc;">
    <div class="container text-center">
        <span class="badge bg-primary bg-gradient px-3 py-2 fs-6 mb-2">Trusted by Startups Worldwide</span>
        <div class="d-flex justify-content-center gap-4 mt-2 flex-wrap">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" alt="Microsoft" style="height:32px;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg" alt="IBM" style="height:32px;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" style="height:32px;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg" alt="Netflix" style="height:32px;">
        </div>
    </div>
</div>

<!-- Search Section -->
<div class="py-5 fade-in delay-4" style="background: #f1f5f9;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-4 border-0 card-animate delay-1" style="border-radius: 1.5rem;">
                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <h2 class="h5 mb-3 mb-md-0">Search based on tech stack</h2>
                        <div class="input-group w-100 w-md-auto">
                            <select class="form-select">
                                <option>React</option>
                                <option>Next.js</option>
                                <option>Flutter</option>
                                <option>Django</option>
                                <option>Laravel</option>
                            </select>
                            <button class="btn btn-primary">Search</button>
                        </div>
                        <span class="badge bg-success ms-md-3">MEMBER</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Why Codementor Club & Hire Human Engineers -->
<div class="py-5 fade-in delay-5" style="background: #fff;">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100 shadow-lg border-0 card-animate delay-2" style="border-radius:1.5rem;">
                    <div class="card-body">
                        <h3 class="card-title h4 mb-3">Why Codementor Club?</h3>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Dedicated MVP teams for startups</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Up to 30% discount for members</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Fast delivery & priority support</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 shadow-lg border-0 text-center p-4 card-animate delay-3" style="border-radius:1.5rem;">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Engineer" class="rounded-circle mb-3 mx-auto" style="width:64px;height:64px;">
                    <h3 class="card-title h4 mb-2">Hire Human Engineers</h3>
                    <p class="text-muted mb-2">Curated Developers: Frontend, Backend, Fullstack, DevOps</p>
                    <a href="{{ route('engineers') }}" class="btn btn-outline-primary">View Engineers</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hire AI Agents & Dedicated Team -->
<div class="py-5 fade-in delay-6" style="background: #f8fafc;">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100 shadow-lg border-0 card-animate delay-4" style="border-radius:1.5rem;">
                    <div class="card-body">
                        <h3 class="card-title h4 mb-3">Hire AI Agents</h3>
                        <ul class="list-unstyled mb-3">
                            <li><i class="bi bi-robot text-primary me-2"></i> Automated backend & API setup</li>
                            <li><i class="bi bi-ui-checks-grid text-primary me-2"></i> UI scaffolding & workflow automation</li>
                            <li><i class="bi bi-lightning-charge-fill text-primary me-2"></i> Cost-efficient, fast turnaround</li>
                        </ul>
                        <a href="{{ route('ai-agents') }}" class="btn btn-primary">Explore AI Agents</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 shadow-lg border-0 card-animate delay-5" style="border-radius:1.5rem;">
                    <div class="card-body">
                        <h3 class="card-title h4 mb-3">Hire a Dedicated Team</h3>
                        <ul class="list-unstyled mb-3">
                            <li><i class="bi bi-people-fill text-primary me-2"></i> End-to-end MVP development</li>
                            <li><i class="bi bi-person-badge-fill text-primary me-2"></i> Project managers & certified engineers</li>
                            <li><i class="bi bi-arrow-repeat text-primary me-2"></i> Flexible engagement models</li>
                        </ul>
                        <a href="{{ route('book-call') }}" class="btn btn-primary">Book a Team Call</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Solutions & Membership Comparison -->
<div class="py-5 fade-in delay-7" style="background: #fff;">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100 shadow-lg border-0 card-animate delay-6" style="border-radius:1.5rem;">
                    <div class="card-body">
                        <h3 class="card-title h4 mb-3">Solutions</h3>
                        <ul class="list-unstyled mb-0">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i> MVP for SaaS & Mobile Apps</li>
                            <li><i class="bi bi-cpu-fill text-primary me-2"></i> AI App MVPs</li>
                            <li><i class="bi bi-tools text-primary me-2"></i> Internal Tools & On-demand Teams</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 shadow-lg border-0 card-animate delay-7" style="border-radius:1.5rem;">
                    <div class="card-body">
                        <h3 class="card-title h4 mb-3">Membership Comparison</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Free</th>
                                    <th>Member</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Discounts</td>
                                    <td>-</td>
                                    <td class="text-success fw-bold">Up to 30%</td>
                                </tr>
                                <tr>
                                    <td>VIP Project Manager</td>
                                    <td>-</td>
                                    <td class="text-success fw-bold"><i class="bi bi-check-lg"></i></td>
                                </tr>
                                <tr>
                                    <td>Free Training Seats</td>
                                    <td>-</td>
                                    <td class="text-success fw-bold"><i class="bi bi-check-lg"></i></td>
                                </tr>
                                <tr>
                                    <td>Priority Support</td>
                                    <td>-</td>
                                    <td class="text-success fw-bold"><i class="bi bi-check-lg"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Book a Call CTA -->
<div class="py-5 fade-in delay-8" style="background: linear-gradient(90deg, #00c6d7 0%, #0a2540 100%); color: white;">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 p-4 d-flex flex-row align-items-center justify-content-between card-animate delay-8" style="background:rgba(255,255,255,0.95); color:#222; border-radius:1.5rem;">
                    <div>
                        <h3 class="h4 mb-2">Book A Call</h3>
                        <p class="mb-3">Discuss your MVP idea, get a free consultation, and see how fast you can launch.</p>
                        <a href="{{ route('book-call') }}" class="btn btn-primary">Book Now</a>
                    </div>
                    <img src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?auto=format&fit=crop&w=300&q=80" alt="Book a Call" class="rounded-3 shadow ms-4 d-none d-md-block" style="width:120px;">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pricing Plans -->
<div class="py-5 fade-in delay-8" style="background: #f8fafc;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card shadow-lg border-0 p-4 card-animate delay-8" style="border-radius:1.5rem;">
                    <h3 class="h4 mb-4">Pricing Plans</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Service</th>
                                <th>Member Rate</th>
                                <th>Non-member Rate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>AI Agent</td>
                                <td>$10/hr</td>
                                <td>$20/hr</td>
                            </tr>
                            <tr>
                                <td>Human Engineer</td>
                                <td>$25/hr</td>
                                <td>$40/hr</td>
                            </tr>
                            <tr>
                                <td>Dedicated Team</td>
                                <td>From $1500/mo</td>
                                <td>From $2500/mo</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-muted small mt-2">
                        <strong>FAQ:</strong> Membership gives you exclusive discounts, priority support, and free training seats. Cancel anytime.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scroll-triggered animation script -->
<script>
function isInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top < window.innerHeight - 60 && rect.bottom > 60
    );
}
function animateOnScroll() {
    document.querySelectorAll('.fade-in').forEach(function(el) {
        if (isInViewport(el)) {
            el.style.animationPlayState = 'running';
        } else {
            el.style.animation = 'none';
            void el.offsetWidth; // trigger reflow
            el.style.animation = '';
        }
    });
    document.querySelectorAll('.card-animate').forEach(function(el) {
        if (isInViewport(el)) {
            el.style.animationPlayState = 'running';
        } else {
            el.style.animation = 'none';
            void el.offsetWidth;
            el.style.animation = '';
        }
    });
}
window.addEventListener('scroll', animateOnScroll);
window.addEventListener('resize', animateOnScroll);
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(animateOnScroll, 100);
});
</script>
@endsection 