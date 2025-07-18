@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="py-5" style="background: linear-gradient(90deg, #0a2540 0%, #00c6d7 100%); color: white;">
    <div class="container text-center">
        <h1 class="display-5 fw-bold mb-2">Codementor Club Membership</h1>
        <p class="lead mb-0">Unlock exclusive benefits, discounts, and VIP support. Choose the plan that fits your MVP journey.</p>
    </div>
</div>

<!-- Benefits Section -->
<div class="py-5" style="background: #f8fafc;">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-md-3">
                <div class="card h-100 shadow-lg border-0 text-center p-4 card-hover-effect" style="transition:box-shadow .2s;">
                    <div class="mb-3"><i class="bi bi-percent text-info" style="font-size:2rem;"></i></div>
                    <h5 class="fw-bold mb-2">Up to 30% Discount</h5>
                    <p class="text-muted">Save on every project, every hour, every team.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 shadow-lg border-0 text-center p-4 card-hover-effect" style="transition:box-shadow .2s;">
                    <div class="mb-3"><i class="bi bi-person-badge text-info" style="font-size:2rem;"></i></div>
                    <h5 class="fw-bold mb-2">VIP Project Manager</h5>
                    <p class="text-muted">Personalized onboarding, project tracking, and support.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 shadow-lg border-0 text-center p-4 card-hover-effect" style="transition:box-shadow .2s;">
                    <div class="mb-3"><i class="bi bi-mortarboard text-info" style="font-size:2rem;"></i></div>
                    <h5 class="fw-bold mb-2">Free Training Seats</h5>
                    <p class="text-muted">Access live and recorded bootcamps for your team.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 shadow-lg border-0 text-center p-4 card-hover-effect" style="transition:box-shadow .2s;">
                    <div class="mb-3"><i class="bi bi-stars text-info" style="font-size:2rem;"></i></div>
                    <h5 class="fw-bold mb-2">Early Access</h5>
                    <p class="text-muted">Try new features and tools before anyone else.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Comparison Table -->
<div class="py-5" style="background: #fff;">
    <div class="container">
        <h2 class="h4 fw-bold mb-4 text-center">Free vs Member Comparison</h2>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <table class="table table-bordered text-center align-middle" style="border-radius:1.5rem; overflow:hidden;">
                    <thead class="table-light">
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
                        <tr>
                            <td>Early Access</td>
                            <td>-</td>
                            <td class="text-success fw-bold"><i class="bi bi-check-lg"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Plans Section -->
<div class="py-5" style="background: #f8fafc;">
    <div class="container">
        <h2 class="h4 fw-bold mb-4 text-center">Membership Plans</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-lg border-0 text-center p-4 card-hover-effect" style="border-radius:1.5rem; transition:box-shadow .2s;">
                    <h5 class="fw-bold mb-2">Monthly</h5>
                    <div class="display-6 fw-bold text-primary mb-2">$49</div>
                    <ul class="list-unstyled mb-3">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> All member benefits</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Cancel anytime</li>
                    </ul>
                    <a href="#" class="btn btn-primary btn-lg w-100">Join Monthly</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-lg border-0 text-center p-4 card-hover-effect" style="border-radius:1.5rem; transition:box-shadow .2s; border:2px solid #00c6d7;">
                    <h5 class="fw-bold mb-2">Quarterly</h5>
                    <div class="display-6 fw-bold text-primary mb-2">$129</div>
                    <ul class="list-unstyled mb-3">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> All member benefits</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Save 10%</li>
                    </ul>
                    <a href="#" class="btn btn-info btn-lg w-100 text-white">Join Quarterly</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-lg border-0 text-center p-4 card-hover-effect" style="border-radius:1.5rem; transition:box-shadow .2s;">
                    <h5 class="fw-bold mb-2">Yearly</h5>
                    <div class="display-6 fw-bold text-primary mb-2">$449</div>
                    <ul class="list-unstyled mb-3">
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> All member benefits</li>
                        <li><i class="bi bi-check-circle-fill text-success me-2"></i> Save 25%</li>
                    </ul>
                    <a href="#" class="btn btn-primary btn-lg w-100">Join Yearly</a>
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