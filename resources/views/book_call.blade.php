@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="py-5" style="background: linear-gradient(90deg, #0a2540 0%, #00c6d7 100%); color: white;">
    <div class="container text-center">
        <h1 class="display-5 fw-bold mb-2">Book a Free Consultation Call</h1>
        <p class="lead mb-0">Let’s discuss your MVP idea, timeline, and budget. Get matched with the perfect team—AI or Human.</p>
    </div>
</div>

<!-- Book a Call Form Section -->
<div class="py-5" style="background: #f8fafc;">
    <div class="container">
        <div class="row justify-content-center align-items-center g-5">
            <div class="col-lg-6">
                <div class="card shadow-lg border-0 p-4" style="border-radius:1.5rem;">
                    <h4 class="fw-bold mb-3">Book a Call</h4>
                    <form>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Type of Project</label>
                            <select class="form-select">
                                <option>MVP for SaaS</option>
                                <option>MVP for Mobile App</option>
                                <option>AI App MVP</option>
                                <option>Internal Tools</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Urgency</label>
                            <select class="form-select">
                                <option>ASAP</option>
                                <option>1-2 weeks</option>
                                <option>1 month</option>
                                <option>Flexible</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Budget</label>
                            <select class="form-select">
                                <option>&lt; $2,000</option>
                                <option>$2,000 - $5,000</option>
                                <option>$5,000 - $10,000</option>
                                <option>&gt; $10,000</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Your Email</label>
                            <input type="email" class="form-control" placeholder="you@email.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Upload NDA (optional)</label>
                            <input type="file" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg w-100">Book Call</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="card shadow-lg border-0 p-4" style="border-radius:1.5rem; min-height: 350px; display: flex; align-items: center; justify-content: center; background: #fff;">
                    <div>
                        <div class="mb-3"><i class="bi bi-calendar-event text-info" style="font-size:3rem;"></i></div>
                        <h5 class="fw-bold mb-2">Calendar Integration</h5>
                        <p class="text-muted">Pick a time that works for you. (Google Calendar/Calendly integration coming soon!)</p>
                        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80" alt="Calendar" class="img-fluid rounded-4 shadow" style="max-width: 220px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 