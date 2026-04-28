function changeColor(el) {
    el.style.color = 'gold';
}

function resetColor(el) {
    el.style.color = '';
}

document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('article h2').forEach(function (h2) {
        h2.style.cursor = 'pointer';
        h2.style.userSelect = 'none';

        const indicator = document.createElement('span');
        indicator.textContent = ' ▼';
        indicator.style.fontSize = '0.75em';
        h2.appendChild(indicator);

        h2.addEventListener('click', function () {
            const article = h2.parentElement;
            const content = Array.from(article.children).filter(el => el !== h2);
            const isCollapsed = content[0]?.style.display === 'none';

            content.forEach(el => {
                el.style.display = isCollapsed ? '' : 'none';
            });

            indicator.textContent = isCollapsed ? ' ▼' : ' ▶';
        });
    });
});
