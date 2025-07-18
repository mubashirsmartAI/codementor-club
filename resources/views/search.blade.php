@extends('layouts.app')

@section('content')
<div class="py-5" style="background: linear-gradient(90deg, #0a2540 0%, #00c6d7 100%); min-height: 220px;">
    <div class="container text-white">
        <h1 class="display-5 fw-bold mb-2">Search MVP Talent</h1>
        <p class="lead mb-0">Find the perfect AI Agent or Human Engineer for your MVP. Filter by tech stack, availability, and more.</p>
    </div>
</div>

<div class="container" style="margin-top: -80px;">
    <!-- Filters -->
    <div class="card shadow-lg p-4 mb-5 border-0" style="border-radius: 1.5rem;">
        <form class="row g-3 align-items-end">
            <div class="col-md-3">
                <label class="form-label fw-semibold">Tech Stack</label>
                <select class="form-select">
                    <option>All</option>
                    <option>React</option>
                    <option>Next.js</option>
                    <option>Flutter</option>
                    <option>Django</option>
                    <option>Laravel</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label fw-semibold">Agent Type</label>
                <select class="form-select">
                    <option>All</option>
                    <option>AI Agent</option>
                    <option>Human Engineer</option>
                </select>
            </div>
            <div class="col-md-2">
                <label class="form-label fw-semibold">Availability</label>
                <select class="form-select">
                    <option>All</option>
                    <option>Immediate</option>
                    <option>1-2 weeks</option>
                </select>
            </div>
            <div class="col-md-2">
                <label class="form-label fw-semibold">Budget Range</label>
                <select class="form-select">
                    <option>All</option>
                    <option>&lt; $20/hr</option>
                    <option>$20-40/hr</option>
                    <option>&gt; $40/hr</option>
                </select>
            </div>
            <div class="col-md-2 d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Search</button>
            </div>
        </form>
    </div>

    <!-- Talent Cards -->
    <div class="row g-4">
        <!-- Example AI Agent Card -->
        <div class="col-md-4">
            <div class="card h-100 shadow-lg border-0 card-hover-effect" style="transition:box-shadow .2s; border-radius:1.5rem;">
                <div class="card-body text-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/4712/4712035.png" alt="AI Agent" class="rounded-circle mb-3" style="width:72px; height:72px; background:#f1f5f9;">
                    <h5 class="card-title mb-1">AI CRUD Generator</h5>
                    <span class="badge bg-info mb-2">AI Agent</span>
                    <p class="text-muted small mb-3">Automates backend CRUD APIs in minutes. Supports Node, Django, Laravel, and more.</p>
                    <div class="mb-2"><span class="fw-bold text-primary">$10/hr</span> <span class="text-muted small">(Member)</span></div>
                    <a href="#" class="btn btn-primary w-100">Book Now</a>
                </div>
            </div>
        </div>
        <!-- Example Human Engineer Card -->
        <div class="col-md-4">
            <div class="card h-100 shadow-lg border-0 card-hover-effect" style="transition:box-shadow .2s; border-radius:1.5rem;">
                <div class="card-body text-center">
                    <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Engineer" class="rounded-circle mb-3" style="width:72px; height:72px;">
                    <h5 class="card-title mb-1">Sarah Malik</h5>
                    <span class="badge bg-secondary mb-2">Fullstack Engineer</span>
                    <p class="text-muted small mb-3">React, Next.js, Node.js expert. 5+ years building MVPs for startups. Available: Immediate</p>
                    <div class="mb-2"><span class="fw-bold text-primary">$25/hr</span> <span class="text-muted small">(Member)</span></div>
                    <a href="#" class="btn btn-primary w-100">Book Now</a>
                </div>
            </div>
        </div>
        <!-- Example Human Engineer Card -->
        <div class="col-md-4">
            <div class="card h-100 shadow-lg border-0 card-hover-effect" style="transition:box-shadow .2s; border-radius:1.5rem;">
                <div class="card-body text-center">
                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Engineer" class="rounded-circle mb-3" style="width:72px; height:72px;">
                    <h5 class="card-title mb-1">John Lee</h5>
                    <span class="badge bg-secondary mb-2">Backend Engineer</span>
                    <p class="text-muted small mb-3">Django, Laravel, API specialist. 7+ years experience. Available: 1-2 weeks</p>
                    <div class="mb-2"><span class="fw-bold text-primary">$40/hr</span> <span class="text-muted small">(Non-member)</span></div>
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