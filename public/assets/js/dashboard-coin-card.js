const cryptoData = [
    {
        id: 'btc',
        icon: 'assets/images/Bitcoin-Coin.svg',
        name: 'Bitcoin',
        symbol: 'BTC',
        price: 'USD 87334.73',
        chartimage: 'assets/images/Graph1-4.svg',
        change: { value: '2.11%', direction: 'up', color: '#10B981' },
        chartColor: '#10B981'
    },
    {
        id: 'eth',
        icon: 'assets/images/Etherum-Coin.svg',
        name: 'Ethereum',
        symbol: 'ETH',
        price: 'USD 3,036.96',
        chartimage: 'assets/images/Graph2.svg',
        change: { value: '1.23%', direction: 'down', color: '#EF4444' },
        chartColor: '#EF4444'
    },
    {
        id: 'usdt',
        icon: 'assets/images/Tether-Coin.svg',
        name: 'Tether',
        symbol: 'USDT',
        price: 'USD 0.9999',
        chartimage: 'assets/images/Graph3.svg',
        change: { value: '2.12%', direction: 'up', color: '#10B981' },
        chartColor: '#10B981'
    },
    {
        id: 'bnb',
        icon: 'assets/images/Binance-coin.svg',
        name: 'Binance Coin',
        symbol: 'BNB',
        price: 'USD 247.71',
        chartimage: 'assets/images/Graph1-4.svg',
        change: { value: '2.11%', direction: 'up', color: '#10B981' },
        chartColor: '#10B981'
    }
];

function renderCard(data) {
    const { icon, name, symbol, price, change, chartColor } = data;
    
    const arrowIcon = change.direction === 'up' 
    ? `<svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg>`
    : `<svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3" /></svg>`;

    return `
    <div class="relative bg-card-bg rounded-xl shadow-md p-6 flex flex-col justify-between" style="min-height: 200px;">
        <div class="absolute top-0 left-0 h-full w-1.5 bg-crypto-blue rounded-l-xl"></div>
        
        <div class="flex items-center justify-between mb-6 pl-4">
        <div class="flex items-center gap-4">
            <img src="${icon}" alt="${name} icon" class="w-12 h-12 rounded-full shadow-sm">
            <div class="flex flex-col">
            <span class="text-sm text-gray-500 font-medium">${name}</span>
            <span class="text-xl font-bold text-gray-900">${price}</span>
            </div>
        </div>
        <div class="text-lg font-bold text-gray-400 self-start">${symbol}</div>
        </div>
        
        <div class="flex items-end justify-between gap-4">
            <img src="${data.chartimage}" alt="${name} Price Chart" class="w-50 h-16 rounded-md object-cover"/>
            <div class="flex items-center text-lg font-semibold shrink-0" style="color: ${change.color};">
                ${arrowIcon}
                <span>${change.value}</span>
            </div>
        </div>
    </div>
    `;
}

function renderCards() {
    const container = document.getElementById('cards-container');
    container.innerHTML = cryptoData.map(renderCard).join('');
}

document.addEventListener('DOMContentLoaded', renderCards);