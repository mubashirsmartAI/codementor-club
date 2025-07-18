@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="py-5" style="background: linear-gradient(90deg, #0a2540 0%, #00c6d7 100%); color: white;">
    <div class="container text-center">
        <h1 class="display-5 fw-bold mb-2">Training Program</h1>
        <p class="lead mb-0">Level up your skills. Build MVPs. Get certified. All with expert-led, hands-on training.</p>
    </div>
</div>

<!-- Courses Section -->
<div class="py-5" style="background: #f8fafc;">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <!-- Course 1 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-lg border-0 card-hover-effect" style="border-radius:1.5rem; transition:box-shadow .2s;">
                    <div class="card-body text-center">
                        <div class="mb-3"><i class="bi bi-lightbulb text-info" style="font-size:2rem;"></i></div>
                        <h5 class="fw-bold mb-2">Build Your First MVP in 30 Days</h5>
                        <p class="text-muted small mb-3">A step-by-step bootcamp for founders and developers. Launch a real product in just one month.</p>
                        <span class="badge bg-success mb-2">Live + Recorded</span>
                        <div class="mb-2 text-primary fw-bold">50% off for Members</div>
                        <a href="#" class="btn btn-primary w-100">View Details</a>
                    </div>
                </div>
            </div>
            <!-- Course 2 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-lg border-0 card-hover-effect" style="border-radius:1.5rem; transition:box-shadow .2s;">
                    <div class="card-body text-center">
                        <div class="mb-3"><i class="bi bi-code-slash text-info" style="font-size:2rem;"></i></div>
                        <h5 class="fw-bold mb-2">React + Firebase Bootcamp</h5>
                        <p class="text-muted small mb-3">Master modern web app development with hands-on projects and real-world use cases.</p>
                        <span class="badge bg-success mb-2">Live + Recorded</span>
                        <div class="mb-2 text-primary fw-bold">50% off for Members</div>
                        <a href="#" class="btn btn-primary w-100">View Details</a>
                    </div>
                </div>
            </div>
            <!-- Course 3 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-lg border-0 card-hover-effect" style="border-radius:1.5rem; transition:box-shadow .2s;">
                    <div class="card-body text-center">
                        <div class="mb-3"><i class="bi bi-robot text-info" style="font-size:2rem;"></i></div>
                        <h5 class="fw-bold mb-2">AI MVP Builder Workshop</h5>
                        <p class="text-muted small mb-3">Learn to use AI tools to automate MVP development and accelerate your product launch.</p>
                        <span class="badge bg-success mb-2">Live + Recorded</span>
                        <div class="mb-2 text-primary fw-bold">50% off for Members</div>
                        <a href="#" class="btn btn-primary w-100">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Certification & Portfolio Section -->
<div class="py-5" style="background: #fff;">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-md-6">
                <h3 class="fw-bold mb-3">Certification & Portfolio Projects</h3>
                <ul class="list-unstyled mb-3">
                    <li class="mb-2"><i class="bi bi-patch-check-fill text-info me-2"></i> Get certified by Codementor Club</li>
                    <li class="mb-2"><i class="bi bi-briefcase-fill text-info me-2"></i> Build real-world portfolio projects</li>
                    <li class="mb-2"><i class="bi bi-people-fill text-info me-2"></i> Join a community of builders & mentors</li>
                </ul>
                <a href="#" class="btn btn-info text-white fw-bold">See All Courses</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="https://images.unsplash.com/photo-1513258496099-48168024aec0?auto=format&fit=crop&w=500&q=80" alt="Certification" class="img-fluid rounded-4 shadow-lg" style="max-width: 350px;">
            </div>
        </div>
    </div>
</div>

<!-- Custom CSS for Card Hover -->
<style>
.card-hover-effect:hover { box-shadow: 0 8px 32px rgba(10,37,64,0.18) !important; transform: translateY(-4px) scale(1.02); }
</style>
@endsection 