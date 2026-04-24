function setActive(btn) {
    document.querySelectorAll('.timeframe-btn').forEach(b => {
        b.classList.remove('bg-[#E6EFFB]');
        b.classList.add('text-[#3366CC]');
    });
    btn.classList.add('bg-[#E6EFFB]', 'text-[#3366CC]');
    btn.classList.remove('text-[#3366CC]');
}

function generateData(points, base, volatility) {
    const arr = [];
    let v = base;
    for (let i = 0; i < points; i++) {
        v += (Math.random() - 0.46) * volatility;
        v = Math.max(base * 0.7, Math.min(base * 1.3, v));
        arr.push(parseFloat(v.toFixed(2)));
    }
    return arr;
}

const labels = [];
const base = new Date('2025-09-19T12:00:00Z');
for (let i = 0; i < 55; i++) {
    const d = new Date(base.getTime() + i * 9300);
    const hh = String(d.getUTCHours()).padStart(2, '0');
    const mm = String(d.getUTCMinutes()).padStart(2, '0');
    labels.push(`09-19 ${hh}:${mm}`);
}

const vixData   = generateData(55, 100, 40).map((v, i) => v + i * 4);
const btcData   = generateData(200, 9300, 100);
const volData   = generateData(400, 9300, 300).map(v => Math.abs(v));

const ctx = document.getElementById('vixChart').getContext('2d');

const btcGradient = ctx.createLinearGradient(0, 0, 0, 300);
btcGradient.addColorStop(0, 'rgba(200,200,210,0.35)');
btcGradient.addColorStop(1, 'rgba(200,200,210,0.02)');

const vixGradient = ctx.createLinearGradient(0, 0, 0, 300);
vixGradient.addColorStop(0, 'rgba(59,130,246,0.25)');
vixGradient.addColorStop(1, 'rgba(59,130,246,0.02)');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels,
        datasets: [
            {
                type: 'line',
                label: 'BTC Price',
                data: btcData,
                borderColor: 'rgba(180,180,195,0.9)',
                backgroundColor: btcGradient,
                borderWidth: 1.5,
                pointRadius: 0,
                fill: true,
                tension: 0.4,
                yAxisID: 'yRight',
                order: 3,
            },
            {
                type: 'line',
                label: 'Retail VIX',
                data: vixData,
                borderColor: '#2563eb',
                backgroundColor: vixGradient,
                borderWidth: 2,
                pointRadius: 0,
                fill: true,
                tension: 0.4,
                yAxisID: 'yLeft',
                order: 2,
            },
            {
                type: 'bar',
                label: 'Volume',
                data: volData,
                backgroundColor: 'rgba(100,116,139,0.45)',
                borderRadius: 1,
                yAxisID: 'yVol',
                order: 4,
                barPercentage: 0.7,
            },
        ]
    },
    options: {
        responsive: true,
        interaction: { mode: 'index', intersect: false },
        plugins: {
            legend: { display: false },
            tooltip: {
                backgroundColor: 'rgba(255,255,255,0.97)',
                borderColor: '#e5e7eb',
                borderWidth: 1,
                titleColor: '#374151',
                bodyColor: '#6b7280',
                titleFont: { size: 11, weight: '600' },
                bodyFont: { size: 11 },
                padding: 10,
                callbacks: {
                    title: (items) => `${items[0].label} UTC`,
                    label: (item) => {
                        if (item.dataset.label === 'Retail VIX') return ` Retail VIX: ${item.raw.toFixed(0)}`;
                        if (item.dataset.label === 'BTC Price') return ` BTC: $${item.raw.toFixed(2)}`;
                        return ` Volume: ${item.raw.toFixed(0)}`;
                    }
                }
            },
            annotation: undefined,
        },
        scales: {
            x: {
                ticks: {
                    color: '#9ca3af',
                    font: { size: 9 },
                    maxRotation: 0,
                    maxTicksLimit: 9,
                },
                grid: { color: 'rgba(229,231,235,0.6)' },
                border: { display: false },
            },
            yLeft: {
                type: 'linear',
                position: 'left',
                ticks: { color: '#9ca3af', font: { size: 9 }, maxTicksLimit: 7 },
                grid: { color: 'rgba(229,231,235,0.6)' },
                border: { display: false },
            },
            yRight: {
                type: 'linear',
                position: 'right',
                ticks: {
                    color: '#9ca3af',
                    font: { size: 9 },
                    maxTicksLimit: 7,
                    callback: v => v.toLocaleString()
                },
                grid: { drawOnChartArea: false },
                border: { display: false },
            },
            yVol: {
                type: 'linear',
                position: 'left',
                display: false,
                max: Math.max(...volData) * 6,
            },
        }
    },
    plugins: [{
        id: 'baseline',
        afterDraw(chart) {
            const { ctx, scales: { yLeft, x } } = chart;
            if (!yLeft) return;
            const y = yLeft.getPixelForValue(100);
            ctx.save();
            ctx.setLineDash([5, 5]);
            ctx.strokeStyle = '#ef4444';
            ctx.lineWidth = 1.2;
            ctx.beginPath();
            ctx.moveTo(x.left, y);
            ctx.lineTo(x.right, y);
            ctx.stroke();
            ctx.restore();
        }
    }]
});

const assets = [
    { name: 'Bitcoin',      sym: 'BTC',  price: '$87,334.73', pct: '+271.26% views', color: '#ffffff', letter: 'assets/images/Bitcoin-Coin.svg' },
    { name: 'Ethereum',     sym: 'ETH',  price: '$3,036.96',  pct: '+456.93% views', color: '#ffffff', letter: 'assets/images/Etherum-Coin.svg' },
    { name: 'Binance Coin', sym: 'BNB',  price: '$247.71',    pct: '+138.03% views', color: '#ffffff', letter: 'assets/images/Binance-Coin.svg' },
    { name: 'USDT Coin',    sym: 'USDC', price: '$0.9998',    pct: '+136.03% views', color: '#ffffff', letter: 'assets/images/USDT-Coin.svg' },
    { name: 'Ripple Coin',  sym: 'Rip',  price: '$0.9998',    pct: '+136.03% views', color: '#ffffff', letter: 'assets/images/Ripple-Coin.svg' },
    { name: 'Lite Coin',    sym: 'LTE',  price: '$0.9998',    pct: '+136.03% views', color: '#ffffff', letter: 'assets/images/Litecoin.svg' },
    { name: 'USDT Coin',    sym: 'USDC', price: '$0.9998',    pct: '+136.03% views', color: '#ffffff', letter: 'assets/images/USDT-Coin.svg' },
    { name: 'Tezos',        sym: 'Rip',  price: '$0.9998',    pct: '+136.03% views', color: '#ffffff', letter: 'assets/images/Ripple-Coin.svg' },
    { name: 'USDT Coin',    sym: 'USDC', price: '$0.9998',    pct: '+136.03% views', color: '#ffffff', letter: 'assets/images/USDT-Coin.svg' },
    { name: 'Tether',       sym: 'USDT', price: '$0.99',      pct: '+271.26% views', color: '#ffffff', letter: 'assets/images/Tether-Coin.svg' },
];

const container = document.getElementById('trendingAssets');
assets.forEach(a => {
    container.innerHTML += `
    <div class="flex items-center justify-between pb-1 pt-1">
        <div class="flex items-center gap-2">
            <div class="w-10 h-10 rounded-full flex items-center justify-center"style="background:${a.color}">
                    <img src="${a.letter}" alt="${name} icon" class="w-10 h-10 rounded-full shadow-sm">
            </div>
            <div class="leading-tight">
                <div class="text-[16px] font-semibold text-[#202226] mb-1">${a.name}</div>
                <div class="text-[12px] font-regular text-[#93989A]">${a.sym}</div>
            </div>
        </div>
        <div class="text-right leading-tight">
            <div class="text-[16px] font-semibold text-[#202226] mb-1">${a.price}</div>
            <div class="text-[12px] text-[#2A9D90] font-regular">${a.pct}</div>
        </div>
    </div>
    <hr class="border-b border-[#EAEFF3] w-full">`;
});