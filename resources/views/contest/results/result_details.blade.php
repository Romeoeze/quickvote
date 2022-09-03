@extends('admin.admin-master')

@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="container-fluid">

        <div class="col-md-10">
            <a href="{{ url()->previous() }}" style="float: right;" class="btn btn-rounded btn-success"><i
                    class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back
            </a>
        </div>


        <br><br>

        @php
            
            $singlepaidcontests = App\Models\Contest::with('contestants')
                ->where('id', $contest_id)
                ->where('contest_type', $category_id)
                ->get();
            
            $singlepaidcontestscorporate = App\Models\CorporateSingleContest::with('contestants')
                ->where('id', $contest_id)
                ->where('contest_type', $category_id)
                ->get();
            
            $multipaidcontests = App\Models\Multicontest::with('category')
                ->where('id', $contest_id)
                ->where('contest_type', $category_id)
                ->get();
            
            $multipaidcontestscorporate = App\Models\CorporateMultiContest::with('category')
                ->where('id', $contest_id)
                ->where('contest_type', $category_id)
                ->get();
            
            $merged = $singlepaidcontests
                ->concat($multipaidcontests)
                ->concat($singlepaidcontestscorporate)
                ->concat($multipaidcontestscorporate);
            
        @endphp


        <div class="container rounded bg-white mt-5 mb-5" style="padding: 30px;">

            <div class="row">

                @foreach ($merged as $mer)
                    @if ($mer->contest_type == 1)
                        <div class="container bootstrap snippets bootdey">
                            <div class="col-md-12">
                                <div class="profile-container">
                                    <div class="profile-header row">
                                        <div class="col-md-4 col-sm-12 text-center">
                                            <img src="{{ asset($mer->contest_image) }}" alt=""
                                                class="header-avatar">
                                        </div>
                                        <div class="col-md-8 col-sm-12 profile-info"
                                            style="text-align: center; padding:20px;">
                                            <div class="header-fullname">{{ $mer->contest_name }}</div>

                                            <div class="header-information" style="text-align: center;">
                                                {!! $mer->contest_description !!}
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 profile-stats">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-12 stats-col">
                                                    <div class="stats-value pink">

                                                        <div class="stats-title">STATUS</div>
                                                        @switch(($mer->end_date > \Carbon\Carbon::now()))
                                                            @case('1')
                                                                <p><span class="badge rounded-pill bg-success text-white">Contest
                                                                        Verified & Active</span></p>
                                                            @break

                                                            @case('2')
                                                                <p><span class="badge rounded-pill bg-warning text-black">Contest
                                                                        Pending Verification by QuickVote</span></p>
                                                            @break

                                                            @default
                                                                <p><span class="badge rounded-pill bg-danger text-black">Contest
                                                                        Ended</span></p><br>



                                                                <br>
                                                        @endswitch





                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12 stats-col">
                                                    <div class="stats-value pink"> ₦
                                                        {{ number_format($mer->vote_price, '2') }}</div>
                                                    <div class="stats-title">VOTE PRICE</div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12 stats-col">
                                                    <div class="stats-value pink">
                                                        {{ $mer->contestants->count() }}</div>
                                                    <div class="stats-title">CONTESTANTS</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                                    ORGANIZER:
                                                    <strong>{{ $mer->vendor->company_name }}</strong>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                                    START DATE:
                                                    <strong>{{ \Carbon\Carbon::parse($mer->start_date)->format('d-m-Y') }}</strong>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                                    END DATE:
                                                    <strong>{{ \Carbon\Carbon::parse($mer->end_date)->format('d-m-Y') }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="text-center mb-5">
                                <br><br>

                            </div>


                        </div>

                        @if (count($mer->contestants) > 0)
                            <div class="card-header">

                                <h3 style="text-align: center; margin: 20px 10px;">Contest Result</h3>
                            </div>
                            @foreach ($mer->contestants->sortByDESC('vote_total') as $cont)
                                <div class="card mb-3">
                                    <div class="card-body stats">
                                        <div class="d-flex flex-column flex-lg-row">
                                            <span class="avatar avatar-text rounded-3 me-4 mb-2"> <img
                                                    src="{{ asset($cont->image) }}" alt="" class="header-avatar"
                                                    style="max-width: 100px;border-radius:50%; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.35);"></span>
                                            <div class="row flex-fill">
                                                <div class="col-sm-6">
                                                    <h3> {{ $cont->name }} </h3>
                                                    <span class="badge bg-secondary">Vote Count</span> <span
                                                        class="badge bg-success">{{ number_format($cont->vote_total) }}</span>
                                                </div>


                                            </div>

                                            @if ($cont->vote_total > 0)
                                                <div class="product-price flex mt-4">
                                                    <div class="newbutton2"><i class="fa fa-trophy" style="color: orange;"
                                                            aria-hidden="true"></i>
                                                        &nbsp;&nbsp;RANK:
                                                        {{ $loop->iteration }}&nbsp;&nbsp;&nbsp; <span style="color:black">
                                                            OUT OF
                                                            {{ count($mer->contestants) }}</span>
                                                    </div>
                                                </div>
                                            @else
                                            @endif

                                        </div>
                                    </div>
                                </div>















                                @php
                                    
                                    $sum_all[] = $cont->vote_total * $mer->vote_price;
                                    $vote_total[] = $cont->vote_total;
                                    $totalcost = collect($sum_all)->sum();
                                    
                                    $totalvote = collect($vote_total)->sum();
                                    
                                @endphp




                                <hr>
                            @endforeach
                            @if ($mer->contestants)
                                <div class="summary">


                                    <h2>Summary</h2>
                                    <div class="col-sm-12 py-2">
                                        <span class="badge bg-secondary">Total Vote Count</span> <span
                                            class="badge bg-info">{{ number_format($totalvote) }}</span>
                                    </div>
                                    <hr>


                                    <hr>
                                </div>

                                @php
                                    
                                    $payout = App\Models\RequestPayout::where('contest_name', $mer->contest_name)->get();
                                    
                                @endphp
                            @endif
                        @else
                            <div class="col-md-12 card mt-5" style="padding: 20px;">

                                <div class="card-body">
                                    <br>
                                    <img src="{{ asset('images/no.png') }}"
                                        style="max-width:300px;  display: block;
                                    margin-left: auto;
                                    margin-right: auto;"><br><br>
                                    <br>
                                    <p style="text-align: center;">...no contestant found</p>
                                </div>
                            </div>
                        @endif





                        <hr>
                    @elseif ($mer->contest_type == 3)
                        <div class="container bootstrap snippets bootdey">
                            <div class="col-md-12">
                                <div class="profile-container">
                                    <div class="profile-header row">
                                        <div class="col-md-4 col-sm-12 text-center">
                                            <img src="{{ asset($mer->contest_image) }}" alt=""
                                                class="header-avatar">
                                        </div>
                                        <div class="col-md-8 col-sm-12 profile-info"
                                            style="text-align: center; padding:20px;">
                                            <div class="header-fullname">{{ $mer->contest_name }}</div>

                                            <div class="header-information" style="text-align: center;">
                                                {!! $mer->contest_description !!}
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 profile-stats">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-12 stats-col">
                                                    <div class="stats-value pink">

                                                        <div class="stats-title">STATUS</div>
                                                        @switch(($mer->end_date > \Carbon\Carbon::now()))
                                                            @case('1')
                                                                <p><span class="badge rounded-pill bg-success text-white">Contest
                                                                        Verified & Active</span></p>
                                                            @break

                                                            @case('2')
                                                                <p><span class="badge rounded-pill bg-warning text-black">Contest
                                                                        Pending Verification by QuickVote</span></p>
                                                            @break

                                                            @default
                                                                <p><span class="badge rounded-pill bg-danger text-black">Contest
                                                                        Ended</span></p><br>



                                                                <br>
                                                        @endswitch





                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12 stats-col">
                                                    <div class="stats-value pink"></div>

                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12 stats-col">
                                                    <div class="stats-value pink">
                                                        {{ $mer->contestants->count() }}</div>
                                                    <div class="stats-title">CONTESTANTS</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                                    ORGANIZER:
                                                    <strong>{{ $mer->vendor->company_name }}</strong>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                                    START DATE:
                                                    <strong>{{ \Carbon\Carbon::parse($mer->start_date)->format('d-m-Y') }}</strong>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                                    END DATE:
                                                    <strong>{{ \Carbon\Carbon::parse($mer->end_date)->format('d-m-Y') }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="text-center mb-5">
                                <br><br>

                            </div>


                        </div>

                        @if (count($mer->contestants) > 0)
                            <div class="card-header">

                                <h3 style="text-align: center; margin: 20px 10px;">Contest Result</h3>
                            </div>
                            @foreach ($mer->contestants->sortByDesc('vote_total') as $cont)
                                <div class="card mb-3">
                                    <div class="card-body stats">
                                        <div class="d-flex flex-column flex-lg-row">
                                            <span class="avatar avatar-text rounded-3 me-4 mb-2"> <img
                                                    src="{{ asset($cont->image) }}" alt="" class="header-avatar"
                                                    style="max-width: 100px;border-radius:50%; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.35);"></span>
                                            <div class="row flex-fill">
                                                <div class="col-sm-6">
                                                    <h3> {{ $cont->name }} </h3>
                                                    <span class="badge bg-secondary">Vote Count</span> <span
                                                        class="badge bg-success">{{ number_format($cont->vote_total) }}</span>
                                                </div>
                                                <div class="col-sm-6 py-2">
                                                    <div class="newbutton2"><i class="fa fa-trophy"
                                                            style="color: orange;" aria-hidden="true"></i>
                                                        &nbsp;&nbsp;RANK:
                                                        {{ $loop->iteration }}&nbsp;&nbsp;&nbsp; <span
                                                            style="color:black">
                                                            OUT OF
                                                            {{ count($mer->contestants) }}</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                @php
                                    
                                    $sum_all[] = $cont->vote_total * $mer->vote_price;
                                    $vote_total[] = $cont->vote_total;
                                    $totalcost = collect($sum_all)->sum();
                                    
                                    $totalvote = collect($vote_total)->sum();
                                    
                                @endphp




                                <hr>
                            @endforeach
                            @if ($mer->contestants)
                                <div class="summary">


                                    <h2>Summary</h2>
                                    <div class="col-sm-12 py-2">
                                        <span class="badge bg-secondary">Total Vote Count</span> <span
                                            class="badge bg-info">{{ number_format($totalvote) }}</span>
                                    </div>
                                    <hr>


                                </div>
                            @endif
                        @else
                            <div class="col-md-12 card mt-5" style="padding: 20px;">

                                <div class="card-body">
                                    <br>
                                    <img src="{{ asset('images/no.png') }}"
                                        style="max-width:300px;  display: block;
                                    margin-left: auto;
                                    margin-right: auto;"><br><br>
                                    <br>
                                    <p style="text-align: center;">...no contestant found</p>
                                </div>
                            </div>
                        @endif





                        <hr>




                        {{-- category 2 --}}
                    @elseif ($mer->contest_type == 4 && $mer->category)
                        <div class="container bootstrap snippets bootdey">
                            <div class="col-md-12">
                                <div class="profile-container">
                                    <div class="profile-header row">
                                        <div class="col-md-4 col-sm-12 text-center">
                                            <img src="{{ asset($mer->contest_image) }}" alt=""
                                                class="header-avatar">
                                        </div>
                                        <div class="col-md-8 col-sm-12 profile-info"
                                            style="text-align: center; padding:20px;">
                                            <div class="header-fullname">{{ $mer->contest_name }}</div>

                                            <div class="header-information" style="text-align: center;">
                                                {!! $mer->contest_description !!}
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 profile-stats">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-12 stats-col">
                                                    <div class="stats-value pink">
                                                        <div class="stats-title">STATUS</div>
                                                        @switch(($mer->end_date > \Carbon\Carbon::now()))
                                                            @case('1')
                                                                <p><span class="badge rounded-pill bg-success text-white">Contest
                                                                        Verified & Active</span></p>
                                                            @break

                                                            @case('2')
                                                                <p><span class="badge rounded-pill bg-warning text-black">Contest
                                                                        Pending Verification by QuickVote</span></p>
                                                            @break

                                                            @default
                                                                <p><span class="badge rounded-pill bg-danger text-black">Contest
                                                                        Ended</span></p><br>



                                                                <br>
                                                        @endswitch

                                                    </div>



                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12 stats-col">
                                                    <div class="stats-value pink"></div>
                                                    <div class="stats-title"></div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12 stats-col">
                                                    <div class="stats-value pink">
                                                        @if (count($mer->category))
                                                            {{ $mer->category->count() }}
                                                        @else
                                                            0
                                                        @endif
                                                    </div>
                                                    <div class="stats-title">CATEGORIES</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                                    ORGANIZER:
                                                    <strong>{{ $mer->vendor->company_name }}</strong>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                                    START DATE:
                                                    <strong>{{ \Carbon\Carbon::parse($mer->start_date)->format('d-m-Y') }}</strong>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                                    END DATE:
                                                    <strong>{{ \Carbon\Carbon::parse($mer->end_date)->format('d-m-Y') }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 card mt-5" style="padding: 20px; ">

                            <div class="card-body">
                                @if (count($mer->category))
                                    <div class="card-header">

                                        <h3 style="text-align: center; margin: 20px 10px;">Contest Revenue Statistics</h3>
                                    </div>
                                    @foreach ($mer->category as $cat)
                                        <div>
                                            <hr>
                                            <h4>Category Name: {{ $cat->category_name }} </h4>
                                            <hr>

                                        </div>


                                        @if ($cat->contestants)
                                            @foreach ($cat->contestants as $cont)
                                                {{-- stat of edit --}}



                                                <div class="card mb-3">
                                                    <div class="card-body stats">
                                                        <div class="d-flex flex-column flex-lg-row">
                                                            <span class="avatar avatar-text rounded-3 me-4 mb-2"> <img
                                                                    src="{{ asset($cont->image) }}" alt=""
                                                                    class="header-avatar"
                                                                    style="max-width: 100px;border-radius:50%; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.35);"></span>
                                                            <div class="row flex-fill">
                                                                <div class="col-sm-6">
                                                                    <h4> {{ $cont->name }} </h4>
                                                                    <span class="badge bg-secondary">Vote Count</span>
                                                                    <span
                                                                        class="badge bg-success">{{ number_format($cont->vote_total) }}</span>
                                                                </div>
                                                                <div class="col-sm-6 py-2">
                                                                    <div class="newbutton2"><i class="fa fa-trophy"
                                                                            style="color: orange;" aria-hidden="true"></i>
                                                                        &nbsp;&nbsp;RANK:
                                                                        {{ $loop->iteration }}&nbsp;&nbsp;&nbsp; <span
                                                                            style="color:black">
                                                                            OUT OF
                                                                            {{ count($cat->contestants) }}</span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                {{-- endof edit --}}
                                            @endforeach



                                            {{-- stat of edit --}}



                                            <div class="card mb-3">
                                                <div class="card-body stats">
                                                    <div class="d-flex flex-column flex-lg-row">
                                                        <span class="avatar avatar-text rounded-3 me-4 mb-2"></span>
                                                        <div class="row flex-fill">
                                                            <div class="col-sm-6">
                                                                <h4> {{ $cat->category_name }} </h4>
                                                                <span class="badge bg-secondary">Category Total Vote
                                                                    Count</span>
                                                                <span
                                                                    class="badge bg-success">{{ number_format($cat->contestants->pluck('vote_total')->sum()) }}</span>
                                                            </div>
                                                            <div class="col-sm-6 py-2">

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br> <br> <br>



                                            {{-- endof edit --}}


                                            @php
                                                
                                                $sum_all[] = $cat->contestants->pluck('vote_total')->sum() * $cat->vote_price;
                                                $totalcost = collect($sum_all)->sum();
                                                $vote_total[] = $cat->contestants->pluck('vote_total')->sum();
                                                $totalvote = collect($vote_total)->sum();
                                                
                                            @endphp




                                            <hr>
                                        @else
                                        @endif
                                    @endforeach
                                    @if ($cat->contestants)
                                        <div class="summary">


                                            <h2>Summary</h2>
                                            <div class="col-sm-12 py-2">
                                                <span class="badge bg-secondary">Total Vote Count</span> <span
                                                    class="badge bg-info">{{ number_format($totalvote) }}</span>
                                            </div>


                                            <hr>
                                        </div>
                                    @endif
                                @else
                                    <img src="{{ asset('images/no.png') }}"
                                        style="max-width:300px;  display: block;
                        margin-left: auto;
                        margin-right: auto;"><br><br>
                                    <br>
                                    <p style="text-align: center;">...no category and contestant found</p>
                                @endif




















                                {{-- category 2 --}}
                            @elseif ($mer->contest_type == 2 && $mer->category)
                                <div class="container bootstrap snippets bootdey">
                                    <div class="col-md-12">
                                        <div class="profile-container">
                                            <div class="profile-header row">
                                                <div class="col-md-4 col-sm-12 text-center">
                                                    <img src="{{ asset($mer->contest_image) }}" alt=""
                                                        class="header-avatar">
                                                </div>
                                                <div class="col-md-8 col-sm-12 profile-info"
                                                    style="text-align: center; padding:20px;">
                                                    <div class="header-fullname">{{ $mer->contest_name }}</div>

                                                    <div class="header-information" style="text-align: center;">
                                                        {!! $mer->contest_description !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12 profile-stats">
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-4 col-xs-12 stats-col">
                                                            <div class="stats-value pink">
                                                                <div class="stats-title">STATUS</div>
                                                                @switch(($mer->end_date > \Carbon\Carbon::now()))
                                                                    @case('1')
                                                                        <p><span class="badge rounded-pill bg-success text-white">Contest
                                                                                Verified & Active</span></p>
                                                                    @break

                                                                    @case('2')
                                                                        <p><span class="badge rounded-pill bg-warning text-black">Contest
                                                                                Pending Verification by QuickVote</span></p>
                                                                    @break

                                                                    @default
                                                                        <p><span class="badge rounded-pill bg-danger text-black">Contest
                                                                                Ended</span></p><br>



                                                                        <br>
                                                                @endswitch

                                                            </div>



                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12 stats-col">
                                                            <div class="stats-value pink"></div>
                                                            <div class="stats-title"></div>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12 stats-col">
                                                            <div class="stats-value pink">
                                                                @if (count($mer->category))
                                                                    {{ $mer->category->count() }}
                                                                @else
                                                                    0
                                                                @endif
                                                            </div>
                                                            <div class="stats-title">CATEGORIES</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                                            ORGANIZER:
                                                            <strong>{{ $mer->vendor->company_name }}</strong>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                                            START DATE:
                                                            <strong>{{ \Carbon\Carbon::parse($mer->start_date)->format('d-m-Y') }}</strong>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                                            END DATE:
                                                            <strong>{{ \Carbon\Carbon::parse($mer->end_date)->format('d-m-Y') }}</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 card mt-5" style="padding: 20px; ">

                                    <div class="card-body">
                                        @if (count($mer->category))
                                            <div class="card-header">

                                                <h3 style="text-align: center; margin: 20px 10px;">Contest Result
                                                </h3>
                                            </div>
                                            @foreach ($mer->category as $cat)
                                                <div>
                                                    <hr>
                                                    <h4>Category Name: {{ $cat->category_name }}
                                                    </h4>
                                                    <hr>

                                                </div>


                                                @if ($cat->contestants)
                                                    @foreach ($cat->contestants as $cont)
                                                        {{-- stat of edit --}}



                                                        <div class="card mb-3">
                                                            <div class="card-body stats">
                                                                <div class="d-flex flex-column flex-lg-row">
                                                                    <span class="avatar avatar-text rounded-3 me-4 mb-2">
                                                                        <img src="{{ asset($cont->image) }}"
                                                                            alt="" class="header-avatar"
                                                                            style="max-width: 100px;border-radius:50%; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.35);"></span>
                                                                    <div class="row flex-fill">
                                                                        <div class="col-sm-6">
                                                                            <h4> {{ $cont->name }} </h4>
                                                                            <span class="badge bg-secondary">Vote
                                                                                Count</span>
                                                                            <span
                                                                                class="badge bg-success">{{ number_format($cont->vote_total) }}</span>
                                                                        </div>
                                                                        <div class="col-sm-6 py-2">
                                                                            <div class="newbutton2"><i
                                                                                    class="fa fa-trophy"
                                                                                    style="color: orange;"
                                                                                    aria-hidden="true"></i>
                                                                                &nbsp;&nbsp;RANK:
                                                                                {{ $loop->iteration }}&nbsp;&nbsp;&nbsp;
                                                                                <span style="color:black">
                                                                                    OUT OF
                                                                                    {{ count($cat->contestants) }}</span>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        {{-- endof edit --}}
                                                    @endforeach



                                                    {{-- stat of edit --}}



                                                    <div class="card mb-3">
                                                        <div class="card-body stats">
                                                            <div class="d-flex flex-column flex-lg-row">
                                                                <span
                                                                    class="avatar avatar-text rounded-3 me-4 mb-2"></span>
                                                                <div class="row flex-fill">
                                                                    <div class="col-sm-6">
                                                                        <h4> {{ $cat->category_name }} </h4>
                                                                        <span class="badge bg-secondary">Category Total
                                                                            Vote
                                                                            Count</span>
                                                                        <span
                                                                            class="badge bg-success">{{ number_format($cat->contestants->pluck('vote_total')->sum()) }}</span>
                                                                    </div>
                                                                    <div class="col-sm-6 py-2">

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br> <br> <br>



                                                    {{-- endof edit --}}


                                                    @php
                                                        
                                                        $sum_all[] = $cat->contestants->pluck('vote_total')->sum() * $cat->vote_price;
                                                        $totalcost = collect($sum_all)->sum();
                                                        $vote_total[] = $cat->contestants->pluck('vote_total')->sum();
                                                        $totalvote = collect($vote_total)->sum();
                                                        
                                                    @endphp




                                                    <hr>
                                                @else
                                                @endif
                                            @endforeach
                                            @if ($cat->contestants)
                                                <div class="summary">


                                                    <h2>Summary</h2>
                                                    <div class="col-sm-12 py-2">
                                                        <span class="badge bg-secondary">Total Vote Count</span> <span
                                                            class="badge bg-info">{{ number_format($totalvote) }}</span>
                                                    </div>
                                                    <hr>

                                                    <hr>
                                                </div>
                                            @endif
                                        @else
                                            <img src="{{ asset('images/no.png') }}"
                                                style="max-width:300px;  display: block;
                                        margin-left: auto;
                                        margin-right: auto;"><br><br>
                                            <br>
                                            <p style="text-align: center;">...no category and contestant found</p>
                                        @endif
                    @endif































            </div>
        </div>
        @endforeach



    </div>













    </div>
    </div>




    <!-- init js -->
    <script src="{{ asset('backend/assets/js/pages/form-editor.init.js') }} "></script>

    <!-- Required datatable js -->
    <script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('backend/assets/js/pages/datatables.init.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable_wrapper').DataTable();
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
