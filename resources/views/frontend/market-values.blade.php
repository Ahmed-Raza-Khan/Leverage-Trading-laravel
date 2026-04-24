{{-- Market Valuse --}}

<div class="w-full mx-auto bg-[#FFFFFF] p-8 rounded-2xl shadow-lg border border-[#E4E9EC] mt-10 mb-10 poppins-font">

    <div class="flex items-center justify-between mb-8">
        <h1 class="text-[30px] font-semibold text-[#000000] seoge-font">Market Values</h1>
        
        <div class="flex items-center gap-2">
            <div class="relative">
                <select class="appearance-none bg-[#FAFAFA] text-[#5E6990] text-[16px] font-medium px-7 py-2.5 rounded-xl border border-[#E2E7EA] focus:outline-none focus:ring-2 focus:ring-blue-300">
                    <option>24 Hours</option>
                    <option>7 Days</option>
                    <option>30 Days</option>
                </select>
                <span class="absolute right-3 top-9 -translate-y-1/2 pointer-events-none"><img src="assets/images/dropdown-arrow-gray.svg" alt="arrow"></span>
            </div>

            <div class="relative">
                <select class="appearance-none bg-[#FAFAFA] text-[#5E6990] text-[16px] font-medium px-7 py-2.5 rounded-xl border border-[#E2E7EA] focus:outline-none focus:ring-2 focus:ring-blue-300">
                    <option>USD</option>
                    <option>EUR</option>
                    <option>GBP</option>
                </select>
                <span class="absolute right-3 top-9 -translate-y-1/2 pointer-events-none"><img src="assets/images/dropdown-arrow-gray.svg" alt="arrow"></span>
            </div>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left table-auto">
            <thead class="text-[#000000] text-[17px] font-medium bg-[#FFFFFF]">
                <tr class="border-b border-[#E9ECFF]">
                    <th class="py-4 pr-6 cursor-pointer select-none" onclick="sortTable('rank')">
                        <div class="flex items-center gap-2">Rank 
                            <div class="flex flex-col gap-0.5">
                                <img src="assets/images/sorting-up.svg" alt="up" class="w-2.5">
                                <img src="assets/images/sorting-down.svg" alt="down" class="w-2.5">
                            </div>
                        </div>
                    </th>
                    <th class="py-4 pr-6 cursor-pointer select-none" onclick="sortTable('name')">
                        <div class="flex items-center gap-2">Coin 
                            <div class="flex flex-col gap-0.5">
                                <img src="assets/images/sorting-up.svg" alt="up" class="w-2.5">
                                <img src="assets/images/sorting-down.svg" alt="down" class="w-2.5">
                            </div>
                        </div>
                    </th>
                    <th class="py-4 pr-6 cursor-pointer select-none" onclick="sortTable('price')">
                        <div class="flex items-center gap-2">Last Price 
                            <div class="flex flex-col gap-0.5">
                                <img src="assets/images/sorting-up.svg" alt="up" class="w-2.5">
                                <img src="assets/images/sorting-down.svg" alt="down" class="w-2.5">
                            </div>
                        </div>
                    </th>
                    <th class="py-4 pr-6 cursor-pointer select-none" onclick="sortTable('change')">
                        <div class="flex items-center gap-2">Change (24h) 
                            <div class="flex flex-col gap-0.5">
                                <img src="assets/images/sorting-up.svg" alt="up" class="w-2.5">
                                <img src="assets/images/sorting-down.svg" alt="down" class="w-2.5">
                            </div>
                        </div>
                    </th>
                    <th class="py-4 pr-6 cursor-pointer select-none" onclick="sortTable('volume')">
                        <div class="flex items-center gap-2">Volume (24h) 
                            <div class="flex flex-col gap-0.5">
                                <img src="assets/images/sorting-up.svg" alt="up" class="w-2.5">
                                <img src="assets/images/sorting-down.svg" alt="down" class="w-2.5">
                            </div>
                        </div>
                    </th>
                    <th class="py-4 pr-6 cursor-pointer select-none" onclick="sortTable('volume')">
                        <div class="flex items-center gap-2"> Graph
                            <div class="flex flex-col gap-0.5">
                                <img src="assets/images/sorting-up.svg" alt="up" class="w-2.5">
                                <img src="assets/images/sorting-down.svg" alt="down" class="w-2.5">
                            </div>
                        </div>
                    </th>
                    <th class="py-4"></th> 
                </tr>
            </thead>
            <tbody id="crypto-table-body" class="poppins-font">
            </tbody>
        </table>
    </div>

    <hr class="border-gray-100 mt-10 mb-8">

    <div class="flex items-center justify-between mt-8">
        <div class="text-[#3E4954] font-medium text-[16px]">
            Showing 10 from 160 data
        </div>

        <div class="flex items-center gap-3">
            <div class="flex items-center gap-2 cursor-pointer hover:text-blue-600 transition">
                <span><img src="assets/images/pagination-left.svg" alt=""></span>
                <span class="text-[#3B82F6] font-semibold text-[19px]">Previous</span>
            </div>

            <div id="pagination-container" class="flex items-center gap-0 bg-[#3B82F61F] px-0 rounded-lg">
                <button class="pagination-btn w-11 h-11 flex items-center justify-center rounded-xl px-1 py-1 text-[19px] font-medium text-[#3B82F6] hover:bg-[#3B82F6] hover:text-[#FDFDFD] transition">1</button>
                <button class="pagination-btn w-11 h-11 flex items-center justify-center rounded-xl px-1 py-1 text-[19px] font-medium text-[#3B82F6] hover:bg-[#3B82F6] hover:text-[#FDFDFD] transition">2</button>
                <button class="pagination-btn active-page w-11 h-11 flex items-center justify-center rounded-xl px-1 py-1 text-[19px] font-medium bg-[#3B82F6] text-[#FDFDFD]">3</button>
                <button class="pagination-btn w-11 h-11 flex items-center justify-center rounded-xl px-1 py-1 text-[19px] font-medium text-[#3B82F6] hover:bg-[#3B82F6] hover:text-[#FDFDFD] transition">4</button>
            </div>

            <div class="flex items-center gap-3 cursor-pointer hover:text-blue-600 transition">
                <span class="text-[#3B82F6] font-semibold text-[19px]">Next</span>
                <span><img src="assets/images/pagination-right.svg" alt=""></span>
            </div>
        </div>
    </div>

</div>

<script src="assets/js/market-values-table.js"></script>