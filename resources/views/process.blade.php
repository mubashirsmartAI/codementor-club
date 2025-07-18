@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="py-5" style="background: linear-gradient(90deg, #0a2540 0%, #00c6d7 100%); color: white;">
    <div class="container text-center">
        <h1 class="display-5 fw-bold mb-2">How It Works: Simple 4-Step Process</h1>
        <p class="lead mb-0">From idea to MVP launch in days, not months. Here’s how Codementor Club makes it easy.</p>
    </div>
</div>

<!-- Process Flow Section -->
<div class="py-5" style="background: #f8fafc;">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="row g-4 align-items-center text-center">
                    <!-- Step 1 -->
                    <div class="col-md-3">
                        <div class="card h-100 shadow-lg border-0 p-4 card-hover-effect" style="border-radius:1.5rem; transition:box-shadow .2s;">
                            <div class="mb-3"><i class="bi bi-calendar2-check text-info" style="font-size:2.2rem;"></i></div>
                            <h5 class="fw-bold mb-2">1. Book a Call</h5>
                            <p class="text-muted small">Schedule a free consultation with our experts.</p>
                        </div>
                    </div>
                    <!-- Step 2 -->
                    <div class="col-md-3">
                        <div class="card h-100 shadow-lg border-0 p-4 card-hover-effect" style="border-radius:1.5rem; transition:box-shadow .2s;">
                            <div class="mb-3"><i class="bi bi-clipboard-check text-info" style="font-size:2.2rem;"></i></div>
                            <h5 class="fw-bold mb-2">2. Define MVP Scope</h5>
                            <p class="text-muted small">We help you clarify features, tech stack, and timeline.</p>
                        </div>
                    </div>
                    <!-- Step 3 -->
                    <div class="col-md-3">
                        <div class="card h-100 shadow-lg border-0 p-4 card-hover-effect" style="border-radius:1.5rem; transition:box-shadow .2s;">
                            <div class="mb-3"><i class="bi bi-people text-info" style="font-size:2.2rem;"></i></div>
                            <h5 class="fw-bold mb-2">3. Get Matched</h5>
                            <p class="text-muted small">We match you with the best AI or Human team for your needs.</p>
                        </div>
                    </div>
                    <!-- Step 4 -->
                    <div class="col-md-3">
                        <div class="card h-100 shadow-lg border-0 p-4 card-hover-effect" style="border-radius:1.5rem; transition:box-shadow .2s;">
                            <div class="mb-3"><i class="bi bi-rocket-takeoff text-info" style="font-size:2.2rem;"></i></div>
                            <h5 class="fw-bold mb-2">4. Launch in Days</h5>
                            <p class="text-muted small">Go live with your MVP—fast, affordable, and stress-free.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Visual Stepper -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="d-flex justify-content-between align-items-center position-relative" style="margin-top: 2rem; margin-bottom: 2rem;">
                    <div class="flex-fill border-top border-3 border-info position-absolute top-50 start-0 end-0" style="z-index:0;"></div>
                    <div class="position-relative bg-white rounded-circle border border-info shadow" style="width:48px; height:48px; z-index:1;"><i class="bi bi-calendar2-check text-info" style="font-size:1.5rem; line-height:48px;"></i></div>
                    <div class="position-relative bg-white rounded-circle border border-info shadow" style="width:48px; height:48px; z-index:1;"><i class="bi bi-clipboard-check text-info" style="font-size:1.5rem; line-height:48px;"></i></div>
                    <div class="position-relative bg-white rounded-circle border border-info shadow" style="width:48px; height:48px; z-index:1;"><i class="bi bi-people text-info" style="font-size:1.5rem; line-height:48px;"></i></div>
                    <div class="position-relative bg-white rounded-circle border border-info shadow" style="width:48px; height:48px; z-index:1;"><i class="bi bi-rocket-takeoff text-info" style="font-size:1.5rem; line-height:48px;"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom CSS for Card Hover -->
<style>
.card-hover-effect:hover { box-shadow: 0 8px 32px rgba(10,37,64,0.18) !important; transform: translateY(-4px) scale(1.02); }
</style>
@endsection 