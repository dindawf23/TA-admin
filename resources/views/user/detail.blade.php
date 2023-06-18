@extends('user.master')

@section('content')
    <section id="detail" class="detail-section-padding">
        <div class="container mt-5">
            <div class="row">
                <div class="col-10">
                    <img src="{{ Storage::disk('local')->exists("public/states/{$state->name}")
                    ? Storage::url('public/states/' . $state->name . "/{$state->stateImages()->first()->image}")
                    : asset('user/images/gallery.png') }}" alt="" height="548px" width="900px">
                </div>
                <div class="col-2">
                    <div class="row">
                        <img src="{{ Storage::disk('local')->exists("public/states/{$state->name}")
                                    ? Storage::url('public/states/' . $state->name . "/{$state->stateImages()->get()[1]->image}")
                                    : asset('user/images/kamar1.png') }}" alt="" height="150">
                    </div>
                    @foreach ($state->stateImages as $stateImage)
                        <div class="row mt-5">
                            <img src="{{ Storage::disk('local')->exists("public/states/{$state->name}")
                                ? Storage::url('public/states/' . $state->name . "/{$stateImage->image}")
                                : asset('user/images/kamar2.png') }}" alt="" height="150">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <section class="mt-5">
                    <h2>{{ $state->name }}</h2>
                    <div class="row">
                        <div class="col-4">
                            <div class="row">
                                <div class="col">
                                    <p>
                                        <i class="fas fa-bed"></i>
                                        Jumlah Bed : {{ $state->bedroom }}
                                    </p>
                                </div>
                                <div class="col">
                                    <p>
                                        <i class="fas fa-building"></i>
                                        Jumlah Room : {{ $state->room }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-8 d-flex justify-content-end">
                            <h3 class="text-success fw-bold">
                                Rp. {{ number_format($state->price, 0, '', '.') }}
                            </h3>
                        </div>
                    </div>
                    <p>
                        {{ $state->facilities }}
                    </p>
                </section>
            </div>
        </div>
    </section>
@endsection
