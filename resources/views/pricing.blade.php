@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="py-5" style="background: linear-gradient(90deg, #0a2540 0%, #00c6d7 100%); color: white;">
    <div class="container text-center">
        <h1 class="display-5 fw-bold mb-2">Pricing Plans</h1>
        <p class="lead mb-0">Transparent, flexible pricing for every stage of your MVP journey. Save more as a Codementor Club member.</p>
    </div>
</div>

<!-- Pricing Table Section -->
<div class="py-5" style="background: #f8fafc;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 p-4" style="border-radius:1.5rem;">
                    <h4 class="fw-bold mb-4 text-center">Service Pricing</h4>
                    <table class="table table-bordered text-center align-middle mb-4">
                        <thead class="table-light">
                            <tr>
                                <th>Service</th>
                                <th>Member Rate</th>
                                <th>Non-member Rate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>AI Agent</td>
                                <td class="text-success fw-bold">$10/hr</td>
                                <td class="text-danger fw-bold">$20/hr</td>
                            </tr>
                            <tr>
                                <td>Human Engineer</td>
                                <td class="text-success fw-bold">$25/hr</td>
                                <td class="text-danger fw-bold">$40/hr</td>
                            </tr>
                            <tr>
                                <td>Dedicated Team</td>
                                <td class="text-success fw-bold">From $1500/mo</td>
                                <td class="text-danger fw-bold">From $2500/mo</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-muted small text-center mb-2">
                        <strong>Note:</strong> All plans include project management, code reviews, and priority support for members.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="py-5" style="background: #fff;">
    <div class="container">
        <h2 class="h4 fw-bold mb-4 text-center">Frequently Asked Questions</h2>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                What’s included in the hourly rate?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                The hourly rate covers development, code reviews, and project management. For members, it also includes priority support and free training seats.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Can I switch between Member and Non-member plans?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes! You can upgrade or downgrade your membership at any time. Discounts and benefits apply immediately upon upgrade.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Are there any hidden fees?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                No hidden fees! All pricing is transparent. You only pay for the services you use.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                How do I get started?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Just <a href="{{ route('book-call') }}">book a call</a> or <a href="{{ route('membership') }}">join as a member</a> to get started. Our team will guide you through every step.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 