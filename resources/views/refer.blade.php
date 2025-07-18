@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="py-5" style="background: linear-gradient(90deg, #0a2540 0%, #00c6d7 100%); color: white;">
    <div class="container text-center">
        <h1 class="display-5 fw-bold mb-2">Refer a Friend & Earn Rewards</h1>
        <p class="lead mb-0">Invite friends to Codementor Club and earn up to <span class="fw-bold">20% commission</span> on their projects. Grow your network, grow your rewards!</p>
    </div>
</div>

<!-- Referral Program Section -->
<div class="py-5" style="background: #f8fafc;">
    <div class="container">
        <div class="row justify-content-center align-items-center g-5">
            <div class="col-lg-6">
                <div class="card shadow-lg border-0 p-4" style="border-radius:1.5rem;">
                    <h4 class="fw-bold mb-3">Your Invite Link</h4>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="https://codementorclub.com/invite/yourcode" readonly>
                        <button class="btn btn-primary" type="button" onclick="navigator.clipboard.writeText('https://codementorclub.com/invite/yourcode')">Copy</button>
                    </div>
                    <div class="mb-2 text-muted small">Share this link with friends, founders, or colleagues. When they join and start a project, you earn commission!</div>
                    <div class="alert alert-info mt-3 mb-0" role="alert">
                        <i class="bi bi-cash-coin me-2"></i> Earn <span class="fw-bold">10%–20%</span> commission on every successful referral.
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow-lg border-0 p-4" style="border-radius:1.5rem; min-height: 250px; background: #fff;">
                    <h4 class="fw-bold mb-3">Your Referral Stats</h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Referrals Made
                            <span class="badge bg-primary rounded-pill">3</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Projects Started
                            <span class="badge bg-success rounded-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Earned Credits
                            <span class="badge bg-info rounded-pill">$350</span>
                        </li>
                    </ul>
                    <div class="text-muted small">Track your referrals and earnings here. Credits can be used for future projects or withdrawn.</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 