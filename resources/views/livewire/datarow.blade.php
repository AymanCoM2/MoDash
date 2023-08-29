<div class=" mb-2">
    <div class="card shadow-lg">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-2"> {{ $mandoob->userCode }}</div>
                <div class="col-sm-2"> {{ $mandoob->accountType }}</div>
                <div class="col-sm-2"> {{ $mandoob->user_areaCode }}</div>
                <div class="col-sm-2"> {{ $mandoob->areacode }}</div>
                <div class="col-sm-2"> {{ $mandoob->user_auth_level }}</div>
                <div class="col-sm-2"><a class="btn btn-warning " data-bs-toggle="offcanvas" href="#offcanvasExample"
                        role="button" aria-controls="offcanvasExample"
                        wire:click="sendFromRowtoSheet({{ $mandoob->id }})">
                        Manage
                    </a></div>
            </div>
        </div>
    </div>
</div>
{{-- ({{ $mandoob->id }}) --}}
