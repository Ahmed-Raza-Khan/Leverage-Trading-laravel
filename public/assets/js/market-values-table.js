const cryptoTable = [
    { rank: 1, logo: 'assets/images/Bitcoin-Coin.svg', name: 'Bitcoin', symbol: 'BTC', price: '$11,911.48', change: '+2,54%', volume: '$220,083,007,631', graph: 'assets/images/market-value-graph-1.png' },
    { rank: 2, logo: 'assets/images/Etherum-Coin.svg', name: 'Ethereum', symbol: 'ETH', price: '$459.24', change: '+2,54%', volume: '$634,353,775,631', graph: 'assets/images/market-value-graph-2.png' },
    { rank: 3, logo: 'assets/images/Ripple-Coin.svg', name: 'Ripple', symbol: 'XRP', price: '+$5,553', change: '+2,54%', volume: '$220,083,007,631', graph: 'assets/images/market-value-graph-3.png' },
    { rank: 4, logo: 'assets/images/Litecoin.svg', name: 'Litecoin', symbol: 'LTC', price: '+$5,553', change: '+2,54%', volume: '$220,083,007,631', graph: 'assets/images/market-value-graph-4.png' },
    { rank: 5, logo: 'assets/images/Etherum-Coin.svg', name: 'Ethereum', symbol: 'ETH', price: '+$5,553', change: '-2,54%', volume: '$220,083,007,631', graph: 'assets/images/market-value-graph-5.png' },
    { rank: 6, logo: 'assets/images/Ripple-Coin.svg', name: 'XRP', symbol: 'XRP', price: '+$5,553', change: '-2,54%', volume: '$220,083,007,631', graph: 'assets/images/market-value-graph-6.png' },
    { rank: 7, logo: 'assets/images/Litecoin.svg', name: 'Chainlink', symbol: 'LINK', price: '+$5,553', change: '-2,54%', volume: '$220,083,007,631', graph: 'assets/images/market-value-graph-7.png' },
    { rank: 8, logo: 'assets/images/Bitcoin-Coin.svg', name: 'BitcoinCash', symbol: 'BCH', price: '+$5,553', change: '+2,54%', volume: '$220,083,007,631', graph: 'assets/images/market-value-graph-8.png' },
    { rank: 9, logo: 'assets/images/Etherum-Coin.svg', name: 'Ethereum', symbol: 'ETH', price: '+$5,553', change: '+2,54%', volume: '$220,083,007,631', graph: 'assets/images/market-value-graph-9.png' },
    { rank: 10, logo: 'assets/images/Ripple-Coin.svg', name: 'Tezos', symbol: 'XTZ', price: '+$5,553', change: '-2,54%', volume: '$220,083,007,631', graph: 'assets/images/market-value-graph-10.png' },
];

const tableBody = document.getElementById('crypto-table-body');

cryptoTable.forEach((coin, index) => {
    const row = document.createElement('tr');
    row.classList.add('border-b', 'border-[#F5F5F5', 'last:border-none', 'hover:bg-gray-50/50');

    let rankClass = 'font-semibold text-[19px] text-[#3B82F6]';
    if (coin.rank <= 3) {
        rankClass += ' bg-[#3B82F626] text-[#3B82F6] w-12 h-12 flex items-center justify-center rounded-full';
    }

    const changeIsNegative = coin.change.startsWith('-');
    const changeClass = changeIsNegative ? 'text-[#FF2E2E]' : 'text-[#2A9D90]';

    row.innerHTML = `
        <td class="py-5 pr-6 w-16">
            <span class="${rankClass}">#${coin.rank}</span>
        </td>
        <td class="py-5 pr-6 font-medium text-[16px] text-[#000000] min-w-[150px]">
            <div class="flex items-center gap-3.5">
                <img src="${coin.logo}" alt="${coin.name} logo" class="w-10 h-10 rounded-full">
                ${coin.name}
            </div>
        </td>
        <td class="py-5 pr-6 font-bold text-[16px] text-[#000000]">${coin.price}</td>
        <td class="py-5 pr-6 font-medium text-[16px] ${changeClass}">${coin.change}</td>
        <td class="py-5 pr-6 font-semibold text-[16px] text-[#000000]">${coin.volume}</td>
        <td class="py-5 pr-6">
            <img src="${coin.graph}" alt="Price graph for ${coin.name}" class="h-10 w-[190px]">
        </td>
        <td class="py-5 text-center relative w-16">
            <button class="action-btn text-gray-400 hover:text-gray-900 text-2xl transition" data-row="${index}">
                ⋮ 
            </button>
            
            <div class="dropdown-menu absolute right-2 top-14 bg-white border border-gray-100 rounded-xl shadow-lg w-36 py-2" id="dropdown-${index}">
                <button class="w-full text-left px-5 py-2 hover:bg-gray-100 transition text-gray-800">Edit</button>
                <button class="w-full text-left px-5 py-2 hover:bg-gray-100 transition text-red-600">Delete</button>
            </div>
        </td>
    `;

    tableBody.appendChild(row);
});

function closeAllDropdowns() {
    document.querySelectorAll('.dropdown-menu').forEach(menu => menu.classList.remove('show'));
}

const actionButtons = document.querySelectorAll('.action-btn');
actionButtons.forEach(btn => {
    btn.addEventListener('click', function(e) {
        e.stopPropagation();
        const rowIndex = this.getAttribute('data-row');
        const menu = document.getElementById(`dropdown-${rowIndex}`);
        
        if (menu.classList.contains('show')) {
            menu.classList.remove('show');
        } else {
            closeAllDropdowns();
            menu.classList.add('show');
        }
    });
});

const buttons = document.querySelectorAll('.pagination-btn');

    buttons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            buttons.forEach(b => {
                b.classList.remove('bg-[#3B82F6]', 'text-[#FDFDFD]', 'active-page');
                b.classList.add('text-[#3B82F6]', 'hover:bg-[#3B82F6]', 'hover:text-[#FDFDFD]');
            });

            this.classList.add('bg-[#3B82F6]', 'text-[#FDFDFD]', 'active-page');
            this.classList.remove('text-[#3B82F6]', 'hover:bg-[#3B82F6]', 'hover:text-[#FDFDFD]');
        });
    });

document.addEventListener('click', closeAllDropdowns);



// let sortDirection = true; // true = Ascending, false = Descending
// let currentSortKey = '';

// function sortTable(key) {
//     // If clicking the same header, flip the direction
//     if (currentSortKey === key) {
//         sortDirection = !sortDirection;
//     } else {
//         sortDirection = true;
//         currentSortKey = key;
//     }

//     cryptoData.sort((a, b) => {
//         let valA = a[key];
//         let valB = b[key];

//         // Clean currency strings/percentages to numbers for accurate sorting
//         if (typeof valA === 'string') {
//             valA = parseFloat(valA.replace(/[$,%+]/g, '')) || valA;
//             valB = parseFloat(valB.replace(/[$,%+]/g, '')) || valB;
//         }

//         if (valA < valB) return sortDirection ? -1 : 1;
//         if (valA > valB) return sortDirection ? 1 : -1;
//         return 0;
//     });

//     renderTable(); // Call your existing function that maps cryptoData to the <tbody>
// }

// // Ensure your renderTable function is defined to clear the body first:
// function renderTable() {
//     const tableBody = document.getElementById('crypto-table-body');
//     tableBody.innerHTML = ''; // Clear existing
    
//     cryptoData.forEach((coin, index) => {
//         // ... (Your existing code to create and append the row)
//     });
// }