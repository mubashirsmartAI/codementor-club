@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="py-5" style="background: linear-gradient(90deg, #0a2540 0%, #00c6d7 100%); color: white;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <h1 class="display-5 fw-bold mb-3">Hire AI Agents for MVP Development</h1>
                <p class="lead mb-4">Automate backend setup, API generation, UI scaffolding, and more. Get your MVP built in days, not months—at a fraction of the cost.</p>
                <ul class="list-unstyled mb-4">
                    <li class="mb-2"><i class="bi bi-lightning-charge-fill text-info me-2"></i> CRUD Backend Generator</li>
                    <li class="mb-2"><i class="bi bi-ui-checks-grid text-info me-2"></i> UI Builder & Prompt-based Automation</li>
                    <li class="mb-2"><i class="bi bi-cpu-fill text-info me-2"></i> Workflow Automation & Integrations</li>
                </ul>
                <a href="#pricing" class="btn btn-light btn-lg text-primary fw-bold shadow-sm">See Pricing</a>
            </div>
            <div class="col-lg-5 text-center">
                <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExb2Z2d3F2b2Z2d3F2b2Z2d3F2b2Z2d3F2b2Z2d3F2b2Z2d3F2/g9582DNuQppxC/giphy.gif" alt="AI Demo" class="img-fluid rounded-4 shadow-lg border border-3 border-white" style="max-width: 320px;">
                <div class="text-white-50 small mt-2">See AI in action: instant backend & UI generation</div>
            </div>
        </div>
    </div>
</div>

<!-- Benefits Section -->
<div class="py-5" style="background: #f8fafc;">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-lg border-0 text-center p-4 card-hover-effect" style="transition:box-shadow .2s;">
                    <div class="mb-3"><i class="bi bi-cash-coin text-info" style="font-size:2rem;"></i></div>
                    <h5 class="fw-bold mb-2">Cost-Efficient</h5>
                    <p class="text-muted">Save up to 70% compared to traditional development. Only pay for what you use.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-lg border-0 text-center p-4 card-hover-effect" style="transition:box-shadow .2s;">
                    <div class="mb-3"><i class="bi bi-clock-history text-info" style="font-size:2rem;"></i></div>
                    <h5 class="fw-bold mb-2">Fast Turnaround</h5>
                    <p class="text-muted">Launch your MVP in days, not months. AI Agents work 24/7 for rapid delivery.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-lg border-0 text-center p-4 card-hover-effect" style="transition:box-shadow .2s;">
                    <div class="mb-3"><i class="bi bi-shield-check text-info" style="font-size:2rem;"></i></div>
                    <h5 class="fw-bold mb-2">Reliable & Scalable</h5>
                    <p class="text-muted">AI Agents follow best practices and can scale with your project needs.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pricing Plans -->
<div class="py-5" id="pricing" style="background: #fff;">
    <div class="container">
        <h2 class="h3 fw-bold mb-4 text-center">AI Agent Pricing Plans</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0 p-4 text-center" style="border-radius:1.5rem;">
                    <div class="mb-3">
                        <span class="badge bg-info fs-6">Member</span>
                        <span class="badge bg-secondary fs-6 ms-2">Non-member</span>
                    </div>
                    <table class="table table-bordered mb-3">
                        <thead>
                            <tr>
                                <th>Service</th>
                                <th>Member Rate</th>
                                <th>Non-member Rate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>AI Agent (per hour)</td>
                                <td class="text-success fw-bold">$10</td>
                                <td class="text-danger fw-bold">$20</td>
                            </tr>
                            <tr>
                                <td>AI Agent (per project)</td>
                                <td class="text-success fw-bold">From $299</td>
                                <td class="text-danger fw-bold">From $499</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-muted small mb-3">Membership gives you up to 50% off, priority support, and free training seats.</div>
                    <a href="#" class="btn btn-info btn-lg text-white fw-bold w-100">Hire AI Agent</a>
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