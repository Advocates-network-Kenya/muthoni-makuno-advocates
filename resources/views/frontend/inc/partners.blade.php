<div class="team partners-section pb-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2>Our Partners</h2>
            <p>Meet the partners leading MMK Advocates LLP.</p>
        </div>

        <div class="row">
            @forelse ($partners as $partner)
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card partner-card border-0 shadow-sm h-100">
                        <img src="{{ asset('storage/' . $partner->image) }}"
                             class="card-img-top"
                             alt="{{ $partner->name }}">
                        <div class="card-body text-center">
                            <h4 class="font-weight-bold">{{ $partner->name }}</h4>
                            <span class="badge partner-badge rounded-pill text-white text-uppercase mb-3">
                                {{ ucfirst($partner->role) }}
                            </span>
                            <p class="card-text">{{ Str::limit($partner->content, 100) }}</p>
                            <a href="{{ route('team.details', $partner->slug) }}" class="cta-button">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-muted mb-0">Partner profiles coming soon.</p>
                </div>
            @endforelse
        </div>

        <div class="row">
            <div class="col-12 text-center mt-4">
                <a class="cta-button" href="{{ route('ourteam') }}">Meet All Our Team</a>
            </div>
        </div>
    </div>
</div>
