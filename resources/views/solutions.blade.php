@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="py-5" style="background: linear-gradient(90deg, #0a2540 0%, #00c6d7 100%); color: white;">
    <div class="container text-center">
        <h1 class="display-5 fw-bold mb-2">MVP Solutions for Every Need</h1>
        <p class="lead mb-0">From SaaS to AI apps, Codementor Club delivers tailored MVPs and product teams for your vision.</p>
    </div>
</div>

<!-- Solutions Section -->
<div class="py-5" style="background: #f8fafc;">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <!-- SaaS MVP -->
            <div class="col-md-4">
                <div class="card h-100 shadow-lg border-0 text-center p-4 card-hover-effect" style="border-radius:1.5rem; transition:box-shadow .2s;">
                    <div class="mb-3"><i class="bi bi-cloud-check text-info" style="font-size:2.2rem;"></i></div>
                    <h5 class="fw-bold mb-2">MVP for SaaS</h5>
                    <p class="text-muted">Launch your SaaS product with scalable, secure, and user-friendly features—fast.</p>
                </div>
            </div>
            <!-- Mobile App MVP -->
            <div class="col-md-4">
                <div class="card h-100 shadow-lg border-0 text-center p-4 card-hover-effect" style="border-radius:1.5rem; transition:box-shadow .2s;">
                    <div class="mb-3"><i class="bi bi-phone text-info" style="font-size:2.2rem;"></i></div>
                    <h5 class="fw-bold mb-2">MVP for Mobile App</h5>
                    <p class="text-muted">iOS, Android, or cross-platform—get your mobile MVP to market in record time.</p>
                </div>
            </div>
            <!-- AI App MVP -->
            <div class="col-md-4">
                <div class="card h-100 shadow-lg border-0 text-center p-4 card-hover-effect" style="border-radius:1.5rem; transition:box-shadow .2s;">
                    <div class="mb-3"><i class="bi bi-cpu text-info" style="font-size:2.2rem;"></i></div>
                    <h5 class="fw-bold mb-2">AI App MVP</h5>
                    <p class="text-muted">Integrate AI/ML features, chatbots, or automation into your MVP with expert guidance.</p>
                </div>
            </div>
            <!-- Internal Tools MVP -->
            <div class="col-md-4">
                <div class="card h-100 shadow-lg border-0 text-center p-4 card-hover-effect" style="border-radius:1.5rem; transition:box-shadow .2s;">
                    <div class="mb-3"><i class="bi bi-gear text-info" style="font-size:2.2rem;"></i></div>
                    <h5 class="fw-bold mb-2">Internal Tools MVP</h5>
                    <p class="text-muted">Streamline your business with custom dashboards, automations, and internal apps.</p>
                </div>
            </div>
            <!-- On-demand Product Teams -->
            <div class="col-md-4">
                <div class="card h-100 shadow-lg border-0 text-center p-4 card-hover-effect" style="border-radius:1.5rem; transition:box-shadow .2s;">
                    <div class="mb-3"><i class="bi bi-people-fill text-info" style="font-size:2.2rem;"></i></div>
                    <h5 class="fw-bold mb-2">On-demand Product Teams</h5>
                    <p class="text-muted">Get a dedicated team of engineers, designers, and PMs—on your terms, on your timeline.</p>
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