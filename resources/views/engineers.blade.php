@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="py-5" style="background: linear-gradient(90deg, #0a2540 0%, #00c6d7 100%); color: white;">
    <div class="container">
        <h1 class="display-5 fw-bold mb-2">Hire Human Engineers</h1>
        <p class="lead mb-0">Curated developers and teams for your MVP. Choose your category, experience, and book a call with top talent.</p>
    </div>
</div>

<div class="container" style="margin-top: -60px;">
    <!-- Booking Flow -->
    <div class="card shadow-lg p-4 mb-5 border-0" style="border-radius: 1.5rem;">
        <form class="row g-3 align-items-end">
            <div class="col-md-3">
                <label class="form-label fw-semibold">Category</label>
                <select class="form-select">
                    <option>Frontend</option>
                    <option>Backend</option>
                    <option>Fullstack</option>
                    <option>DevOps</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label fw-semibold">Experience</label>
                <select class="form-select">
                    <option>Junior (1-2 yrs)</option>
                    <option>Mid (3-5 yrs)</option>
                    <option>Senior (6+ yrs)</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label fw-semibold">Availability</label>
                <select class="form-select">
                    <option>Immediate</option>
                    <option>1-2 weeks</option>
                </select>
            </div>
            <div class="col-md-3 d-grid">
                <button type="submit" class="btn btn-primary btn-lg">View Profiles</button>
            </div>
        </form>
    </div>

    <!-- Engineer Cards -->
    <div class="row g-4">
        <!-- Engineer Card 1 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-lg border-0 card-hover-effect" style="transition:box-shadow .2s; border-radius:1.5rem;">
                <div class="card-body text-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Engineer" class="rounded-circle mb-3" style="width:72px; height:72px;">
                    <h5 class="card-title mb-1">Ali Raza</h5>
                    <span class="badge bg-primary mb-2">Frontend Engineer</span>
                    <p class="text-muted small mb-2">React, Next.js, Vue.js</p>
                    <div class="mb-2">
                        <span class="text-warning">★ 4.9</span>
                        <span class="text-muted small">(120 reviews)</span>
                    </div>
                    <div class="mb-2"><span class="fw-bold text-primary">$30/hr</span></div>
                    <div class="mb-2 text-muted small">Past Projects: SaaS Dashboard, E-commerce UI</div>
                    <a href="#" class="btn btn-primary w-100">Book Now</a>
                </div>
            </div>
        </div>
        <!-- Engineer Card 2 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-lg border-0 card-hover-effect" style="transition:box-shadow .2s; border-radius:1.5rem;">
                <div class="card-body text-center">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Engineer" class="rounded-circle mb-3" style="width:72px; height:72px;">
                    <h5 class="card-title mb-1">Sara Khan</h5>
                    <span class="badge bg-success mb-2">Backend Engineer</span>
                    <p class="text-muted small mb-2">Node.js, Django, Laravel</p>
                    <div class="mb-2">
                        <span class="text-warning">★ 5.0</span>
                        <span class="text-muted small">(98 reviews)</span>
                    </div>
                    <div class="mb-2"><span class="fw-bold text-primary">$35/hr</span></div>
                    <div class="mb-2 text-muted small">Past Projects: API Platform, Fintech MVP</div>
                    <a href="#" class="btn btn-primary w-100">Book Now</a>
                </div>
            </div>
        </div>
        <!-- Engineer Card 3 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-lg border-0 card-hover-effect" style="transition:box-shadow .2s; border-radius:1.5rem;">
                <div class="card-body text-center">
                    <img src="https://randomuser.me/api/portraits/men/65.jpg" alt="Engineer" class="rounded-circle mb-3" style="width:72px; height:72px;">
                    <h5 class="card-title mb-1">John Lee</h5>
                    <span class="badge bg-secondary mb-2">Fullstack Engineer</span>
                    <p class="text-muted small mb-2">React, Node.js, AWS, Docker</p>
                    <div class="mb-2">
                        <span class="text-warning">★ 4.8</span>
                        <span class="text-muted small">(150 reviews)</span>
                    </div>
                    <div class="mb-2"><span class="fw-bold text-primary">$40/hr</span></div>
                    <div class="mb-2 text-muted small">Past Projects: AI SaaS, Marketplace</div>
                    <a href="#" class="btn btn-primary w-100">Book Now</a>
                </div>
            </div>
        </div>
        <!-- Add more cards as needed -->
    </div>
</div>

<!-- Custom CSS for Card Hover -->
<style>
.card-hover-effect:hover { box-shadow: 0 8px 32px rgba(10,37,64,0.18) !important; transform: translateY(-4px) scale(1.02); }
</style>
@endsection 