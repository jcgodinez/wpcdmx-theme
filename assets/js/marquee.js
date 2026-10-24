function wpcdmxInitMarquee(section) {
    if (!section) return;
    if (section.dataset.marqueeInit) return;

    var itemsGroup = section.querySelector('.wpcdmx-marquee-items');
    if (!itemsGroup) return;

    var paragraphs = itemsGroup.querySelectorAll('p');
    if (!paragraphs.length) return;

    var texts = Array.from(paragraphs)
        .map(function (p) { return p.textContent.trim(); })
        .filter(Boolean);

    if (!texts.length) return;

    section.dataset.marqueeInit = '1';

    var dot = '<span class="wpcdmx-marquee-dot">•</span>';
    var sequence = texts.map(function (t) { return t + ' ' + dot + ' '; }).join('');
    var oneCopy = sequence + sequence;

    var track = document.createElement('div');
    track.className = 'wpcdmx-marquee';
    track.innerHTML =
        '<span class="wpcdmx-marquee-content">' + oneCopy + '</span>' +
        '<span class="wpcdmx-marquee-content" aria-hidden="true">' + oneCopy + '</span>';

    itemsGroup.style.cssText = 'display:none!important';
    section.appendChild(track);

    var copyEl = track.querySelector('.wpcdmx-marquee-content');
    var copyWidth = copyEl.offsetWidth;
    if (!copyWidth) return;

    var pos = 0;
    var lastTime = null;
    var pxPerMs = 80 / 1000;

    function tick(timestamp) {
        if (lastTime === null) lastTime = timestamp;
        var delta = timestamp - lastTime;
        lastTime = timestamp;
        pos -= pxPerMs * delta;
        if (pos <= -copyWidth) pos += copyWidth;
        track.style.transform = 'translateX(' + pos + 'px)';
        requestAnimationFrame(tick);
    }

    requestAnimationFrame(tick);
}

function wpcdmxInitAllMarquees() {
    document.querySelectorAll('.wpcdmx-marquee-section').forEach(wpcdmxInitMarquee);
}

if (document.readyState === 'complete') {
    wpcdmxInitAllMarquees();
} else {
    window.addEventListener('load', wpcdmxInitAllMarquees);
}
