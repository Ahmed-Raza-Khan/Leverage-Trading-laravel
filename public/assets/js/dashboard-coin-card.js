const cryptoData = [
    {
        id: 'btc',
        icon: 'assets/images/Bitcoin-Coin.svg',
        name: 'Bitcoin',
        symbol: 'BTC',
        price: 'USD 87334.73',
        chartimage: 'assets/images/Graph1-4.svg',
        change: { value: '2.11%', direction: 'up', color: '#2A9D90' },
        chartColor: '#10B981'
    },
    {
        id: 'eth',
        icon: 'assets/images/Etherum-Coin.svg',
        name: 'Ethereum',
        symbol: 'ETH',
        price: 'USD 3,036.96',
        chartimage: 'assets/images/Graph2.svg',
        change: { value: '1.23%', direction: 'down', color: '#FA2256' },
        chartColor: '#EF4444'
    },
    {
        id: 'usdt',
        icon: 'assets/images/Tether-Coin.svg',
        name: 'Tether',
        symbol: 'USDT',
        price: 'USD 0.9999',
        chartimage: 'assets/images/Graph3.svg',
        change: { value: '2.12%', direction: 'up', color: '#2A9D90' },
        chartColor: '#10B981'
    },
    {
        id: 'bnb',
        icon: 'assets/images/Binance-coin.svg',
        name: 'Binance Coin',
        symbol: 'BNB',
        price: 'USD 247.71',
        chartimage: 'assets/images/Graph1-4.svg',
        change: { value: '2.11%', direction: 'up', color: '#2A9D90' },
        chartColor: '#10B981'
    }
];

function renderCard(data) {
    const { icon, name, symbol, price, change, chartColor } = data;
    
    const arrowIcon = change.direction === 'up' 
    ? `<img class="w-5 h-5 mr-0" src="assets/images/Arrow-Card-Up.svg" />`
    : `<img class="w-5 h-5 mr-0" src="assets/images/Arrow-Card-Down.svg" />`;

    return `
    <div class="relative bg-[#FFFFFF] border border-[#E4E9EC] rounded-xl shadow-md p-4 flex flex-col justify-between" style="min-height: 150px; seoge-font">
        <div class="absolute top-0 left-0 h-full w-1.5 bg-[#3366CC] rounded-l-3xl"></div>
        
        <div class="flex items-center justify-between mb-6 pl-2">
        <div class="flex items-center gap-2">
            <img src="${icon}" alt="${name} icon" class="w-10 h-10 rounded-full shadow-sm">
            <div class="flex flex-col">
                <span class="text-[14px] text-[#111111] font-regular">${name}</span>
                <span class="text-[22px] font-bold text-[#333333">${price}</span>
            </div>
        </div>
        <div class="text-[14px] font-regular text-[#5D6588] self-start">${symbol}</div>
        </div>
        
        <div class="flex items-end justify-between gap-2">
            <img src="${data.chartimage}" alt="${name} Price Chart" class="w-45 h-18 rounded-md object-cover"/>
            <div class="flex items-center text-[19px] font-semibold shrink-0" style="color: ${change.color};">
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