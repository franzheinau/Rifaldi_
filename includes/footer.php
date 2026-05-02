</main>

    <footer class="site-footer">
        <div class="footer-art">▓▒░ ░▒▓</div>
        <p>&copy; <?= date('Y') ?> <?= strtoupper($nama ?? 'RIFALDI') ?>.My.id</p>
        <p style="margin-top:6px;">
            <a href="#" id="backToTop" style="color:#4a2c6e; text-decoration:none; font-family:var(--pixel); font-size:7px; letter-spacing:1px;">▲ BACK TO TOP ▲</a>
        </p>
    </footer>

</div><!-- /page-wrapper -->

<script>
// Bintang pixel
const starContainer = document.getElementById('stars');
for (let i = 0; i < 60; i++) {
    const sizes = [2, 2, 2, 4, 4, 6];
    const s  = sizes[Math.floor(Math.random() * sizes.length)];
    const el = document.createElement('div');
    el.className = 'star';
    el.style.cssText = `left:${Math.random()*100}%;top:${Math.random()*90}%;width:${s}px;height:${s}px;animation-delay:${Math.random()*2}s;animation-duration:${1.2+Math.random()}s`;
    starContainer.appendChild(el);
}

// Live clock (jika ada elemen #clock di halaman)
function updateClock() {
    const el = document.getElementById('clock');
    const dl = document.getElementById('dateline');
    if (!el) return;
    const now    = new Date();
    const pad    = n => String(n).padStart(2, '0');
    el.textContent = `${pad(now.getHours())}:${pad(now.getMinutes())}:${pad(now.getSeconds())}`;
    if (dl) {
        const days   = ['SUN','MON','TUE','WED','THU','FRI','SAT'];
        const months = ['JAN','FEB','MAR','APR','MAY','JUN','JUL','AUG','SEP','OCT','NOV','DEC'];
        dl.textContent = `${days[now.getDay()]}  ${pad(now.getDate())}-${months[now.getMonth()]}-${now.getFullYear()}`;
    }
}
updateClock();
setInterval(updateClock, 1000);

// Burung pixel terbang
let birdCount = 0;
function spawnBird() {
    if (birdCount > 5) return;
    const bird     = document.createElement('div');
    bird.className = 'bird';
    const duration = 12 + Math.random() * 10;
    bird.textContent = ['ᶺ','⌢','˄'][Math.floor(Math.random() * 3)];
    bird.style.cssText = `top:${5+Math.random()*30}%;color:#0d0720;animation-duration:${duration}s;animation-delay:${Math.random()*4}s;font-size:${8+Math.random()*6}px`;
    document.body.appendChild(bird);
    birdCount++;
    setTimeout(() => { bird.remove(); birdCount--; }, (duration + 5) * 1000);
}
spawnBird(); spawnBird(); spawnBird();
setInterval(spawnBird, 8000);

// Back to top
document.getElementById('backToTop')?.addEventListener('click', e => {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
});
</script>

</body>
</html>
