<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-10 col-md-6 text-center">
            <h1>Twitch Livecoders <span class="text-primary">Semantic search</span> with Qdrant</h1>
            <p>This demo uses short descriptions of Twitch Livecoders to perform a semantic search.</p>
            <form>
                <div class="form-group">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input wire:model="search" type="text" class="form-control" placeholder="Which streamers codes in PHP and Rust?" aria-label="Which streamers codes in PHP and Rust?">
                            <button wire:click.prevent="$refresh()" wire:loading.attr="disabled" class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-9">

            @foreach($streamers as $streamer)
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ $streamer['payload']['profile_image_url'] }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $streamer['payload']['user_name'] }}</h5>
                                <p class="card-text">{{ $streamer['payload']['description']  }}</p>
                                <div>
                                    @foreach($streamer['payload']['tags'] as $tag)
                                        @if($loop->first)
                                            <p class="card-text"><small class="text-body-secondary">Tags: </small></p>
                                        @endif
                                        <span class="badge bg-secondary">{{ $tag }}</span>
                                        @if($loop->last)
                                            <br>
                                        @endif
                                    @endforeach
                                </div>
                                <p class="card-text"><small class="text-body-secondary">{{ \Carbon\Carbon::parse($streamer['payload']['created_at'])->diffForHumans() }}</small></p>
                                <a href="{{ 'https://twitch.tv/' . $streamer['payload']['login'] }}" target="_blank" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
</div>
