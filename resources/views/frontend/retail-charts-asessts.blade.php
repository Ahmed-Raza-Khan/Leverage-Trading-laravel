{{-- chart asset section --}}
<div class="w-full mx-auto mt-15">
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

        <div class="w-70 border border-[#E4E9EC] rounded-xl p-4 shadow-sm poppins-font">
            <h3 class="text-[17px] font-semibold text-[#202226] mb-5">Trending Assets</h3>

            <div class="space-y-4" id="trendingAssets">
            </div>
        </div>

    </div>
</div>

<script src="assets/js/retail-vix-assets.js"></script>