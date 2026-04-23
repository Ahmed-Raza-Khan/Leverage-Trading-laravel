@extends('layouts.app')

@section('title', 'Leverage Trading - Dashboard')

@section('content')
    @include("frontend.coin-cards")
    @include("frontend.retail-charts-asessts")
    @include("frontend.market-values")

    {{-- chart asset section --}}
    {{-- <div class="w-full mx-auto">
        <div class="flex gap-4">
            <div class="flex-1 border border-[#E4E9EC] rounded-xl p-4 shadow-sm">
                <div class="flex items-center justify-between mb-3">
                    <h2 class="text-[30px] font-bold text-[#000000] font-(family-name:--font-segoe-ui)">Retail VIX</h2>
                    <div class="flex gap-1 bg-[#FAFAFA] border-[#E4E9EC] border rounded-lg p-1">
                        <button onclick="setActive(this)" class="timeframe-btn px-3 py-1 text-[13px] rounded-md bg-[#E6EFFB] text-[#3366CC] font-medium transition-all">01 m</button>
                        <button onclick="setActive(this)" class="timeframe-btn px-3 py-1 text-[13px] rounded-md text-gray-500 font-medium hover:bg-white hover:text-gray-800 transition-all">15m</button>
                        <button onclick="setActive(this)" class="timeframe-btn px-3 py-1 text-[13px] rounded-md text-gray-500 font-medium hover:bg-white hover:text-gray-800 transition-all">01 h</button>
                        <button onclick="setActive(this)" class="timeframe-btn px-3 py-1 text-[13px] rounded-md text-gray-500 font-medium hover:bg-white hover:text-gray-800 transition-all">01 day</button>
                    </div>
                </div>

                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-3">
                        <span class="text-[41px] font-bold text-[#000000]">490</span>
                        <span class="text-[35px] font-regular text-[#2A9D90]">(+115%)</span>
                    </div>

                    <div class="flex items-center gap-4 text-[14px] font-medium text-[#000000]">
                        <span class="flex items-center gap-1.5 border border-[#E4E9EC] px-6 py-3 bg-[#FFFFFF80] rounded-lg">
                            <span class="w-3 h-3 rounded-full bg-[#0C5FFD] inline-block"></span>
                            Retail VIX high: 490
                        </span>
                        <span class="flex items-center gap-1.5 border border-[#E4E9EC] px-6 py-3 bg-[#FFFFFF80] rounded-lg">
                            <span class="w-3 h-3 rounded-full bg-[#94A3B8] inline-block"></span>
                            Retail VIX low: 220
                        </span>
                    </div>
                </div>

                <div class="flex items-stretch gap-1">
                    <div class="flex items-center justify-center w-5">
                        <span class="rotated-label text-[24px] text-[#000000] font-regular whitespace-nowrap">Retail VIX</span>
                    </div>

                    <div class="flex-1 relative">
                        <canvas id="vixChart" height="220"></canvas>
                    </div>

                    <div class="flex items-center justify-center w-5">
                        <span class="rotated-label text-[24px] text-[#000000] font-regular whitespace-nowrap">BTC Price</span>
                    </div>
                </div>

                <div class="mt-4 flex flex-col items-center seoge-font">
                    <p class="text-[20px] font-regular text-[#333333] mb-6">Date & Time (UTC)</p>
                    <div class="flex flex-wrap justify-center gap-8 text-[15px] text-[#333333] font-regular tracking-wide">
                        <div class="flex items-center gap-2">
                            <span class="legend-dashed"></span>
                            <span>Base line 100</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-6 h-3 bg-[#DADADA] rounded-sm"></span>
                            <span>BTC Price (Log Scale)</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-6 h-3 bg-[#3366CC] rounded-sm"></span>
                            <span>Retail Vix</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="flex gap-[1px] items-end">
                                <span class="w-2 h-5 bg-[#666666]"></span>
                                <span class="w-2 h-3 bg-[#666666]"></span>
                                <span class="w-2 h-4 bg-[#666666]"></span>
                                <span class="w-2 h-3 bg-[#666666]"></span>
                            </span>
                            <span>Volume</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-60 border border-gray-200 rounded-xl p-4 shadow-sm">
                <h3 class="text-sm font-bold text-gray-800 mb-3">Trending Assets</h3>

                <div class="space-y-3" id="trendingAssets">
                </div>
            </div>

        </div>
    </div> --}}
    
    {{-- <div class="bg-gray-100 p-6 font-sans w-full"> --}}
        {{-- <div class="w-full mx-auto flex gap-6">
            
            <div class="flex-1 bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold text-gray-800 tracking-tight">Retail VIX</h2>
                    <div class="flex bg-blue-50/50 p-1 rounded-lg border border-gray-100">
                        <button class="px-3 py-1 text-xs font-medium bg-white text-blue-600 rounded shadow-sm border border-gray-100">01 m</button>
                        <button class="px-3 py-1 text-xs font-medium text-gray-500 hover:text-blue-600">15 m</button>
                        <button class="px-3 py-1 text-xs font-medium text-gray-500 hover:text-blue-600">01 h</button>
                        <button class="px-3 py-1 text-xs font-medium text-gray-500 hover:text-blue-600">01 day</button>
                    </div>
                </div>
    
                <div class="flex justify-between items-end mb-8">
                    <div class="flex items-baseline gap-3">
                        <span class="text-4xl font-bold text-gray-900">490</span>
                        <span class="text-xl font-semibold text-emerald-500">(+115%)</span>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex items-center gap-2 bg-white px-4 py-1.5 rounded-md border border-gray-100 shadow-sm">
                            <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                            <span class="text-xs font-semibold text-gray-700">Retail VIX high: <span class="font-bold">490</span></span>
                        </div>
                        <div class="flex items-center gap-2 bg-white px-4 py-1.5 rounded-md border border-gray-100 shadow-sm">
                            <span class="w-2 h-2 rounded-full bg-gray-300"></span>
                            <span class="text-xs font-semibold text-gray-700">Retail VIX low: <span class="font-bold">220</span></span>
                        </div>
                    </div>
                </div>
    
                <div class="relative">
                    <div class="absolute -left-10 top-1/2 -rotate-90 text-[10px] uppercase tracking-widest font-bold text-gray-500">Retail VIX</div>
                    <div class="absolute -right-10 top-1/2 rotate-90 text-[10px] uppercase tracking-widest font-bold text-gray-500">BTC Price</div>
                    
                    <div id="retailVixChart" class="w-full h-[400px]"></div>
                </div>
    
                <div class="mt-4 flex flex-col items-center">
                    <p class="text-sm font-semibold text-gray-600 mb-6">Date & Time (UTC)</p>
                    <div class="flex flex-wrap justify-center gap-8 text-[11px] font-bold text-gray-500 uppercase tracking-wide">
                        <div class="flex items-center gap-2">
                            <span class="border-b-2 border-dashed border-red-500 w-8"></span>
                            <span>Base line 100</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-4 h-2 bg-gray-200 rounded-sm"></span>
                            <span>BTC Price (Log Scale)</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-4 h-2 bg-blue-600 rounded-sm"></span>
                            <span>Retail Vix</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="flex gap-[1px] items-end">
                                <span class="w-1 h-2 bg-gray-400"></span>
                                <span class="w-1 h-4 bg-gray-400"></span>
                            </span>
                            <span>Volume</span>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="w-80 bg-white rounded-xl shadow-sm p-6 border border-gray-100">
                <h3 class="text-lg font-bold text-gray-800 mb-6">Trending Assets</h3>
                
                <div class="space-y-5">
                    @php
                        $assets = [
                            ['name' => 'Bitcoin', 'symbol' => 'BTC', 'price' => '87,334.73', 'views' => '+271.26%', 'color' => 'bg-orange-400'],
                            ['name' => 'Ethereum', 'symbol' => 'ETH', 'price' => '3,036.96', 'views' => '+498.93%', 'color' => 'bg-purple-500'],
                            ['name' => 'Binance Coin', 'symbol' => 'BNB', 'price' => '247.71', 'views' => '+136.03%', 'color' => 'bg-yellow-500'],
                            ['name' => 'USDT Coin', 'symbol' => 'USDC', 'price' => '0.9998', 'views' => '+136.03%', 'color' => 'bg-blue-500'],
                            ['name' => 'Ripple Coin', 'symbol' => 'XRP', 'price' => '0.9998', 'views' => '+136.03%', 'color' => 'bg-sky-400'],
                        ];
                    @endphp
    
                    @foreach($assets as $asset)
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 {{ $asset['color'] }} rounded-full flex items-center justify-center text-white font-bold text-xs shadow-sm">
                                {{ substr($asset['symbol'], 0, 1) }}
                            </div>
                            <div>
                                <p class="text-sm font-bold text-gray-800">{{ $asset['name'] }}</p>
                                <p class="text-[10px] font-bold text-gray-400 uppercase">{{ $asset['symbol'] }}</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-bold text-gray-800">${{ $asset['price'] }}</p>
                            <p class="text-[10px] font-bold text-emerald-500">{{ $asset['views'] }} views</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div> --}}
    {{-- </div> --}}

    <script src="assets/js/dashboard-coin-card.js"></script>
    {{-- <script src="assets/js/retail-vix-assets.js"></script> --}}
@endsection